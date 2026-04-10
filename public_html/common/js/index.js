//slick
$(function() {
	$('.visual-slider').slick({
			autoplay: true,
			dots: true,
			arrows: false,
			speed: 500,
			fade: true,
			infinite: true
		});
	
	$('.index-voice-slider').slick({
			autoplay: false,
			speed: 500,
			slidesToShow: 1,
			slidesToScroll: 1,
			centerMode: true,
			variableWidth: true,
			prevArrow: '<button type="button" class="slick-prev"><i class="icon-arrow-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="icon-arrow-right"></i></button>',
			infinite: true,
			responsive: [
					{
							breakpoint: 768,
							settings: {
									centerMode: false,
									variableWidth: false
							}
					}
			] 
		});
});

//object-fit-img
$(function () {
	objectFitImages('.object-fit-img');
});

	