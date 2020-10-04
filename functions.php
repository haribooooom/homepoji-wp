<?php

//CSSとJSの読み込み

function register_stylesheet() {
  wp_register_style('reset', get_template_directory_uri().'/assets/css/reset.css');
  wp_register_style('style', get_template_directory_uri().'/style.css');
  wp_register_style('swiper', get_template_directory_uri().'/assets/css/swiper.min.css');
}

function add_stylesheet() {
  register_stylesheet();
  wp_enqueue_style('reset', '', array(), '1.0', false);
  wp_enqueue_style('style', '', array(), '1.0', false);
  wp_enqueue_style('swiper', '', array(), '1.0', false);
}

add_action('wp_enqueue_scripts', 'add_stylesheet');

function register_script() {
  wp_register_script('font', get_template_directory_uri().'/assets/js/font.js');
  wp_register_script('script', get_template_directory_uri().'/assets/js/main.js');
  wp_register_script('swiper', get_template_directory_uri().'/assets/js/swiper.js');
}

function add_script() {
  register_script();
  wp_enqueue_script('script', '', array(), '1.0', true);
  wp_enqueue_script('font', '', array(), '1.0', true);
  wp_enqueue_script('swiper', '', array(), '1.0', true);
}

add_action('wp_print_scripts','add_script');


//カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );

//サイドバー

if ( function_exists('register_sidebar') ) {

    register_sidebar(array(
        'name'          => 'サイドバー1',
        'id'            => 'sidebar-1',
        'class'         => 's1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name'          => 'サイドバー2',
        'id'            => 'sidebar-2',
        'class'         => 's2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

}

//概要（抜粋）の文字数
function my_length($length) {
  return 70;
}
add_filter('excerpt_mblength','my_length');


//概要（抜粋）の省略記号
function my_more($more) {
  return '…';
}
add_filter('excerpt_more', 'my_more');


//アイキャッチ画像
add_theme_support( 'post-thumbnails' );
