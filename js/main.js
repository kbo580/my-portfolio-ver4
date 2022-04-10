jQuery(function($){
  $(function(){

  // バーガーアイコンをクリックでメニューを表示
  $('#screen').hide();

  $('#show').on('click', function(){
    $(this).toggleClass('active');
    $('#nav').toggleClass('active');
    $('.bar').toggleClass('colorChange');
    $('#screen').fadeToggle();
    // $('body').toggleClass('active');
  });
  
  $('.sp-nav-menu a').on('click', function () {
      $('#show').removeClass('active');
      $('#nav').removeClass('active');
      $('.bar').removeClass('colorChange');
      $('#screen').fadeOut();
      // $('body').removeClass('active');
  });

  $('#screen').on('click', function(){
    $('.sp-nav-menu a').click();
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

  // 記事ページのデモ
  // $('.pc-image, .sp-image').hide();
  $('#pcToggle').click(function(){ 
    $('.pc-image').slideToggle(400);
    return false;
  });

  $('#spToggle').click(function(){ 
    $('.sp-image').slideToggle(400);
    return false;
  });

	$('.slider').slick({
		arrows: true,
		prevArrow: '<div class="prev-arrow"></div>',
		nextArrow: '<div class="next-arrow"></div>',
		dots: true,
  });

  var movefun = function( event ){
    event.preventDefault();
  }

  //バナー一覧のモーダル
  $('#modal-wrapper').hide();

  $('.banners__item > a').on('click', function(){
    var src = $(this).find('img').attr('src');
    var alt = $(this).find('img').attr('alt');
    $('#modal-image-wrapper > img').attr('src', src).attr('alt', alt);
    $('#modal-wrapper').fadeIn(600);
    $('body').addClass('fixed');
    window.addEventListener( 'touchmove' , movefun , { passive: false } );
    return false;
  });

  $('#modal-wrapper').on('click', function(){
    $('#modal-wrapper').fadeOut(600); 
    $('body').removeClass('fixed');
    window.removeEventListener( 'touchmove' , movefun, { passive: false }   );
  });

    //メインビジュアルのタイピング
  function TextTypingAnime() {
    $('.TextTyping').each(function () {
      var elemPos = $(this).offset().top - 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      var thisChild = "";
      if (scroll >= elemPos - windowHeight) {
        thisChild = $(this).children();
        thisChild.each(function (i) {
          var time = 100;
          $(this).delay(time * i).fadeIn(time);
        });
      } else {
        thisChild = $(this).children();
        thisChild.each(function () {
          $(this).stop(); 
          $(this).css("display", "none");
        });
      }
    });
  }

  $(window).on('load', function () {
    var element = $(".TextTyping");
    element.each(function () {
      var text = $(this).html();
      var textbox = "";
      text.split('').forEach(function (t) {
        if (t !== " ") {
          textbox += '<span>' + t + '</span>';
        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);

    });

    $('.TextTyping span:nth-child(14)').append('<br>');

    TextTypingAnime();
  });


  //「topへ戻る」関連

  $('#page-top').hide();

  //メインビジュアルの高さを取得して変数にする
  var mvHight = $('.mv').outerHeight(true);
  $(window).scroll(function(){
    if($(this).scrollTop()>mvHight){
      $('#page-top').fadeIn(400);
    }
    else{
      $('#page-top').fadeOut(400);
    }
  });

  $('#page-top').click(function(){ 
    $('html,body').animate({'scrollTop':0},600);
      $(this).animate({'bottom':'10%'},300,function(){
      $(this).animate({'bottom': '5%'},300)
    });
    return false;
  });






  });
});
