// header
$(document).ready(function() {
	var $win = $(window),
	    $fixedHeader = $('.header--fixed'),
	    showClass = 'is-show';

	$win.on('load scroll', function() {
		var value = $(this).scrollTop();
		if ( value > 150 ) {
			$fixedHeader.addClass(showClass);
		} else {
			$fixedHeader.removeClass(showClass);
		}
	});
});

// smoothscroll
$(function(){
  $('a[href^=#]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('html, body').animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

// accordion
$(function(){
	$('.accordion').click(function() {
		$(this).next().slideToggle();
		$(this).toggleClass('active');
	});
	$('.accordion-close').click(function() {
		$(this).parent().slideUp();
	});
});

// bxslider
$(document).ready(function(){
  $('.calendar-slider').bxSlider({
		controls: false
	});
});

$(document).ready(function(){
    $('.bxslider').bxSlider({
        controls: true
    });
});