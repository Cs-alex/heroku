<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Csende Alex - Webprogrammer</title>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/jpg" href="icon.png">
        <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
        <main id="main">
            <header>
                <div class="header">
                    <ul>
                        <li class="header-link"><a href="#main">Home</a></li>
                        <li class="header-link"><a href="#stats">References</a></li>
                        <li class="header-link"><a href="#prof">Profession</a></li>
                        <li class="header-link"><a href="#exp">Experience</a></li>
                        <li class="header-link"><a href="#mail">Contact</a></li>
                    </ul>
                </div>
            </header>
            <section class="intro parallax">
                <h1 class="intro-h1">Csende Bálint Alex</h1>
                <h2 class="intro-h2">Webprogrammer<br> & developer</h2>
                <div class="intro-content-container">
                    <div class="intro-content">
                        <h2>Welcome!</h2>
                        <p>Hey, there! My name's Alex (yup, the guy on the right), and you are currently looking at my Portfolio.</p>
                        <p>
                            If you're interested in knowing about my works, my progress, or maybe just how does the average programmer
                            and designer work, what do they do and how, you've came to the right place!
                        </p>
                        <p>I hope you like what you see, and have a nice stay!</p>
                        <a href="" id="download">Want to know more? Download my CV!</a>
                    </div>
                </div>
            </section>
            <section id="stats" class="stats">
                <h1 class="section-h1">My progress so far...</h1>
                <h2 class="section-h2">Knowledge about the various languages</h2>
                <table>
                    <tr>
                        <td class="name">HTML5</td>
                        <td class="stat">
                            <div class="progress-bar" id="html"></div>
                        </td>
                        <td class="bar-percent">80%</td>
                    </tr>
                    <tr>
                        <td class="name">CSS3</td>
                        <td class="stat">
                            <div class="progress-bar" id="css"></div>
                        </td>
                        <td class="bar-percent">70%</td>
                    </tr>
                    <tr>
                        <td class="name">JS/JQuery</td>
                        <td class="stat">
                            <div class="progress-bar" id="js"></div>
                        </td>
                        <td class="bar-percent">70%</td>
                    </tr>
                    <tr>
                        <td class="name">PHP</td>
                        <td class="stat">
                            <div class="progress-bar" id="php"></div>
                        </td>
                        <td class="bar-percent">75%</td>
                    </tr>
                    <tr>
                        <td class="name">MySQL</td>
                        <td class="stat">
                            <div class="progress-bar" id="sql"></div>
                        </td>
                        <td class="bar-percent">70%</td>
                    </tr>
                    <tr>
                        <td class="name">Photoshop</td>
                        <td class="stat">
                            <div class="progress-bar" id="ps"></div>
                        </td>
                        <td class="bar-percent">40%</td>
                    </tr>
                </table>
            </section>
            <section id="prof" class="works">
                <h1 class="section-h1">My works so far...</h1>
                <h2 class="section-h2">All websites created or worked on by me</h2>
                <div class="images">
                    <a href="https://www.whichphone.us/" target="_blank"><img src="whichphone.png" alt=""></a>
                    <a href="https://www.accs4it.com/browse?page=1" target="_blank"><img src="accs4it.png" alt=""></a>
                </div>
            </section>
            <section id="exp" class="xp">
                <h1 class="section-h1">My experiences so far...</h1>
                <h2 class="section-h2">My past jobs and experiences</h2>
                <div class="timeline">
                    <div class="jobs even">
                        <h2>2016-2017</h2>
                        <h1>Webprogrammer</h1>
                        <p>
                            I worked for a private entrepreneur for a year long as full-stack, but mostly backend programmer.
                            Associated sites: Whichphone.us, Accs4it.com.
                        </p>
                    </div>
                    <div class="jobs odd">
                        <h2>2015-2015</h2>
                        <h1>Data Recorder</h1>
                        <p>
                            For a 2 month long project, i worked as a data recorder in Gyál, Pest county.
                        </p>
                    </div>
                    <div class="jobs even">
                        <h2>2012-2012</h2>
                        <h1>Professional Practice</h1>
                        <p>
                            As part of my internship, I was assigned to a real estate developer ltd as an IT economist.
                        </p>
                    </div>
                    <div class="line"></div>
                </div>
            </section>
            <section id="mail" class="contact">
                <h1 class="section-h1">Have any questions?</h1>
                <h2 class="section-h2">Don't be shy, ask me!</h2>
                <div class="email">
                    <div class="email-text">
                        <h1>Contact</h1>
                        <p>
                            Here you can send me an e-mail regarding any questions, notices, or even simply giving an advice.
                        </p>
                        <p>
                            No data is being distributed, no third-party is going to spam you with commercials. Your e-mail address is safe here.
                        </p>
                    </div>
                    <div class="email-input">
                        <form action="" method="post">
                            <input type="text" placeholder="Name" class="email-input-type input-name-email" name="user">
                            <input type="text" placeholder="E-mail" class="email-input-type input-name-email" id="input-email" name="e-mail">
                            <input type="text" placeholder="Subject" class="email-input-type" id="input-sub" name="subject">
                            <textarea class="email-input-type" placeholder="Message" name="text"></textarea>
                            <input type="submit" value="Send" id="sub" class="email-input-type" name="sub">
                        </form>
                        <?php
