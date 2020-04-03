$(document).ready(function () {
    if ('.home-hero-slider') {
        $(".home-hero-slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            items: 1
        });
    }

    $(".col-1-slider").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        items: 1
    });

});