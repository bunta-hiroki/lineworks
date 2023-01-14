<?php
/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
    add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
    add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
    add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
    add_theme_support( 'html5', array( /* HTML5のタグで出力 */
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );
  }
  add_action( 'after_setup_theme', 'my_setup' );



  function my_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/js/script.js',
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');


add_filter('show_admin_bar', '__return_false');






// /* インデックスと巡回の設定 */
// function add_noindex_insert(){

// 	/* 特定の固定ページの場合 */
// 	if (is_page(array('application','applicationcheck','applicationcomplete','documentrequest','documentrequestcheck','documentrequestcomplete','lineworkscontact','check','complete','personalinfometion'))) {
// 		echo '<meta name="robots" content="noindex,nofollow,noarchive">'."\n";
// 		echo '<meta name="googlebot" content="noindex,nofollow,noarchive">'."\n";
// 	}

// }
// add_action('wp_head', 'add_noindex_insert');





// メタボックスの追加
add_action( 'admin_menu', 'add_noindex_metabox' );
function add_noindex_metabox() {
    add_meta_box( 'custom_noindex', 'インデックス設定', 'create_noindex', array('post', 'page'), 'side' );
}

// 管理画面にフィールドを出力
function create_noindex() {
    $keyname = 'noindex';
    global $post;
    $get_value = get_post_meta( $post->ID, $keyname, true );
    wp_nonce_field( 'action_' . $keyname, 'nonce_' . $keyname );
    $value = 'noindex';
    $checked = '';
    if( $value === $get_value ) $checked = ' checked';
    echo '<label><input type="checkbox" name="' . $keyname . '" value="' . $value . '"' . $checked . '>' . $keyname . '</label>';
}

// カスタムフィールドの保存
add_action( 'save_post', 'save_custom_noindex' );
function save_custom_noindex( $post_id ) {
    $keyname = 'noindex';
    if ( isset( $_POST['nonce_' . $keyname] )) {
        if( check_admin_referer( 'action_' . $keyname, 'nonce_' . $keyname ) ) {
            if( isset( $_POST[$keyname] )) {
                update_post_meta( $post_id, $keyname, $_POST[$keyname] );
            } else {
                delete_post_meta( $post_id, $keyname, get_post_meta( $post_id, $keyname, true ) );
            }
        }
    }
}