//                            if (filter_input(INPUT_POST, 'sub')) {
//                                $name = filter_input(INPUT_POST, 'user');
//                                $email = filter_input(INPUT_POST, 'e-mail');
//                                $subject = filter_input(INPUT_POST, 'subject');
//                                $message = filter_input(INPUT_POST, 'text');
//                                mail('alex.csende@gmail.com', $subject, $message, $email);
//                            }
                        ?>
                    </div>
                </div>
            </section>
            <footer>© 2017 by Csende Alex</footer>
        </main>
        <script>
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
                        $('header').css({height: 'auto', position: 'fixed', left: '50%', marginLeft: '-50%', zIndex: 10});
                        $('header > *').stop().animate({height: '40px'}, 50);
                        $('.header-link a').css({lineHeight: '40px'}, 1);
                    } else {
                        $('header').css({height: '80px', position: 'relative', left: 'none', marginLeft: 'none', zIndex: 0});
                        $('header > *').stop().animate({height: '80px'}, 50);
                        $('.header-link a').css({lineHeight: '80px'}, 1);
                    }
                }
                
                // Experience
                function exp() {
                    var topEle = $('.timeline').offset().top;
                    var bottomEle = $('.timeline').offset().top + $('.timeline').outerHeight();
                    var bottomScr = $(window).scrollTop() + $(window).height();
                    var topScr = $(window).scrollTop();

                    if((bottomScr > topEle) && (topScr < bottomEle)){
                        $('.line').animate({height: '556px'}, 800);
                        $('.jobs').animate({opacity: 1}, 1000);
                    }
                }
                
                // BackgroundScroll
                var parallax = $('.parallax');
                var speed = 0.5;
                $(window).on('scroll', function() {
                    [].slice.call(parallax).forEach(function(el, i){
                        var windowYOffset = window.pageYOffset,
                        elBackgrounPos = "right " + (windowYOffset * speed + 108) + "px";
                        el.style.backgroundPosition = elBackgrounPos;
                    });
                    progressBar();
                    header();
                    exp();
                });
                
                // Inner links
                $('.header-link a').on('click', function(e) {
                    e.preventDefault();
                    $('html, body').animate({scrollTop: $( $(this).attr('href') ).offset().top}, 800);
                });
                
                // Download
                $('#download').on('click', function(e) {
                    e.preventDefault();
                    window.location.href = 'Csende_Alex_CV.psd';
                });
            });
        </script>
    </body>
</html>