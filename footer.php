<div id="topBtn"><a href="#">⬆︎</a></div>
<footer>
  <div class="footer__inner flex">

    <div class="logo bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepoji.png" width="150" height="150" alt="" class="largeheader"></div>

    <!--f-logo-->
    <ul class="f-nav pc__flex">
      <li><a href="#">TOP</a></li>
      <li><a href="#about">ホメポジとは</a></li>
      <li><a href="#voice">参加者の声</a></li>
      <li><a href="#way">参加方法は？</a></li>
      <li><a href="#caution">注意事項</a></li>
      <li><a href="#qa">ホメポジQ&amp;A</a></li>
    </ul>
    <!--f-nav-->
    <small>Copyright &copy; <?php bloginfo( 'name' ); ?></small>

  </div>
  <!--footer__inner-->
</footer>
</div>
<!--wrapper-->

<?php wp_footer(); ?>
<script>
  //    top
  $(function() {
    $('#topBtn').on('click', function() {
      $('html,body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  });
</script>
<script>
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
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script>
  let slider1 = new Swiper('.swiper-voice-container', {
    speed: 1000,
    autoplay: {
      delay: 5000,
    },
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    loop: true,
    autoplay: true,
  });

  let slider2 = new Swiper('.swiper-fmes-container', {
    speed: 1000,
    autoplay: {
      delay: 5000,
    },
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      300: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    },
    autoplay: true,
  });
</script>

</body>

</html>
