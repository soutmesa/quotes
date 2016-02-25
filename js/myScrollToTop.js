$(function(){
	$(document).on( 'scroll', function(){
		if ($(window).scrollTop() > 90) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	//alert(offsetTop);
	$('html, body').animate({scrollTop: 9}, 2200, 'linear');
}