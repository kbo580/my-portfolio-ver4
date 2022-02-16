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


 




});