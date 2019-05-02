function _resize() {

    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    if (isMobile) {
        $('.solution img').height( $(window).height());
    }else{
        $('.solution img').height( $(window).height());
    }   
}

$(window).resize(function() {
    _resize();
});

$( document ).ready(function() {

    $(".aho-partners").owlCarousel({
        items: 6,
        loop: true,
        nav: false,
        navText: ['<i class="fa fa-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-arrow-right" aria-hidden="true"></i>'],
        dots: false,
        dotsData: false,
        animateOut: 'slideOutDown',
        //animateIn: 'flipInX',
        smartSpeed: 700,
        mouseDrag: true,
        touchDrag: true,
        autoplay:true,
        autoplayTimeout:4000,
        responsive: {
            0: {
                items: 1
            },
            920: {
                items: 6
            }
        }
    });
});
$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});