<?php get_header(); ?>

  <div class="container">
    <?php get_sidebar(); ?>
    
    <div class="main-contents">
      <section class="contact page-sec">
        <h2 class="heading page-heading"><span class="jp-title">お問い合わせ</span>CONTACT</h2>

        <?php get_template_part('template-parts/breadcrumbs') ?>
        <!-- /breadcrumbs -->
        
        <div class="inner">
          <p class="contact-page-text">お忙しい中ご覧いただきありがとうございます。<br>お仕事の話はもちろん、サイトの感想など何でもお聞かせください。<span class="click-open">※は必須となります</span></p>

          <div class="form-wrapper">
            <?php the_content(); ?>
            
          </div>
          <!-- form-wrapperここまで -->

        </div>
        <!-- /inner -->

        </section>
      <!-- /contact -->
  
    </div>
    <!-- /main-contents -->
    
  </div>
  <!-- /container -->

<?php get_footer(); ?>