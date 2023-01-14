<?php

// Template Name: applicationpage

?>



<?php get_header() ?>

<div class="applicationpage">
  <div class="sectionTitle">
    <p>お申し込みフォーム</p>
  </div>
  <div class="sectionSubTitle">
    <p>こちらはお申し込みフォームです。 お手数ですが、下記フォームより必須実行ご記入の上、送信ください。2〜3営業日中にご対応させて頂きます。</p>
  </div>

  <div class="applicationpageTopText">
    <p class="applicationpageTopTextLarge">◎フリープランのご登録について</p>
    <p>・完全無料（0円）です。</p>
    <p>・100IDまでご利用可能です。</p>
    <p>・一部機能制限あり。（共有ストレージ5GBまで、掲示板作成数10個まで、アドレス帳登録数500件まで、監査ログ保存期間14日間等、制限項目多数あり）</p>
    <p>・SLA（サービスレベル合意）は、ありません。</p>
    <p>・フリープランから有償プランへのアップグレード時は、30日間の無料トライアルは、適用されません。</p>
    <p>・メーカーサポートは、30日間ですが、弊社にてご退会まで無償サポートさせて頂きます。</p>


    <p class="applicationpageTopTextLarge">◎有償プラン（スタンダード/アドバンスト）の30日間無料トライアルについて</p>
    <p>・無料トライアルだけの実施でも問題ございません。（※自動課金等は、ございません。）30日間経過前にご継続の有無を確認させて頂きます。</p>
    <p>・無料トライアルは、仕様上、期間の延長ができませんが、再セットアップにて何度でもご実施可能です。</p>
    <p>（複数回トライアルを実施される場合は、正式利用（課金利用）直前のトライアルでのデータ/設定は、引き継ぎ可能です。</p>
    <p></p>
    <!-- <p>・有償プランのトライアルは、トライアルだけの実施でも問題ございません。（自動課金はございません。）<br>→30日間終了前に必ず、継続のご意思確認をおこなっております。ご安心くださいませ。</p>
    <p>・有償プランのトライアルは、再セットアップにて、何度でもご実施可能です。（データ/設定の引き継ぎはできません。）</p>
    <p>・有償プランのトライアルは、正式利用(課金利用)の直前の環境のデータ/設定は、引継ぎ可能です。</p>
    <p>・フリープランでは、トライアルはございません。事実上、正式利用となります。（1年間誰もログインされないと、自動退会となります。）</p>
    <p>・フリープランから有償プランへのアップグレード時は、30日間の無料トライアルは、適用されません。</p> -->
  </div>
  
  <div class="contactWrap">
    <?php echo do_shortcode('[mwform_formkey key="7"]'); ?> 
  </div>

</div>

<?php get_footer() ?>

