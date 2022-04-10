<?php get_header(); ?>

  <div class="container">

    <?php get_sidebar(); ?>

    <div class="main-contents">

      <section class="single page-sec">
        <h2 class="heading page-heading">PRACTICE</h2>
    
        <?php get_template_part('template-parts/breadcrumbs') ?>
        <!-- /breadcrumbs -->

        <div class="single__contents-wrapper inner">

          <h3 class="single__article-title"><?php the_title()?></h3>

          <figure class="single__image-wrapper">
            <img src="<?php echo CFS()->get('image');?>"  alt="<?php the_title(); ?>" class="single__image thumbnail">
          </figure>

          <ul class="single__list">
            <li class="single__list-title">サイト構成</li>
            <li class="single__list-content"><?php echo CFS()->get('structure');?></li>
          </ul>
  
          <ul class="single__list">
            <li class="single__list-title">作成ツールなど</li>
            <li class="single__list-content"><?php echo CFS()->get('tools');?></li>
          </ul>

          <ul class="single__list">
            <li class="single__list-title">制作期間</li>
            <li class="single__list-content"><?php echo CFS()->get('period');?></li>
          </ul>
        
          <ul class="single__list works-comments">
            <li class="single__list-title">注釈、一言</li>
            <li class="single__list-content"><?php echo CFS()->get('word');?></li>
          </ul>

          <div class="single__site-image-wrapper">
  
            <div class="pc-image-wrapper">
              <div class="toggle-btn" id="pcToggle"><i class="fas fa-desktop"></i>パソコンでのイメージ</div>
              <p class="click-open">※クリックで開閉できます</p>
              <div class="pc-image">
                <img src="<?php echo CFS()->get('pc-image');?>" alt="<?php the_title(); ?>のpcイメージ画像" loading="lazy">
              </div>
            </div>
            <!-- /pc-image-wrapper -->
  
            <div class="sp-image-wrapper">
              <div class="toggle-btn" id="spToggle"><i class="fas fa-mobile-alt"></i>スマホでのイメージ</div>
              <p class="click-open">※クリックで開閉できます</p>

              <div class="sp-image">
                <img src="<?php echo CFS()->get('sp-image');?>" alt="<?php the_title(); ?>のスマホイメージ画像" loading="lazy">
              </div>
            </div>
            <!-- /sp-image-wrapper -->

          </div>
          <!-- /single__site-image-wrapper -->

          <ul class="pagination">
            <li class="prev"><?php previous_post_link('%link', '<i class="fas fa-angle-left"></i>PREV'); ?></li>

            <li class="to-works"><a href="<?php echo home_url(); ?>/works" class="pagination-link"><i class="fa-solid fa-table-cells-large"></i>WORKS</a></li>
            
            <li class="next"><?php next_post_link('%link','NEXT<i class="fas fa-angle-right"></i>'); ?></li>

          </ul>

        </div>
        <!-- /single__contents-wrapper inner -->

      </section>
      <!-- /single -->

    </div>
    <!-- /main-contents -->
    
  </div>
  <!-- /container -->

  <?php get_footer(); ?>