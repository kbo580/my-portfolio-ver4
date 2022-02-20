$(function(){

// バーガーアイコンをクリックでメニューを表示
  $('#screen').hide();

  $('#show').on('click', function(){
    $(this).toggleClass('active');
    $('#nav').toggleClass('active');
    $('.bar').toggleClass('colorChange');
    $('#screen').fadeToggle();
    $('body').toggleClass('active');
  });
  
  $('.sp-nav-list a').on('click', function () {
      $('#show').removeClass('active');
      $('#nav').removeClass('active');
      $('.bar').removeClass('colorChange');
      $('#screen').fadeOut();
      $('body').removeClass('active');
  });

  $('#screen').on('click', function(){
    $('.sp-nav-list a').click();
  });

  //pc用カーソル
  $('.pc-nav .nav-link a').hover(function(){
    $(this).prev().css('opacity', '1');
  
  }, function(){
    $(this).prev().css('opacity', '0');
  });

  // worksのitemにカーソルが乗った時の動き
  $('.works__item-image-wrapper').hover(function(){
    $(this).find('img').css('transform','scale(1.1, 1.1)');
  },function(){
    $(this).find('img').css('transform','scale(1, 1)');
  });


 
	$('.slider').slick({
		// fade:true,//切り替えをフェードで行う。初期値はfalse。
		// autoplay: true,//自動的に動き出すか。初期値はfalse。
		// autoplaySpeed: 3000,//次のスライドに切り替わる待ち時間
		// speed:1000,//スライドの動きのスピード。初期値は300。
		// infinite: true,//スライドをループさせるかどうか。初期値はtrue
		arrows: true,
		prevArrow: '<div class="prev-arrow"></div>',
		nextArrow: '<div class="next-arrow"></div>',
		dots: true,
    //     pauseOnFocus: false,//フォーカスで一時停止を無効
    //     pauseOnHover: false,//マウスホバーで一時停止を無効
    //     pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
    // $('.slider').slick('slickPlay');
});




});