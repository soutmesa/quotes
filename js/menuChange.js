$(document).ready (function () {
  if($(window).width() > 767){
    //alert($(window).width());
    $('.slider').css('margin-top', '100');
    $('.navbar').removeClass('on-scroll');
    $(window).scroll (function () {
      var sT = $(this).scrollTop();
      if(sT >55) {
        $('.navbar').addClass('navbar-fixed-top');
        $('.navbar').addClass('on-scroll');
        $('.logo-big').css('display', 'none');
        $('.nav').removeClass('navbar-right');
        $('.nav').addClass('navbar-left');
        $('.slider').css('margin-top', '50');
      }else {
        $('.logo-big').css('display', 'block');
        $('.navbar').removeClass('on-scroll');
        $('.navbar').removeClass('navbar-fixed-top');
        $('.nav').removeClass('navbar-left');
        $('.nav').addClass('navbar-right');
        $('.slider').css('margin-top', '50');
      }
    });
  }else{
    $('.navbar').addClass('navbar-fixed-top');
  }
});
