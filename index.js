$(document).ready(function() {

    // Intro
    setTimeout(function() {
        $('.intro-content').fadeIn(800);
    }, 1000);

    // Progress
    function progressBar() {
        var topEle = $('table').offset().top;
        var bottomEle = $('table').offset().top + $('table').outerHeight();
        var bottomScr = $(window).scrollTop() + $(window).height();
        var topScr = $(window).scrollTop();

        if((bottomScr > topEle) && (topScr < bottomEle)){
            progress = true;
            $('#html').animate({width: '80%'}, 1000);
            $('#css').animate({width: '70%'}, 1000);
            $('#js').animate({width: '70%'}, 1000);
            $('#php').animate({width: '75%'}, 1000);
            $('#sql').animate({width: '70%'}, 1000);
            $('#ps').animate({width: '40%'}, 1000);
        }
    }

    // Header
    function header() {
        if ($(window).scrollTop() > 80) {
            if ($(window).width() > 700) {
                $('header').css({height: 'auto', position: 'fixed', left: '50%', marginLeft: '-50%', zIndex: 10});
            } else {
                $('header').css({height: 'auto', position: 'fixed', left: '0px', marginLeft: '0px', zIndex: 10});
            }
            $('header > *').stop().animate({height: '40px'}, 50);
            $('.header-link a').css({lineHeight: '40px'}, 1);
        } else {
            if ($(window).width() > 970) {
                $('header').css({height: '80px', position: 'relative', left: '0px', marginLeft: '0px', zIndex: 0});
                $('header > *').stop().animate({height: '80px'}, 50);
                $('.header-link a').css({lineHeight: '80px'}, 1);
            } else {
                $('header').css({height: '60px', position: 'relative', left: '0px', marginLeft: '0px', zIndex: 0});
                $('header > *').stop().animate({height: '60px'}, 50);
                $('.header-link a').css({lineHeight: '60px'}, 1);
            }
        }
    }

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

    // BackgroundScroll
    var parallax = $('.parallax');
    var speed = 0.5;
    var progress = false;
    $(window).on('scroll', function() {
        [].slice.call(parallax).forEach(function(el, i){
            var windowYOffset = window.pageYOffset,
            elBackgrounPos = "right " + (windowYOffset * speed + 8) + "px";
            el.style.backgroundPosition = elBackgrounPos;
        });
        if (progress == false) {
            progressBar();
        }
        header();
        exp();
    });

    // Inner links
    $('.header-link a').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: $( $(this).attr('href') ).offset().top}, 800);
    });
    
});