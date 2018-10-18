$(document).ready(function() {

    // Intro
    setTimeout(function() {
        $('.intro-content').fadeIn(800);
    }, 1000);

    // Header
    function header() {
        if ($(window).scrollTop() > 80) {
            if ($(window).width() > 700) {
                $('header').css({height: 'auto', position: 'fixed', left: '50%', marginLeft: '-50%', zIndex: 10});
            } else {
                $('header').css({height: 'auto', position: 'fixed', left: '0px', marginLeft: '0px', zIndex: 10});
            }
            $('header > *').stop().animate({height: '40px'}, 50);
        } else {
            if ($(window).width() > 970) {
                $('header').css({height: '80px', position: 'relative', left: '0px', marginLeft: '0px', zIndex: 0});
                $('header > *').stop().animate({height: '80px'}, 50);
            } else {
                $('header').css({height: '60px', position: 'relative', left: '0px', marginLeft: '0px', zIndex: 0});
                $('header > *').stop().animate({height: '60px'}, 50);
            }
        }
    }

    // Language image hover
    $('.lang-img').children('img').hover(function() {
        $(this).css({filter: 'grayscale(0%) brightness(125%)'});
    }, function() {
        $(this).css('filter', 'grayscale(100%)');
    });

    // Experience
    function exp() {
        var topEle = $('.timeline').offset().top;
        var bottomEle = $('.timeline').offset().top + $('.timeline').outerHeight();
        var bottomScr = $(window).scrollTop() + $(window).height();
        var topScr = $(window).scrollTop();

        if((bottomScr > topEle) && (topScr < bottomEle)){
            $('.line').animate({height: '700px'}, 800);
            $('.jobs').animate({opacity: 1}, 1000);
        }
    }

    // Background scroll
    var parallax = $('.parallax');
    var speed = 0.5;
    $(window).on('scroll', function() {
        [].slice.call(parallax).forEach(function(el, i){
            var windowYOffset = window.pageYOffset,
            elBackgrounPos = "right " + (windowYOffset * speed + 8) + "px";
            el.style.backgroundPosition = elBackgrounPos;
        });
        header();
        exp();
    });

    // Inner links
    $('.header-link a').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: $( $(this).attr('href') ).offset().top}, 800);
    });
    
});