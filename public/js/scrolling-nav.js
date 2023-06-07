//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        var link = $anchor.attr('href').split('/').slice(-1)[0];
        $('html, body').stop().animate({
            scrollTop: $(link).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
