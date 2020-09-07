<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">

  <title>ホメポジ | 明日にちょっと前向きになれるコミュニケーションの場所</title>

  <meta name="viewport" content="width=device-width">

  <link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>

  <!--font-awasome-->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">

  <!--font-->
  <script>
    (function(d) {
      var config = {
          kitId: 'kly2ald',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);

  </script>


  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" type="text/css" />

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sub.css" type="text/css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header">
    <p class="logo bg">
      <a href="<?php echo get_permalink( get_page_by_title( '/' )->ID ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepoji.png" width="150" height="150" alt="" class="largeheader">
      </a>
    </p>

    <div class="send flex fix">
      <div class="tw-share">
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-show-count="false"><i class="fa fa-twitter" aria-hidden="true"></i>シェアする</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <!--share-->
      <div class="recrut">
        <a href="<?php echo get_permalink( get_page_by_title( 'Contact' )->ID ); ?>">
          <i class="fa fa-envelope"></i>応募する</a></div>
    </div>
    <!--send-->
  </header>
  <!--header-->
