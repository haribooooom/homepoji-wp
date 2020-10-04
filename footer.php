<footer class="tcenter">
  <div id="topBtn"><a href="#" class="wh">⬆︎</a></div>
  <div class="inner">
    <ul class="f-nav pc-flex bold bl mb20">
      <li><a href="#">ホーム</a></li>
      <li><a href="#about">ホメポジとは</a></li>
      <li><a href="#voice">参加者の声</a></li>
      <li><a href="#entry">参加方法</a></li>
      <li><a href="#attention">注意事項</a></li>
      <li><a href="#qa">ホメポジQ&amp;A</a></li>
    </ul>
    <!--f-nav-->
    <div class="sns mb20">
      <div class="tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>ホメポジTwitter</a></div>
    </div>

    <small>Copyright &copy; <?php bloginfo( 'name' ); ?></small>
  </div>
  <!--inner-->
</footer>
</div>
<!--wrapper-->

<?php wp_footer(); ?>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
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

  $(function() {
    $('.menubox').on('click', function() {
      $('#g-nav').toggleClass('click');
    });
  });

  let slider1 = new Swiper('.swiper-voice-container', {
    speed: 1000,
    autoplay: {
      delay: 5000,
    },
    spaceBetween: 60,
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    loop: true,
//     autoplay: true,
    autoplay: false,
  });
</script>

</body>

</html>
