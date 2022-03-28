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

            <div class="form-parts rpg-frame">
              <div class="rpg-fram rpg-border">

                <label for="ofice-name" class="must form-parts__label">会社名</label>
                <input type="text" id="ofice-name" placeholder="例）山田"> 
              </div>
            </div>

            <div class="form-parts rpg-frame">
              <div class="rpg-border">
                <label for="name" class="must form-parts__label">お名前</label>
                <input type="text" id="name"  placeholder="例）山田 太郎"> 
              </div>
            </div>

            <div class="form-parts rpg-frame">
              <div class="rpg-border">
                <label for="email" class="form-parts__label">メールアドレス</label>
                <input type="text" id="email" placeholder="例）abc@example.com"> 
              </div>
            </div>
            
            <div class="form-parts rpg-frame">
              <div class="rpg-border">
                <label for="title" class="form-parts__label">件名</label>
                <input type="text" id="title"  placeholder="例）件名"> 
              </div>
            </div>
            
            <div class="form-parts rpg-frame">
              <div class="rpg-border">
                <label for="textarea" class="must form-parts__label">お問い合わせ内容</label>
                <textarea id="textarea" placeholder="ご自由にお書きください"></textarea> 
              </div>
            </div>

            <div class="acceptance">
              <p>スパムメール防止のため、上記の記入事項にお間違いがなければお手数ですがチェックを入れてください。</p>
            </div>

            <div class="btn-wrapper">
              <input type="submit" value="送信" class="btn">
            </div>
            
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