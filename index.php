<?php get_header(); ?>

  <div class="mv">
    <div class="mv-wrapper">
      <h1 class="site-title mv__site-title">Yuta<br class="br"> Kobayashi's<br>Portfolio</h1>

      <div class="mv__rpg-wrapper">
        <figure class="kbyt-image mv__kbyat-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/kbyt.png" alt="こばゆたくん">
        </figure>

        <div class="rpg-frame mv__rpg-frame">
          <p class="rpg-serif mv__rpg-serif rpg-border TextTyping">ポートフォリオ を ご覧いただきありがとうございます</p>
        </div>
        <!-- /rpg-frame -->
      </div>
      <!-- /mv__rpg-wrapper -->

    </div>
    <!-- /mv-wrapper -->

    <div class="scrolldown"><span>Scroll</span></div>

  </div>
  <!-- /mv -->

  <div class="container">
    <?php get_sidebar(); ?>
    
    <div class="main-contents">
      
      <section class="works top-page-sec">
        <div class="inner">
          <h2 class="heading section-heading"><span class="jp-title">制作物</span>WORKS</h2>

          <div class="works__item-wrapper works__item-wrapper--text-align">
            <h3 class="sub-title sub-title--border">架空案件</h3>
            <p class="works__text">架空の案件を想定して作成したサイトです。</p>

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
            <!-- /works__items -->

            <div class="btn-wrapper">
              <a href="<?php echo home_url(); ?>/works" class="btn">制作物一覧へ</a>
            </div>
          </div>
          <!-- /works__item-wrapper --><!--架空案件-->
        </div>
        <!-- /inner -->

        <div class="works__item-wrapper works-sub-wrapper">
          <div class="works__text-wrapper">
            <h3 class="sub-title sub-title--border">練習用コーディング</h3>
            <p class="works__text">コーディングの練習で作成したサイトです。</p>

            <div class="link-wrapper">
              <a href="<?php echo home_url(); ?>/cording" class="more-link right-arrow">もっとみる</a>
            </div>
            <!-- /link-wrapper -->
          </div>
          <!-- /works__text-wrapper -->

          <div class="sliderarea works__image-wrapper">
            <ul class="slider">

              <!-- サブループ -->
              <?php 
                $query = new WP_Query(
                  array(
                    'post_type' => 'cording', 
                    'posts_per_page' => 3, 
                  )
                );
              ?>

              <?php if($query -> have_posts()) : ?> 
              <?php while($query -> have_posts()) : $query -> the_post(); ?> 
                <li class="slider-item">
                  <img src="<?php echo CFS()->get('image');?>" class="works__item-image thumbnail">
                </li>

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?> <
              <?php else : ?> 
                <h2>記事がありません</h2>
              <?php endif; ?>

            </ul>
            <!-- /slider -->
          </div>
          <!-- /sliderarea works__image-wrapper -->

        </div>
        <!-- /works__item-wrapper --><!--練習用コーディング-->

        <div class="works__item-wrapper works-sub-wrapper works__item-wrapper--rev">
          <div class="works__text-wrapper">
            <h3 class="sub-title sub-title--border">バナー制作</h3>
            <p class="works__text">バナー制作の練習です</p>

            <div class="link-wrapper">
              <a href="<?php echo home_url(); ?>/banners" class="more-link right-arrow">もっとみる</a>
            </div>
            <!-- /link-wrapper -->
          </div>
          <!-- /works__text-wrapper -->

          <div class="sliderarea works__image-wrapper">
            <ul class="slider">

              <!-- サブループ -->
              <?php 
                $query = new WP_Query(
                  array(
                    'post_type' => 'banners',
                    'posts_per_page' => 3, 
                  )
                );
              ?>

              <?php if($query -> have_posts()) : ?> 
              <?php while($query -> have_posts()) : $query -> the_post(); ?> 
                <li class="slider-item">
                  <img src="<?php echo CFS()->get('banner');?>" class="works__item-image thumbnail">
                </li>

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?> <
              <?php else : ?>
                <h2>記事がありません</h2>
              <?php endif; ?>

            </ul>
            <!-- /slider -->
          </div>
          <!-- /sliderarea works__image-wrapper -->

        </div>
        <!-- /works__item-wrapper --><!--バナー練習-->

        <div class="inner">
          <p class="blog-pr">学習のアウトプットのために<br><span class="blog-pr--under-line">ブログも書いております</span></p>
          
          <div class="blog-banner">
            <a href="https://kbyt-programming.com/" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_template_directory_uri(); ?>/images/blog-image.png" alt="" class="thumbnail">
            </a>
            <p class="click-open">外部リンクに移行します</p>
          </div>
          <!-- /blog-banner -->
        </div>
        <!-- /inner -->
        
      </section>
      <!-- /works -->
  
      <section class="skills top-page-sec">
        <div class="inner rev">
          <h2 class="heading section-heading section-heading__rev"><span class="jp-title">できること</span>SKILLS</h2>
  
          <div class="skills-wrapper skills__item-wrapper">
            <h3 class="sub-title sub-title--border">できること</h3>

            <div class="skills-container flex">
              <ul class="skills__item-lists">
                <li class="skill-list skill-list__image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/design.png" alt="Webデザイン" class="thumbnail"></li>
                <li class="skill-list skill-list__title">Webデザイン</li>
                <li class="skill-list skill-list__text">サイトの設計、デザインを作成し、それをもとにWebサイトの製作ができます。またタブレットやスマートフォンに対応させたレスポンシブデザインもできます。</li>
              </ul>
              <!-- /skill__lists -->
    
              <ul class="skills__item-lists">
                <li class="skill-list skill-list__image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/作成中.png" alt="コーディング" class="thumbnail"></li>
                <li class="skill-list skill-list__title">コーディング</li>
                <li class="skill-list skill-list__text">ワイヤーフレームをもとに忠実に再現をし、様々な動きやエフェクトをつけることができます。またメンテナンスがしやすく見やすいコードを書くように努めています。</li>
              </ul>
              <!-- /skills__item-lists -->
    
              <ul class="skills__item-lists">
                <li class="skill-list skill-list__image-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/design.png" alt="CMS化" class="thumbnail"></li>
                <li class="skill-list skill-list__title">CMS化</li>
                <li class="skill-list skill-list__text">Word Pressなどに代表されるものでHTMLとCSSで作成されたサイトを自身で容易に管理、更新ができるようなサイトに変更することができます。</li>
              </ul>
              <!-- /skills__item-lists -->
  
            </div>
            <!-- /skills-container -->
          </div>
          <!-- /skills-wrapper skills__item-wrapper -->

          <div class="skills-wrapper skill-set__wrapper">
            <h3 class="sub-title sub-title--border">スキルセット</h3>

            <div class="skills-container flex">
              <ul class="skill-set-list">
                <li class="skill-set-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/html&css-icon.png);" class="skill-set-list__image"></span>HTML / CSS</li>
                <li class="skill-set-list__explain">HTMLやCSSでのマークアップだけでなくSassを使用した記述も基本的な部分はできます。<br>またレスポンシブデザインへの対応も可能です。<br>エディターはVisual Studio Codeを使用しています。</li>
              </ul>
      
              <ul class="skill-set-list">
                <li class="skill-set-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/javascript_icon.png);" class="skill-set-list__image"></span>Java Script / jQuery</li>
                <li class="skill-set-list__explain">基本的な文法は一通り学習しましたので簡単なJavaScriptやjQueryを扱いWebサイトに動きをつけることができます。<br>あまりにも複雑なものは調べながらやるので時間がかかるかもしれません。</li>
              </ul>
      
              <ul class="skill-set-list">
                <li class="skill-set-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/xd_icon.png);" class="skill-set-list__image"></span>Adobe XD</li>
                <li class="skill-set-list__explain">自身のWebサイトを作成する場合はXDでワイヤーフレームを作成してコーディングをしていますので基本的な使用はできます。</li>
              </ul>
      
              <ul class="skill-set-list">
                <li class="skill-set-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/wordpress_icon.png);" class="skill-set-list__image"></span>Word Press</li>
                <li class="skill-set-list__explain">HTMLで作成したサイトをWord Press化し、更新、管理がしやすいようにすることができます。<br>また個人的なブログもWord Pressで運営しておりますので記事の更新や仕様には慣れております。</li>
              </ul>
    
              <ul class="skill-set-list">
                <li class="skill-set-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/photoshop-icon.png);" class="skill-set-list__image"></span>Photoshop</li>
                <li class="skill-set-list__explain">基本的な操作は一通りでき、画像の修正や編集、合成などができます。</li>
              </ul>
    
              <ul class="skill-set-list">
                <li class="skill-set-list__name"><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/illustrator_icon.png);" class="skill-set-list__image"></span>illustrator</li>
                <li class="skill-set-list__explain">illustratorはまだまだ学習中ですが基本的な操作は可能です。</li>
              </ul>
            </div>
            <!-- /skills-wrapper skills-container -->
  
          </div>
          <!-- /skill-set__wrapper -->
          
          <div class="btn-wrapper">
            <a href="<?php echo home_url(); ?>/profile" class="btn">プロフィールへ</a>
          </div>

        </div>
        <!-- /inner -->
  
      </section>
      <!-- /skills -->
  
      <section class="contact top-page-sec">
        <div class="inner">
          <h2 class="heading section-heading"><span class="jp-title">お問い合わせ</span>CONTACT</h2>
          <p class="contact-text">お忙しい中ご覧いただきありがとうございます。<br>お仕事の話はもちろん、サイトの感想など何でもお聞かせください。</p>

          <div class="btn-wrapper">
            <a href="<?php echo home_url(); ?>/contact" class="btn">お問い合わせへ</a>
          </div>
          <!-- /btn-wrapper -->

        </div>
        <!-- /inner -->
  
      </section>
      <!-- /contact -->
  
    </div>
    <!-- /main-contents -->
    
  </div>
  <!-- /container -->

  <?php get_footer(); ?>
  