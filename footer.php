<div id="topBtn"><a href="#">⬆︎</a></div>
<footer>
  <div class="inner flex">

    <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></div>

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
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
//    autoplay: true,
    autoplay: false,
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
//    autoplay: true,
    autoplay: false,
  });
</script>

</body>

</html>
