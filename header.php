<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">

  <title>ホメポジ | 明日にちょっと前向きになれるコミュニケーションの場所</title>

  <meta name="viewport" content="width=device-width">

  <link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>

  <!--font-awasome-->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div class="header fix">
     <div class="h-wrap">
      <div class="flex">
        <div class="logo">
          <a href="<?php echo get_permalink( get_page_by_title( '/' )->ID ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
          </a>
        </div>
        <div class="menubox">
          <span class="bar"></span>
        </div>
        <!--flex-->
        <nav id="g-nav" class="tcenter fix
          bold">
          <ul class="flex wh">
            <li id="list01"><a href="#">TOP</a></li>
            <li id="list02"><a href="#about">ホメポジとは</a></li>
            <li id="list03"><a href="#voice">参加者の声</a></li>
            <li id="list04"><a href="#entry">参加方法</a></li>
            <li id="list05"><a href="#attention">注意事項</a></li>
            <li id="list06"><a href="#qa">ホメポジQ＆A</a></li>
          </ul>
        </nav>
      </div>
      </div>
      </div>

    <div class="float flex fix bold tcenter">
      <div class="tw-share">
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-show-count="false" class="wh"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <!--share-->
      <div class="recrut">
        <a href="<?php echo get_permalink( get_page_by_title( 'Contact' )->ID ); ?>" class="wh">
          <i class="fa fa-envelope"></i><span></span></a>
      </div>
    </div>
    <!--float-->
  </header>
  <!--header-->
