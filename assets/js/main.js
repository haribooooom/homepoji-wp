  /**
   * 到達したら要素を表示させる
   */
  function showElementAnimation() {

    var element = document.getElementsByClassName('js-anime');
    if (!element) return; // 要素がなかったら処理をキャンセル

    //要素が200px（768px以下のウィンドウサイズでは40px）分過ぎたら表示させるために指定
    var showTiming = window.innerHeight > 768 ? 200 : 40; // 要素が出てくるタイミングはここで調整
    var scrollY = window.pageYOffset;
    var windowH = window.innerHeight;

    for (var i = 0; i < element.length; i++) {
      var elemClientRect = element[i].getBoundingClientRect();
      var elemY = scrollY + elemClientRect.top;
      if (scrollY + windowH - showTiming > elemY) {
        element[i].classList.add('is-show');
      } else if (scrollY + windowH < elemY) {
        // 上にスクロールして再度非表示にする場合はこちらを記述
        element[i].classList.remove('is-show');
      }
    }
  }
  showElementAnimation();
  window.addEventListener('scroll', showElementAnimation);

// スムーススクロール
  $(function () {
    // #で始まるアンカーをクリックした場合に処理
    $('a[href^="#"]').not('#tab>li>a').on('click', function () {

      // 移動先を取得
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top - 60;
      // スムーススクロール
      $('body,html').animate({
        scrollTop: position
      }, 200, 'swing');
      return false;
    });
    //カレント表示
    $(window).on('load resize', function () {
      var pos01 = 0;
      var pos02 = Math.round($("#about").offset().top - 60);
      var pos03 = Math.round($("#voice").offset().top - 60);
      var pos04 = Math.round($("#entry").offset().top - 60);
      var pos05 = Math.round($("#attention").offset().top - 60);
      var pos06 = Math.round($("#qa").offset().top - 60);

    });

  });

