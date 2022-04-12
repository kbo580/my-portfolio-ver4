<?php get_header(); ?>

  <div class="container">
    <?php get_sidebar(); ?>
    
    <div class="main-contents">
    <section class="works page-sec">
        <h2 class="heading page-heading"><span class="jp-title">バナー制作一覧</span>BANNERS</h2>
        
        <?php get_template_part('template-parts/breadcrumbs') ?>
        <!-- /breadcrumbs -->

        <div class="works__wrapper inner">

          <ul class="works__item-list banners__list">
            <?php if(have_posts()): while(have_posts()) : the_post(); ?>

            <li class="banners__item">
              <a href="#">
                <figure class="banners__image-wrapper">
                  <img src="<?php echo CFS()->get('banner');?>" alt="<?php the_title()?>" class="banners__item-image">
                </figure>
              </a>

            </li>
            <!-- /works__item -->

            <?php endwhile; ?>
            <?php else : ?>
              <p>記事がありません</p>
            <?php endif; ?>

          </ul>
          <!-- /works__item-list -->
          
          <!-- モーダル -->
          <div class="modal-wrapper" id="modal-wrapper">
            <div class="close" id="close"></div>
            
            
            <div id="modal-image-wrapper" class="modal-image-wrapper">
              <img src="" alt="">  
            </div>
          </div>
          <!-- /モーダル -->

        </div>
        <!-- /works__wrapper inner -->
        
      </section>
      <!-- /works -->
  
    </div>
    <!-- /main-contents -->
    
  </div>
  <!-- /container -->

  <?php get_footer(); ?>
  