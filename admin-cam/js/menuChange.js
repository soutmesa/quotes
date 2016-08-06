$(document).ready (function () {
  if($(window).width() > 767){
    var screen_height = $('body').height();
    $('.navbar').removeClass('navbar-fixed-top');
    $('.navbar').removeClass('on-scroll');
    $(window).scroll (function () {
      var sT = $(this).scrollTop();
      if(sT > 55) {
        $('.navbar').addClass('navbar-fixed-top');
        $('.navbar').addClass('on-scroll');
        $('.logo-big').css('display', 'none');
        $('.nav').removeClass('navbar-right');
        $('.nav').addClass('navbar-left');
      }else {
        $('.logo-big').css('display', 'block');
        $('.navbar').removeClass('on-scroll');
        $('.navbar').removeClass('navbar-fixed-top');
        $('.nav').removeClass('navbar-left');
        $('.nav').addClass('navbar-right');
      }
    });
  }else{
    $('.navbar').addClass('navbar-fixed-top');
  }
});
