

function is_touch_device() {
 return (('ontouchstart' in window)
      || (navigator.MaxTouchPoints > 0)
      || (navigator.msMaxTouchPoints > 0));
}
 
if (!is_touch_device()) {
 $(window).scroll(function() {
    if ($(".navbar").offset().top > 25) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});
 	$(".wedding-section").addClass("fixed-bg");
	$(".intro").addClass("fixed-bg");
} else {
	$(".wedding-section").removeClass("fixed-bg");
    $(".intro").removeClass("fixed-bg");
	$(".navbar-fixed-top").addClass("top-nav-collapse");
}



//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top-50
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});


