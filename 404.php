<?php
/**
 * The template for displaying 404 not found pages
 *
 * @since 1.0.0
 * @package homepoji
 */
get_header(); ?>

<main class="p404">
    <img src="<?php echo get_template_directory_uri(); ?>./assets/img/404.png" width="100%" alt="">
  <div class="inner">
    <div class="container">
        <div class="error-messages tcenter mb30">
        <p class="mb10">このページは存在していないようです。<br>
        恐れ入りますが、下記のサイトマップや検索メニューからページをお探しください。</p>
        </div>
        <!--/.content-->
<div class="widget-wrap pc-flex">
  <?php if ( is_active_sidebar('sidebar-2') ) : ?>
  <?php dynamic_sidebar('sidebar-2'); ?>
</div>
<?php endif; ?>

    </div>
  </div>
  <!--__inner-->

</main>

<?php get_footer(); ?>
