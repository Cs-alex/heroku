<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alex Csende - Portfolio</title>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/jpg" href="img/favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="index.js"></script>
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
                    </ul>
                </div>
            </header>
            <section class="intro parallax">
                <h1 class="intro-h1">Alex Bálint Csende</h1>
                <h2 class="intro-h2">Webprogrammer<br> & developer</h2>
                <article class="intro-content-container">
                    <div class="intro-content">
                        <h2>Welcome!</h2>
                        <p>Hey there! My name's Alex (yup, the guy on the right), and you are currently looking at my Portfolio.</p>
                        <p>
                            If you're interested in knowing about my works, my progress, or maybe just how does the average programmer
                            and designer work, what do they do and how, you've came to the right place!
                        </p>
                        <p>I hope you like what you see, and have a nice stay!</p>
                        <a href="Csende_Alex_CV.pdf" id="download" target="_blank">Want to know more? Check out my CV!</a>
                    </div>
                </article>
            </section>
            <section id="stats" class="section stats">
                <h1 class="section-h1">My progress so far...</h1>
                <h2 class="section-h2">Knowledge about the various technologies</h2>
                <article class="lang-wrapper">
                    <div class="lang">
                        <div class="lang-label">
                            <label>Front-end</label>
                        </div>
                        <div class="lang-img">
                            <img src="img/html2.png">
                            <img src="img/css2.png">
                            <img src="img/bootstrap2.png">
                            <img src="img/js2.png">
                            <img src="img/jquery2.png">
                            <img src="img/fabric2.png">
                        </div>
                    </div>
                    <div class="lang">
                        <div class="lang-label">
                            <label>Back-end</label>
                        </div>
                        <div class="lang-img">
                            <img src="img/php2.png">
                            <img src="img/mysql2.png">
                        </div>
                    </div>
                    <div class="lang">
                        <div class="lang-label">
                            <label>Graphics</label>
                        </div>
                        <div class="lang-img">
                            <img src="img/ps.png">
                        </div>
                    </div>
                </article>
            </section>
            <section id="prof" class="section works">
                <h1 class="section-h1">My works so far...</h1>
                <h2 class="section-h2">All websites created or worked on by me</h2>
                <article class="images">
                    <div class="works-wrapper">
                        <a href="https://www.whichphone.us/" target="_blank">
                            <img src="img/whichphone.png" alt="Whichphone">
                        </a>
                        <div class="description">
                            <span>This website shows the best mobile, tablet and watches.</span>
                        </div>
                    </div>
                    <div class="works-wrapper">
                        <a href="https://www.funpic.us/" target="_blank">
                            <img src="img/funpic.png" alt="Funpic">
                        </a>
                        <div class="description">
                            <span>A social media site, similar to 9GAG.</span>
                        </div>
                    </div>
                </article>
            </section>
            <section id="exp" class="section xp">
                <h1 class="section-h1">My experiences so far...</h1>
                <h2 class="section-h2">My past jobs and experiences</h2>
                <article class="timeline">
                    <div class="jobs even">
                        <h2>2018 July - 2018 October</h2>
                        <h1>Full Stack Developer</h1>
                        <p>
                            I joined a small company which was working on an international catering network project designed for smaller enterprises.
                        </p>
                    </div>
                    <div class="jobs odd">
                        <h2>2017 November - 2018 July</h2>
                        <h1>Front-End Developer</h1>
                        <p>
                            For most part, I helped develop a company's website as front-end, as well as created a layout designer using Fabric.js.
                        </p>
                    </div>
                    <div class="jobs even">
                        <h2>2016 September - 2017 September</h2>
                        <h1>Full Stack Developer</h1>
                        <p>
                            I worked for a private entrepreneur for a year long as full stack, but mostly backend programmer.
                        </p>
                    </div>
                    <div class="jobs odd">
                        <h2>2015 May - 2015 July</h2>
                        <h1>Data Recorder</h1>
                        <p>
                            For a 2 month long project, i worked as a data recorder at <a href="http://www.ironmountain.hu/" target="_blank">Iron Mountain Inc.</a> in Gyál, Pest county.
                        </p>
                    </div>
                    <div class="jobs even">
                        <h2>2012 June - 2012 August</h2>
                        <h1>Professional Practice</h1>
                        <p>
                            As part of my internship, I was assigned to <a href="http://www.ceginformacio.hu/cr9310732308" target="_blank">a real estate developer ltd</a> as an IT economist.
                        </p>
                    </div>
                </article>
            </section>
            <footer>© 2017-2018 by Alex Csende</footer>
        </main>
    </body>
</html>