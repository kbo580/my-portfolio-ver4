<?php get_header(); ?>

  <div class="container">
    <?php get_sidebar(); ?>
    
    <div class="main-contents">
      <section class="not-found-page page-sec">
        <h2 class="heading page-heading">404 Page</h2>

        <?php get_template_part('template-parts/breadcrumbs') ?>
        <!-- /breadcrumbs -->

        <div class="inner">
          <h3 class="apolo">申し訳ありません<br>お探しのページはありませんでした。</h3>
          <p class="top-link"><a href="index.html">コチラ</a>からTopページに戻ることができます。</p>

          <figure class="kbyt-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/kbyt.png" alt="こばゆたくん">
          </figure>

          <div class="rpg-frame"><p class="rpg-serif rpg-border">「ページ」がきえてしまったかもしれません…</p></div>

        </div>
        <!-- /inner -->

      </section>
      <!-- /not-found-page -->
  
    </div>
    <!-- /main-contents -->
    
  </div>
  <!-- /container -->

  <?php get_footer(); ?>
  