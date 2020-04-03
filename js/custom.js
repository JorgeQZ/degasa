
$(document).ready(function () {

    // Scroll Navbar beheavior
    var auxScroll_ = 0;

    function ScrollBeheavior(aux, sc) { return aux <= sc; }

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 150) {
            $('header').addClass('scrolled-color');
        } else {
            $('header').removeClass('scrolled-color');
        }


        if (ScrollBeheavior(auxScroll_, scroll)) {
            // if scroll down
            $('header').css({ top: '-100px' });
            console.log(auxScroll_, scroll);

        } else {
            //scroll up
            $('header').css({ top: '0' });
            console.log(auxScroll_, scroll);

        }
        auxScroll_ = scroll;
    });

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

