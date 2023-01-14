

<footer>
  <div class="wrapper">
    <div class="footerButtonsWrap">
      <a href="https://r-digico.co.jp/lineworks/#lineworks" class="footerButtonWrap">
        <div class="footerButtonWrapTitle">LINE WORKSとは？</div>
      </a>
      <a href="https://r-digico.co.jp/lineworks/#lineworksReasons" class="footerButtonWrap">
        <div class="footerButtonWrapTitle">選ばれる理由</div>
      </a>
      <a href="https://r-digico.co.jp/lineworks/#lineworksdifference" class="footerButtonWrap">
        <div class="footerButtonWrapTitle">LINEとの違い</div>
      </a>
      <a href="https://r-digico.co.jp/lineworks/#feature" class="footerButtonWrap">
        <div class="footerButtonWrapTitle">主な機能</div>
      </a>
      <a href="https://r-digico.co.jp/lineworks/#priceList"class="footerButtonWrap">
        <div class="footerButtonWrapTitle">料金表</div>
      </a>
      <a href="https://r-digico.co.jp/lineworks/#featureWrap2" class="footerButtonWrap">
        <div class="footerButtonWrapTitle">導入後の効果</div>
      </a>
      <a href="https://r-digico.co.jp/lineworks/#option" class="footerButtonWrap">
        <div class="footerButtonWrapTitle">オプション</div>
      </a>
      <a href="https://r-digico.co.jp/lineworks/#application" class="footerButtonWrap">
        <div class="footerButtonWrapTitle">お申し込み後の流れ</div>
      </a>
      <a href="https://r-digico.co.jp/lineworks/#aboutDigico"class="footerButtonWrap">
        <div class="footerButtonWrapTitle">企業様へ</div>
      </a>
      <a href="https://r-digico.co.jp/lineworks/#digicoSupport" class="footerButtonWrap">
        <div class="footerButtonWrapTitle">サポート</div>
      </a>
      <a href="https://r-digico.co.jp/lineworks/#questions" class="footerButtonWrap">
        <div class="footerButtonWrapTitle">よくある質問</div>
      </a>
      <div class="emptyFooterButton"></div>
    </div>

    <div class="headerInfos">
      <div class="headerInfoWrap">
        <div class="headerInfo">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/LINEWORKS_SOZAI/phoneicon_white.png" alt="">
            <a class="footerPhonenumber">098-943-0313</a> 
          </div>
          <p>営業時間(平日09:00 ~ 18:00)</p>
        </div>
        
        <div class="headerHumbergerMenuWrap footerHumbergerMenuWrap">
          <a class="headerHumbergerMenus ">
            <div class="headerHumbergerMenu headerHumbergerMenuClick"></div>
            <div class="headerHumbergerMenu"></div>
            <div class="headerHumbergerMenu"></div>
          </a>
        </div>  
      </div>

      <div class="headerMenus">
        <a href="https://r-digico.co.jp/lineworks/documentrequest/" class="headerMenu">オンライン<br>無料説明会</a>
        <a href="https://r-digico.co.jp/lineworks/lineworkscontact" class="headerMenu">ご相談<br>お問い合わせ</a>
        <a href="https://r-digico.co.jp/lineworks/lineworkscontact"  class="headerMenu">資料請求</a>
      </div>
    </div>
  </div>


  <div class="footerSpMenu ">
    <div class="footerSpMenuWrap">
      <a href="https://r-digico.co.jp/lineworks/#lineworks">LINE WORKSとは</a>
      <a href="https://r-digico.co.jp/lineworks/#lineworksReasons">選ばれる理由</a>
      <a href="https://r-digico.co.jp/lineworks/#lineworksdifference">LINEとの違い</a>
      <a href="https://r-digico.co.jp/lineworks/#feature">主な機能</a>
      <a href="https://r-digico.co.jp/lineworks/#priceList">料金表</a>
      <a href="https://r-digico.co.jp/lineworks/#featureWrap2">導入後の効果</a>
      <a href="https://r-digico.co.jp/lineworks/#option">オプション</a>
      <a href="https://r-digico.co.jp/lineworks/#application">お申し込み後の流れ</a>
      <a href="https://r-digico.co.jp/lineworks/#aboutDigico">企業様へ</a>
      <a href="https://r-digico.co.jp/lineworks/#digicoSupport">サポート</a>
      <a href="https://r-digico.co.jp/lineworks/#questions">よくある質問</a>
    </div>
  </div>

</footer>


<!-- <?php wp_footer(); ?> -->

</body>
</html>

<script>

let headerSpMenu = document.querySelector(".headerSpMenu")
let footerSpMenu = document.querySelector(".footerSpMenu")
let headerHumbergerMenuWrap = document.querySelector(".headerHumbergerMenuWrap")
let footerHumbergerMenuWrap = document.querySelector(".footerHumbergerMenuWrap")

headerHumbergerMenuWrap.addEventListener('click', function() {
  headerSpMenu.classList.toggle('headerSpMenuOpen')
})

footerHumbergerMenuWrap.addEventListener('click', function() {
  footerSpMenu.classList.toggle('footerSpMenuOpen')
})



document.addEventListener( 'wpcf7mailsent', function( event ) {
location = '/';
}, false );


</script>