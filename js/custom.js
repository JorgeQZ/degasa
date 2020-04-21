$ = jQuery;
$(document).ready(function () {

    // Menu mobile button
    $('.menu-button').click(function (e) {
        e.preventDefault();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('header').removeClass('active');
            $('.social-links').removeClass('active');

            $('.main-menu').removeClass('active');
        } else {
            $(this).addClass('active');
            $('header').addClass('active');
            $('.social-links').addClass('active');
            $('.main-menu').addClass('active');
        }
    });
    // Menu mobile button



    // Scroll Navbar beheavior
    var auxScroll_ = 0;

    function ScrollBeheavior(aux, sc) { return aux <= sc; }

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        console.log(scroll);
        if (scroll >= 200) {
            $('header').addClass('scrolled-color');
            if (ScrollBeheavior(auxScroll_, scroll)) {
                // if scroll down
                $('header').css({ top: '-100px' });
            } else {
                //scroll up
                $('header').css({ top: '0' });
            }
        } else if (scroll == 0) {
            $('header').removeClass('scrolled-color');
        }
        else {
            $('header').removeClass('scrolled-color');
        }


        auxScroll_ = scroll;
    });

    var home_hero = $('.home-hero-slider');
    // console.log(home_hero);
    if (home_hero.length > 0) {
        $(".home-hero-slider").owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            items: 1
        });
    }

    var sliders_home = $(".col-1-slider");
    // console.log(sliders_home);

    if (sliders_home.length > 0) {
        $(".col-1-slider").owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            items: 1
        });
    }

});

