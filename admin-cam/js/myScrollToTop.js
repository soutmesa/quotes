$(function(){
	$(document).on('scroll', function(){
		if ($(window).scrollTop() >= 90) {
			$('.scroll-top-wrapper').addClass('show');
			$('.scroll-top-wrapper i').css('visibility', 'visible');			
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);

});

function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	// element = $('body');
	// offset = element.offset();
	// offsetTop = offset.top;
	$('html, body').animate({scrollTop: 0}, 2200, 'linear');
}