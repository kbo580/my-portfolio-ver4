<?php get_header(); ?>

  <div class="container">

    <?php get_sidebar(); ?>

    <div class="main-contents">

      <section class="single page-sec">
        <h2 class="heading page-heading">WORKS</h2>
    
        <?php get_template_part('template-parts/breadcrumbs') ?>
        <!-- /breadcrumbs -->

        <div class="single__contents-wrapper inner">

          <!-- タイトル --> 
          <h3 class="single__article-title"><?php the_title()?></h3>

          <!-- サムネイル -->
          <figure class="single__image-wrapper">
            <img src="<?php echo CFS()->get('image');?>"  alt="<?php the_title(); ?>" class="single__image thumbnail">
          </figure>
  
          <!-- サイトタイトルとリンク -->
          <ul class="single__list">
            <li class="single__list-title">サイト名</li>
            <li class="single__list-content"><a href="#"><?php echo CFS()->get('url');?></a></li>
            <li class="site-pass">※BASIC認証をかけてあります。<br>お手数ですがid"<?php echo CFS()->get('id');?>", パスワード"<?php echo CFS()->get('pass');?>"を入力してご覧ください</li>
          </ul>

          <!-- サイトの構成 -->
          <ul class="single__list">
            <li class="single__list-title">サイト構成</li>
            <li class="single__list-content"><?php echo CFS()->get('structure');?></li>
          </ul>
  
          <!-- 使用ツールや言語 -->
          <ul class="single__list">
            <li class="single__list-title">作成ツールなど</li>
            <li class="single__list-content"><?php echo CFS()->get('tools');?></li>
          </ul>

          <!-- 製作期間 -->
          <ul class="single__list">
            <li class="single__list-title">制作期間</li>
            <li class="single__list-content"><?php echo CFS()->get('period');?></li>
          </ul>

          <!-- サイト製作の概要 -->
          <ul class="single__list">
            <li class="single__list-title">サイト製作の概要</li>
            <li class="single__list-content"><?php echo CFS()->get('about-works');?></li>
          </ul>
          
          <!-- ターゲットの基本情報 -->
          <ul class="single__list custom-list-wrapper">
            <li class="single__list-title">ターゲットの基本情報</li>
            <?php
                $fields = $cfs->get('info-list'); 
                foreach ((array)$fields as $field) :
                  ?>
            <li class="single__list-content single__point">
              <?php echo $field['info']; ?>
            </li>
            <?php endforeach; ?>
          </ul>
          
          <!-- ゴール -->
          <ul class="single__list">
            <li class="single__list-title">ゴール</li>
            <li class="single__list-content"><?php echo CFS()->get('goal');?></li>
          </ul>
          
          <!-- ゴールまでのポイント -->
          <ul class="single__list custom-list-wrapper works-comments">
            <li class="single__list-title">ゴールまでのポイント</li>
            <?php
                $fields = $cfs->get('point-list'); 
                foreach ((array)$fields as $field) :
                  ?>
            <li class="single__list-content single__point">
              <?php echo $field['point']; ?>
            </li>
            <?php endforeach; ?>
          </ul>
          
          <!-- 注釈、一言 -->
          <!-- <ul class="single__list works-comments">
            <li class="single__list-title">注釈、一言</li>
            <li class="single__list-content"><?php echo CFS()->get('word');?></li>
          </ul> -->

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