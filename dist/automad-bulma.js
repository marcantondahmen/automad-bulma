$('.navbar-burger').click(function() {
	$('.navbar-burger').toggleClass('is-active');
	$('.navbar-menu').toggleClass('is-active');
});
if ($('.carousel-item').length > 1) {
	var carousels = bulmaCarousel.attach();
}