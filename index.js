$(document).ready(function() {

    var mouseX = 0;
    var mouseY = 0;

    // Intro
    setTimeout(function() {
        $('.intro-content').fadeIn(800);
    }, 1000);

    // Header
    function header() {
        if ($(window).scrollTop() > 0) {
            $('header').addClass('header-small');
        } else {
            $('header').removeClass('header-small');
        }
    }

    // Language image hover
    function technologies() {
        var topEle = $('.lang-wrapper').offset().top;
        var bottomEle = $('.lang-wrapper').offset().top + $('.lang-wrapper').outerHeight();
        var bottomScr = $(window).scrollTop() + $(window).height();
        var topScr = $(window).scrollTop();

        if ((bottomScr > topEle) && (topScr < bottomEle)) {
            $('.lang-img').children('.lang-img-div').each(function(i) {
                $(this).children('img').delay(200 * i).fadeIn(500);
            });
        }

        $('.lang-img-div').children('img').hover(function() {
            if ($(this).width() > $(this).height()) {
                $(this).addClass('lang-img-div-hovered-w');
            } else {
                $(this).addClass('lang-img-div-hovered-h');
            }
            $('.tooltip').text($(this).attr('alt')).removeClass('tooltip-hidden').addClass('tooltip-visible');
        }, function() {
            if ($(this).width() > $(this).height()) {
                $(this).removeClass('lang-img-div-hovered-w');
            } else {
                $(this).removeClass('lang-img-div-hovered-h');
            }
            $('.tooltip').removeClass('tooltip-visible').addClass('tooltip-hidden');
        });
    }

    // Experience
    function exp() {
        var topEle = $('.timeline').offset().top;
        var bottomEle = $('.timeline').offset().top + $('.timeline').outerHeight();
        var bottomScr = $(window).scrollTop() + $(window).height();
        var topScr = $(window).scrollTop();

        if ((bottomScr > topEle) && (topScr < bottomEle)) {
            $('.jobs').animate({opacity: 1}, 1000);
        }
    }

    // Background scroll
    var parallax = $('.parallax');
    var speed = 0.5;
    $(window).on('scroll', function() {
        [].slice.call(parallax).forEach(function(el, i) {
            var windowYOffset = window.pageYOffset,
            elBackgrounPos = "right " + (windowYOffset * speed + 10) + "px";
            el.style.backgroundPosition = elBackgrounPos;
        });
        header();
        technologies();
        exp();
    });

    // Inner links
    $('.header-link a').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: $( $(this).attr('href') ).offset().top}, 800);
    });

    // Works description
    $('.works-wrapper').hover(function() {
        var website = $(this);
        website.children('.description').animate({height: 'toggle'}, 250);
        setTimeout(function() {
            website.find('span').css({color: 'white', transition: '0.4s'});
        }, 200);
    }, function() {
        $(this).find('span').css({color: '#777777', transition: '0s'});
        $(this).children('.description').hide();
    });

    // Mouse position
    $(document).on('mousemove', function(e) {
        console.log(e.target.class);
        mouseX = event.pageX;
        mouseY = event.pageY;
        $('.tooltip').css({top: ($('#stats').offset.y - mouseY), left: ($('#stats').offset.x - mouseX)})
    })
    
});