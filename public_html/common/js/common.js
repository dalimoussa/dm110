var isSP = function() {
	return $('.sp-view:visible').length != 0;
};

// Retina対応
document.createElement('picture');

// scroll
$(function(){
	$('a[href^="#"]' + 'a:not(.non-scroll)').on('click', function(){
    var speed = 800;
    var href= $(this).attr('href');
    var target = $(href == '#' || href == '' ? 'html' : href);
    var position = target.offset().top;
    $('html, body').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});

// SP header menu
$(function() {
	$('.header-menu').on('click', function() {
			$(this).toggleClass('active');
			$('body').toggleClass('show');
	});
});

// accordion
$(function() {
	$('.accordion').click(function() {
		$(this).next().slideToggle();
		$(this).toggleClass('active');
		
	});
	
	$('.sp-accordion').click(function() {
		if (isSP()) {
			$(this).next().slideToggle();
			$(this).toggleClass('active');
		}
	});
});

// matchHeight
$(window).load(function(){
	$('.js-matchHeight').matchHeight();
});

// tel
$(function() {
	if (isSP()) {
		$('.tel').each(function() {
	//.tel内のHTMLを取得
			var str = $(this).html();
	//子要素がimgだった場合、alt属性を取得して電話番号リンクを追加
			if ($(this).children().is('img')) {
				$(this).html($('<a>').attr('href', 'tel:' + $(this).children().attr('alt').replace(/-/g, '')).append(str + '</a>'));
			} else {
	//それ以外はテキストを取得して電話番号リンクを追加
				$(this).html($('<a>').attr('href', 'tel:' + $(this).text().replace(/-/g, '')).append(str + '</a>'));
			}
		});
		}
});

