<?php get_header(); ?>

<main id="main" role="main">

  <section class="main__inner">


      <div class="container">

        <div id="content" class="content">

          <div class="content__inner">

            <div class="error-messages" style="text-align:center;">

              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/00.jpg" width="1500" height="600" alt="" class="largeheader">

              <p><?php esc_html_e( 'このページは存在していないようです。' ); ?></p>

              <p><?php esc_html_e( '申し訳ございませんが、なんとかして戻ってください。' ); ?></p>

            </div>

          </div>
          <!--/.content-->

        </div>

      </div>
      <!--/.container-->


  </section>

</main>

<?php get_footer(); ?>
