<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alex Csende - Portfolio</title>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/jpg" href="icon.png">
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
                        <li class="header-link"><a href="#mail">Contact</a></li>
                    </ul>
                </div>
            </header>
            <section class="intro parallax">
                <h1 class="intro-h1">Alex Bálint Csende</h1>
                <h2 class="intro-h2">Webprogrammer<br> & developer</h2>
                <div class="intro-content-container">
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
                </div>
            </section>
            <section id="exp" class="xp">
                <h1 class="section-h1">My experiences so far...</h1>
                <h2 class="section-h2">My past jobs and experiences</h2>
                <div class="timeline">
                    <div class="jobs odd">
                        <h2>2017 - 2018</h2>
                        <h1>Front-End Developer</h1>
                        <p>
                            For most part, I helped develop a company's website as front-end, as well as created a layout designer using Fabric.js.
                        </p>
                    </div>
                    <div class="jobs even">
                        <h2>2016 - 2017</h2>
                        <h1>Full Stack Developer</h1>
                        <p>
                            I worked for a private entrepreneur for a year long as full stack, but mostly backend programmer.
                            Associated sites:
                            <p>
                                <a class="history_links" href="https://www.whichphone.us/">Whichphone.us</a>
                            </p>
                        </p>
                    </div>
                    <div class="jobs odd">
                        <h2>2015 - 2015</h2>
                        <h1>Data Recorder</h1>
                        <p>
                            For a 2 month long project, i worked as a data recorder in Gyál, Pest county.
                        </p>
                    </div>
                    <div class="jobs even">
                        <h2>2012 - 2012</h2>
                        <h1>Professional Practice</h1>
                        <p>
                            As part of my internship, I was assigned to a real estate developer ltd as an IT economist.
                        </p>
                    </div>
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
//                                $headers = 'From: '.$name.' ('.$email.')';
//                                mail('alex.csende@gmail.com', $subject, $message, $headers);
//                            } else {
//                                echo 'error';
//                            }
                        ?>
                    </div>
                </div>
            </section>
            <footer>© 2017-2018 by Alex Csende</footer>
        </main>
    </body>
</html>