<script>

  let password = document.getElementById("password")
  let id = document.getElementById("id")
  let groupname = document.getElementById("groupname")
  let domainWish = document.getElementById("domainWish")
  let lineworksdomainWish = document.getElementById("lineworksdomainWish")
  let validationerror = document.querySelector(".validationerror")
  let validationerror2 = document.querySelector(".validationerror2")
  let validationerror3 = document.querySelector(".validationerror3")
  let validationerror4 = document.querySelector(".validationerror4")
  let validationerror5 = document.querySelector(".validationerror5")


  groupname.addEventListener('change', inputChange)
    
    function inputChange(e) {
      let groupnamevalue = groupname.value  
      const regex = /^[a-z0-9-]{2,22}$/
      let resultpass = regex.test(groupnamevalue)

      // line/naverが含まれないものにマッチ
      const regex11 = /^(?!.*(lineworks|naver)).+$/
      let resultpass11 = regex11.test(groupnamevalue)
      
      // 最初に-を使うことにマッチしないものを検索
      const regex12 = /^(?!.*^\-).+$/
      let resultpass12 = regex12.test(groupnamevalue)

      // 最後に-を使うことにマッチしないものを検索
      const regex13 = /^(?!.*\-$).+$/
      let resultpass13 = regex13.test(groupnamevalue)

      // -が連続するものをマッチ
      const regex14 = /^(?!.*(\-){2,}).+$/
      let resultpass14 = regex14.test(groupnamevalue)
      
      if (resultpass && resultpass11 && resultpass12 && resultpass13 && resultpass14) {
        console.log("ok")
        validationerror3.style.display = "none"
      } else {
        validationerror3.textContent = "このパスワードは使用できません。"
        validationerror3.style.color = "red"
        validationerror3.style.marginLeft = 150 + "px"
        validationerror3.style.marginTop = 0 
        validationerror3.style.marginBottom = 10 + "px"
        validationerror3.style.display = "block"
        validationerror3.style.fontSize = 12 + "px"
      }
    }

  id.addEventListener('change', inputChange2)
    
    function inputChange2(e) {
      let idvalue = id.value
      const regex2 = /^[a-z0-9._-]{2,40}$/ 
      let resultpass2 = regex2.test(idvalue)

      // 最初にドットを使うことにマッチしないものを検索
      const regex3 = /^(?!.*^\.).+$/
      let resultpass3 = regex3.test(idvalue)

      // 最後にドットを使うことにマッチしないものを検索
      const regex4 = /^(?!.*\.$).+$/
      let resultpass4 = regex4.test(idvalue)

      // .が連続するものをマッチ
      const regex5 = /^(?!.*(\.){2,}).+$/
      let resultpass5 = regex5.test(idvalue)

      // ----------------------------------------
      const regex9 = /^(?!.*(admin|naver)).+$/
      let resultpass9 = regex9.test(idvalue)


      if (resultpass2 && resultpass3 && resultpass4 && resultpass5 && resultpass9) {
        console.log("ok")
        validationerror.style.display = "none"
      } else {
        validationerror.textContent = "このパスワードは使用できません。"
        validationerror.style.color = "red"
        validationerror.style.marginLeft = 150 + "px"
        validationerror.style.marginTop = 0 
        validationerror.style.marginBottom = 10 + "px"
        validationerror.style.display = "block"
        validationerror.style.fontSize = 12 + "px"
      }

    }

    password.addEventListener('change', inputChange3)
    
    function inputChange3(e) {
      let passwordvalue = password.value


    // 
      const regex6 = /^(?!.*(abc|bcd|cde|def|efg|fgh|ghi|hij|ijk|jkl|klm|lmn|mno|nop|opq|pqr|qrs|rst|stu|tuv|uvw|vwx|wxy|xyz|cba|dcb|edc|fed|gfe|hgf|ihg|jih|kji|lkj|mlk|nml|onm|pon|pqo|rqp|srq|tsr|uts|vut|wvu|xwv|yxw|zyx|123|234|345|456|567|678|789|987|876|765|654|543|432|321|zxc|xcv|cvb|vbn|bnm|mnb|nbv|bvc|vcx|cxz|asd|sdf|dfg|fgh|ghj|hjk|jkl|lkj|kjh|jhg|hgf|gfd|fds|dsa|qwe|wer|ert|rty|tyu|yui|uio|iop|poi|oiu|iuy|uyt|ytr|tre|rew|ewq)).+$/
      // キーボード配列３つ並び|zxc|xcv|cvb|vbn|bnm|mnb|nbv|bvc|vcx|cxz|asd|sdf|dfg|fgh|ghj|hjk|jkl|lkj|kjh|jhg|hgf|gfd|fds|dsa|qwe|wer|ert|rty|tyu|yui|uio|iop|poi|oiu|iuy|uyt|ytr|tre|rew|ewq|
      //  123|234|345|456|567|678|789|987|876|765|654|543|432|321|
      // |cba|dcb|edc|fed|gfe|hgf|ihg|jih|kji|lkj|mlk|nml|onm|pon|pqo|rqp|srq|tsr|uts|vut|wvu|xwv|yxw|zyx|
      let resultpass6 = regex6.test(passwordvalue)

    // 連続した３つの文字を使うことにマッチしないものを検索
      const regex7 = /^(?!.*(\w)\1{2,}).+$/ 
      let resultpass7 = regex7.test(passwordvalue)

    // 英数混合 + 特殊文字？
      const regex8 = /^(?=.*?[a-zA-Z/.!?"'`])(?=.*?\d)[a-zA-Z/.!?"'`\d]{7,20}$/
      let resultpass8 = regex8.test(passwordvalue)


      if (resultpass6 && resultpass7 && resultpass8) {
        console.log("ok")
        validationerror2.style.display = "none"
      } else {
        validationerror2.textContent = "このパスワードは使用できません。"
        validationerror2.style.color = "red"
        validationerror2.style.marginLeft = 150 + "px"
        validationerror2.style.marginTop = 0 
        validationerror2.style.marginBottom = 10 + "px"
        validationerror2.style.display = "block"
        validationerror2.style.fontSize = 12 + "px"
      }
    }
    
    domainWish.addEventListener('change', inputChange4)
  
    function inputChange4(e) {
      let domainWishvalue = domainWish.value

    // line/naverが含まれないものにマッチ
      const regex10 = /^(?!.*(line|naver)).+$/
 
      let resultpass10 = regex10.test(domainWishvalue)

      if (resultpass10) {
        // console.log("ok")
        validationerror4.style.display = "none"
      } else {
        // console.log("no")
        validationerror4.textContent = "このパスワードは使用できません。"
        validationerror4.style.color = "red"
        validationerror4.style.marginLeft = 150 + "px"
        validationerror4.style.marginTop = 0 
        validationerror4.style.marginBottom = 10 + "px"
        validationerror4.style.display = "block"
        validationerror4.style.fontSize = 12 + "px"
      }
    }


    lineworksdomainWish.addEventListener('change', inputChange5)
  
    function inputChange5(e) {
      let lineworksdomainWishvalues = lineworksdomainWish.value

    
      // const regex15 = /^[]{3,63}$/
      const regex15 = /^.{3,63}$/
 
      let resultpass15 = regex15.test(lineworksdomainWishvalues)

      if (resultpass15) {
        // console.log("ok")
        validationerror5.style.display = "none"
      } else {
        // console.log("no")
        validationerror5.textContent = "このパスワードは使用できません。"
        validationerror5.style.color = "red"
        validationerror5.style.marginLeft = 150 + "px"
        validationerror5.style.marginTop = 0 
        validationerror5.style.marginBottom = 10 + "px"
        validationerror5.style.display = "block"
        validationerror5.style.fontSize = 12 + "px"
      }
    }


    // -------------------------------------------------------製品プラン選択後---------------------------------------------------------------

    let optionValues = document.querySelector("select"),
        applicationAnnotationworksGroup1 = document.querySelector(".applicationAnnotationworksGroup1"),
        applicationAnnotationworksGroup2 = document.querySelector(".applicationAnnotationworksGroup2"),
        applicationAnnotationworksGroup3 = document.querySelector(".applicationAnnotationworksGroup3"),
        // domainWish = document.getElementById('domainWish'),
        // lineworksdomainWish = document.getElementById('lineworksdomainWish'),
        domain = document.getElementById('domain'),
        lineworksdomain = document.getElementById('lineworksdomain'),
        worksGroup = document.getElementById('worksGroup'),
        advanceSelectOnly = document.getElementById('advanceSelectOnly'),
        annotationadvanceSelectOnly = document.getElementById('annotationadvanceSelectOnly')

    function selectOption() {
      if(optionValues.value === "フリープラン") {
        lineworksdomain.classList.remove('lineworksdomainWishOpen')
        domain.classList.remove('domainWishOpen')
        worksGroup.classList.remove('worksGroupClose')
        applicationAnnotationworksGroup1.classList.remove('applicationAnnotationClose')
        applicationAnnotationworksGroup2.classList.add('applicationAnnotationClose')
        applicationAnnotationworksGroup3.classList.add('applicationAnnotationClose')
        advanceSelectOnly.classList.remove('advanceSelectOnlyOpen')

        annotationadvanceSelectOnly.classList.remove("annotationadvanceSelectOnlyOpen")

        validationerror3.style.display = "none"
        validationerror4.style.display = "none"
        validationerror5.style.display = "none"

        
      } else if (optionValues.value === "スタンダードプラン") {
        lineworksdomain.classList.remove('lineworksdomainWishOpen')
        domain.classList.remove('domainWishOpen')
        worksGroup.classList.remove('worksGroupClose')
        applicationAnnotationworksGroup1.classList.remove('applicationAnnotationClose')

        applicationAnnotationworksGroup2.classList.add('applicationAnnotationClose')
        applicationAnnotationworksGroup3.classList.add('applicationAnnotationClose')
        advanceSelectOnly.classList.remove('advanceSelectOnlyOpen')

        annotationadvanceSelectOnly.classList.remove("annotationadvanceSelectOnlyOpen")

        validationerror3.style.display = "none"
        validationerror4.style.display = "none"
        validationerror5.style.display = "none"
        
      } else {
        lineworksdomain.classList.add('lineworksdomainWishOpen')
        domain.classList.add('domainWishOpen')
        worksGroup.classList.add('worksGroupClose')
        applicationAnnotationworksGroup1.classList.add('applicationAnnotationClose')
        applicationAnnotationworksGroup2.classList.remove('applicationAnnotationClose')
        applicationAnnotationworksGroup3.classList.remove('applicationAnnotationClose')
        advanceSelectOnly.classList.add('advanceSelectOnlyOpen')

        validationerror3.style.display = "none"
        validationerror4.style.display = "none"
        
        domain.addEventListener("change", function(e) {
          domainInputJudgment()
          
          if ( (!domainInputJudgment()) && (!lineworksdomainInputJudgment()) ) {
            annotationadvanceSelectOnly.classList.add("annotationadvanceSelectOnlyOpen")
          } else {
            annotationadvanceSelectOnly.classList.remove("annotationadvanceSelectOnlyOpen")
          }
        })

        let domainInputJudg
        
        function domainInputJudgment() {
          if(domainWish.value === "") {
            return domainInputJudg = true
          } 
          if(!(domainWish.value === "")) {
            return domainInputJudg = false
          }
        }
        
        lineworksdomain.addEventListener("change", function() {
          lineworksdomainInputJudgment()
          if ( (!domainInputJudgment()) && (!lineworksdomainInputJudgment()) ) {
            annotationadvanceSelectOnly.classList.add("annotationadvanceSelectOnlyOpen")
            // validationerror4.style.display = "none"
            validationerror5.style.display = "none"
          } else {
            annotationadvanceSelectOnly.classList.remove("annotationadvanceSelectOnlyOpen")
          }
        })
        
        let lineworksdomainInputJudg

        function lineworksdomainInputJudgment() {
          if(lineworksdomainWish.value === "") {
            return lineworksdomainInputJudg = true
          } 
          if(!(lineworksdomainWish.value === "")) {
            return lineworksdomainInputJudg = false
          }
        }
        
      }
    }

    optionValues.addEventListener('change', selectOption);







  

</script>


<!-- <?php echo do_shortcode('[mwform_formkey key="387"]'); ?>   -->
