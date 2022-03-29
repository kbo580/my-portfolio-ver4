<?php get_header(); ?>

  <div class="container">
    <?php get_sidebar(); ?>
    
    <div class="main-contents">
    <section class="works page-sec">
        <h2 class="heading page-heading"><span class="jp-title">練習用コーディング一覧</span>CORDING</h2>
        
        <?php get_template_part('template-parts/breadcrumbs') ?>
        <!-- /breadcrumbs -->

        <div class="works__wrapper inner">

          <ul class="works__item-list">
            <?php if(have_posts()): while(have_posts()) : the_post(); ?>

            <li class="works__item">
              <a href="<?php the_permalink(); ?>">
                <figure class="works__item-image-wrapper">
                  <img src="<?php echo CFS()->get('image');?>" class="works__item-image thumbnail">
                </figure>
              </a>

              <p class="works__item-title"><?php the_title()?></p>
            </li>
            <!-- /works__item -->

            <?php endwhile; ?>
            <?php else : ?>
              <p>記事がありません</p>
            <?php endif; ?>

          </ul>
          <!-- /works__item-list -->

          <?php
          $args = array(
            'mid_size' => 1, /* 現在のページの左右に表示するページ数 */
            'prev_text' => '<i class="fa-solid fa-angle-left"></i>PREV',
            'next_text' => 'NEXT<i class="fa-solid fa-angle-right"></i>', 
            'screen_reader_text' => ' ',
          );

          the_posts_pagination($args);
          ?>

        </div>
        <!-- /works__wrapper inner -->
        
      </section>
      <!-- /works -->
  
    </div>
    <!-- /main-contents -->
    
  </div>
  <!-- /container -->

  <?php get_footer(); ?>
  