<?php get_header(); ?>
  <div class="container">

  <?php get_sidebar(); ?>

    <div class="main-contents">
      <section class="profile page-sec">
        <h2 class="heading page-heading"><span class="jp-title">プロフィール</span>PROFILE</h2>

        <?php get_template_part('template-parts/breadcrumbs') ?>
        <!-- /breadcrumbs -->

        <div class="inner">

          <div class="about__wrapper profile-wrapper">
  
            <h3 class="profile__sec-title">About Me</h3>
            <h4 class="about__name">Kobayashi Yuta</h4>
  
            <ul class="about__text-lists">
              <li class="about__text-list">1985年生まれ愛知県名古屋市出身。<br>中学、高校では運動部、大学時代はアカペラサークルに所属しておりました。</li>
  
              <li class="about__text-list">サークルではクリエイティブなことが好きでしたので、曲のアレンジなどし、野外イベントや名古屋ブルーノートなどで歌わせていただくこともありました。</li>
  
              <li class="about__text-list">大学を卒業後は勤務先の書店での仕事のひとつであったPOP作成などを通し、デザインと出会いWEBデザインに興味を持ちました。</li>
  
              <li class="about__text-list">書店を退社後、独学で二年ほどWebデザインとコーディングを学び現在も日々学習をしております。</li>
            </ul>
            <!-- /about-text-list -->
    
          </div>
          <!-- /about__wrapper -->
        </div>
        <!-- /inner -->

        <div class="profile-wrapper profile-wrapper--bg flex">
          <div class="inner">
            <p class="hobby">趣味は野球観戦と<br>御朱印巡りです。</p>
          </div>
        </div>

        <div class="inner">
          <div class="career__wrapper profile-wrapper">
            <h3 class="profile__sec-title">Career</h3>
            
            <ul class="career__lists">
              <li class="career__list">
                <time class="career__timeline">2009.03</time>
                <div class="career__content">愛知県内の大学を卒業後実家の飲食店を継ぐ。</div>
              </li>
  
              <li class="career__list">
                <time class="career__timeline">2012.06</time>
                <div class="career__content">廃業後、名古屋市内の書店にアルバイトとして入社。<br>基本的には接客販売や配達を担当。</div>
              </li>
  
              <li class="career__list">
                <time class="career__timeline">2017.08</time>
                <div class="career__content">その後正社員となり、在庫の確認や返本などの商品管理を任される。</div>
              </li>
  
              <li class="career__list">
                <time class="career__timeline">2018.09</time>
                <div class="career__content">同市内にある他書店に転職。接客販売やシフト管理、アルバイトの育成を中心に三店舗に渡り店舗運営などを経験。その中で業務の１つであった店内POPのデザインを学ぶうちにWebデザインに興味を持ち、書籍や動画による独学を初める。</div>
              </li>
  
              <li class="career__list">
                <time class="career__timeline">2020.04〜</time>
                <div class="career__content">退社しWebサイトの作成を集中的に二年ほど学習し現在に至る。</div>
              </li>
            </ul>
              <!-- /career__lists -->
        
          </div>
          <!-- /career__wrapper -->

        </div>
        <!-- /inner -->
        
      </section>
      <!-- /profile -->

    </div>
    <!-- /main-contents -->
    
  </div>
  <!-- /container -->

  <?php get_footer(); ?>