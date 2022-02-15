$(function(){

  $('#show').on('click', function(){
    $(this).toggleClass('active');
    $('#nav').toggleClass('active');
    $('body').toggleClass('active');
  });
  
  $('.nav-menu li a').on('click', function () {
      $('#show').removeClass('active');
      $('#nav').removeClass('active');
      $('body').removeClass('active');
  });




});