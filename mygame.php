<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PingPong</title>
        <link href="mygame.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/jpg" href="ball.jpg">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
        <p class="text">Difficulty: Easy</p>
        <p class="text">Points: 0</p>
        <div id="menu">Menu / Pause</div>
        <canvas id="screen"></canvas>
    </body>
    <script>
        // Startup
        var speed = 'easy';
        var menuOpen = false;
        var gameover = false;
        var canvas = document.getElementById('screen');
        var screen = canvas.getContext('2d');
        screen.canvas.width  = window.innerWidth;
        screen.canvas.height = window.innerHeight;
        
        // Player
        var playerPosX = 830;
        var playerWidth = 250;
        
        // Random start location
        var start = [];
        for (var i = 0; i <= 1; i++) {
            var rndStart = Math.floor((Math.random() * 2) + 0);
            start.push(rndStart);
        }
        var x1 = Math.floor(Math.random() * 1600) + 400;
        var x2 = Math.floor(Math.random() * 1600) + 400;
        
        // Balls
        var ball = [
            {x: x1, y: 20, color: 'red', direction: ''},
            {x: x2, y: 20, color: 'blue', direction: ''}
        ];
        
        function startingDirection() {
            start = [];
            for (var i = 0; i <= 1; i++) {
                var rndStart = Math.floor((Math.random() * 2) + 0);
                start.push(rndStart);
            }
            if (start[0] == 1) {
                ball[0].direction = 'rightdown';
            } else {
                ball[0].direction = 'leftdown';
            }
            if (start[1] == 1) {
                ball[1].direction = 'rightdown';
            } else {
                ball[1].direction = 'leftdown';
            }
        }
        startingDirection();
        
        // Menu
        $("#menu").on('click', function() {
            if (!menuOpen) {
                menuOpen = true;
                var menu = $("<div id='pause'></div>").appendTo("body");
                menu.css({width: 600, height: 200, background: '#505050', position: 'absolute', top: '35%', left: '35%', border: '5px solid yellowgreen'});
                var menuH1 = $("<h1>Game Paused</h1>").appendTo(menu);
                menuH1.css({color: 'yellowgreen', textAlign: 'center'});
                var menuButtons = $("<div class='btn'>Resume</div>" + "<div class='btn'>Difficulty</div>").appendTo(menu);
                menuButtons.css({width: 500, background: 'gray', marginLeft: 50, textAlign: 'center', fontSize: 25, color: 'yellow', border: '2px solid black', marginBottom: 20});
                $(".btn:eq(0)").on('click', function() {
                    $(menu).remove();
                    menuOpen = false;
                });
                $(".btn:eq(1)").on('click', function() {
                    menuH1.html("Difficulty Settings");
                    menuButtons.remove();
                    var optButtons = $("<div class='opt_btn'>Easy</div>" + "<div class='opt_btn'>Normal</div>" + "<div class='opt_btn'>Hard</div>").appendTo(menu);
                    optButtons.css({width: 500, background: 'gray', marginLeft: 50, textAlign: 'center', fontSize: 25, color: 'yellow', border: '2px solid black', marginBottom: 20});
                    menu.css({width: 600, height: 250, background: '#505050', position: 'absolute', top: '32%', left: '35%', border: '5px solid yellowgreen'});
                    $(".opt_btn:eq(0)").on('click', function() {
                        $(menu).remove();
                        ball[0].y = 20;
                        ball[0].x = Math.floor((Math.random() * (1920 - 0 + 1)) + 0);
                        startingDirection();
                        $(".text:eq(0)").html("Difficulty: Easy");
                        $(".text:eq(1)").html("Points: 0");
                        speed = 'easy';
                        menuOpen = false;
                        gameover = false;
                        $('#gameover').remove();
                    });
                    $(".opt_btn:eq(1)").on('click', function() {
                        $(menu).remove();
                        ball[0].y = 20;
                        ball[0].x = Math.floor((Math.random() * (1920 - 0 + 1)) + 0);
                        startingDirection();
                        $(".text:eq(0)").html("Difficulty: Normal");
                        $(".text:eq(1)").html("Points: 0");
                        speed = 'normal';
                        menuOpen = false;
                        gameover = false;
                        $('#gameover').remove();
                    });
                    $(".opt_btn:eq(2)").on('click', function() {
                        $(menu).remove();
                        ball[0].y = 20;
                        ball[0].x = Math.floor((Math.random() * (1920 - 0 + 1)) + 0);
                        ball[1].y = 20;
                        ball[1].x = Math.floor((Math.random() * (1920 - 0 + 1)) + 0);
                        startingDirection();
                        $(".text:eq(0)").html("Difficulty: Hard");
                        $(".text:eq(1)").html("Points: 0");
                        speed = 'hard';
                        menuOpen = false;
                        gameover = false;
                        $('#gameover').remove();
                    });
                });
            }
        });
        
        function rightDown() {
            if (gameover != true) {
                switch(speed) {
                    case 'easy':
                        ball[0].y = ball[0].y + 1;
                        ball[0].x = ball[0].x + 1;
                        break;
                    case 'normal': case 'hard':
                        ball[0].y = ball[0].y + 2;
                        ball[0].x = ball[0].x + 2;
                        break;
                }
            }
        }
        
        function leftDown() {
            if (gameover != true) {
                switch(speed) {
                    case 'easy':
                        ball[0].y = ball[0].y + 1;
                        ball[0].x = ball[0].x - 1;
                        break;
                    case 'normal': case 'hard':
                        ball[0].y = ball[0].y + 2;
                        ball[0].x = ball[0].x - 2;
                        break;
                }
            }
        }
        
        function rightUp() {
            if (gameover != true) {
                switch(speed) {
                    case 'easy':
                        ball[0].y = ball[0].y - 1;
                        ball[0].x = ball[0].x + 1;
                        break;
                    case 'normal': case 'hard':
                        ball[0].y = ball[0].y - 2;
                        ball[0].x = ball[0].x + 2;
                        break;
                }
            }
        }
        
        function leftUp() {
            if (gameover != true) {
                switch(speed) {
                    case 'easy':
                        ball[0].y = ball[0].y - 1;
                        ball[0].x = ball[0].x - 1;
                        break;
                    case 'normal': case 'hard':
                        ball[0].y = ball[0].y - 2;
                        ball[0].x = ball[0].x - 2;
                        break;
                }
            }
        }
        
        function rightDown2() {
            if (gameover != true) {
                switch(speed) {
                    case 'hard':
                        ball[1].y = ball[1].y + 1;
                        ball[1].x = ball[1].x + 1;
                        break;
                }
            }
        }
        
        function leftDown2() {
            if (gameover != true) {
                switch(speed) {
                    case 'hard':
                        ball[1].y = ball[1].y + 1;
                        ball[1].x = ball[1].x - 1;
                        break;
                }
            }
        }
        
        function rightUp2() {
            if (gameover != true) {
                switch(speed) {
                    case 'hard':
                        ball[1].y = ball[1].y - 1;
                        ball[1].x = ball[1].x + 1;
                        break;
                }
            }
        }
        
        function leftUp2() {
            if (gameover != true) {
                switch(speed) {
                    case 'hard':
                        ball[1].y = ball[1].y - 1;
                        ball[1].x = ball[1].x - 1;
                        break;
                }
            }
        }
        
        function move() {
            var ballMove = setInterval(function() {
                if (!menuOpen) {
                    switch(speed) {
                        case 'easy': case 'normal':
                            screen.clearRect(0, 0, screen.canvas.width, screen.canvas.height);
                            switch(ball[0].direction) {
                                case 'rightdown':
                                    rightDown();
                                    break;
                                case 'leftdown':
                                    leftDown();
                                    break;
                                case 'rightup':
                                    rightUp();
                                    break;
                                case 'leftup':
                                    leftUp();
                                    break;
                            }
                            screen.beginPath();
                            screen.fillStyle = ball[0].color;
                            screen.arc(ball[0].x, ball[0].y, 20, 0, 2*Math.PI);
                            screen.fill();
                            break;
                        case 'hard':
                            screen.clearRect(0, 0, screen.canvas.width, screen.canvas.height);
                            switch(ball[0].direction) {
                                case 'rightdown':
                                    rightDown();
                                    break;
                                case 'leftdown':
                                    leftDown();
                                    break;
                                case 'rightup':
                                    rightUp();
                                    break;
                                case 'leftup':
                                    leftUp();
                                    break;
                            }
                            switch(ball[1].direction) {
                                case 'rightdown':
                                    rightDown2();
                                    break;
                                case 'leftdown':
                                    leftDown2();
                                    break;
                                case 'rightup':
                                    rightUp2();
                                    break;
                                case 'leftup':
                                    leftUp2();
                                    break;
                            }
                            for (var i = 0; i < ball.length; i++) {
                                screen.beginPath();
                                screen.fillStyle = ball[i].color;
                                screen.arc(ball[i].x, ball[i].y, 20, 0, 2*Math.PI);
                                screen.fill();
                            }
                            break;
                    }
                    screen.beginPath();
                    screen.rect(playerPosX, 700, playerWidth, 10);
                    screen.fillStyle = 'green';
                    screen.fill();
                }
            }, 10);
        }
        
        // Collision
        // Right
        setInterval(function() {
            if (ball[0].x > 1900) {
                if (ball[0].direction == 'rightdown') {
                    ball[0].direction = 'leftdown';
                } else if (ball[0].direction == 'rightup') {
                    ball[0].direction = 'leftup';
                }
            }
            if (ball[1].x > 1900) {
                if (ball[1].direction == 'rightdown') {
                    ball[1].direction = 'leftdown';
                } else if (ball[1].direction == 'rightup') {
                    ball[1].direction = 'leftup';
                }
            }
        }, 1);

        // Left
        setInterval(function() {
            if (ball[0].x < 20) {
                if (ball[0].direction == 'leftdown') {
                    ball[0].direction = 'rightdown';
                } else if (ball[0].direction == 'leftup') {
                    ball[0].direction = 'rightup';
                }
            }
            if (ball[1].x < 20) {
                if (ball[1].direction == 'leftdown') {
                    ball[1].direction = 'rightdown';
                } else if (ball[1].direction == 'leftup') {
                    ball[1].direction = 'rightup';
                }
            }
        }, 1);

        // Top
        setInterval(function() {
            if (ball[0].y < 20) {
                if (ball[0].direction == 'rightup') {
                    ball[0].direction = 'rightdown';
                } else if (ball[0].direction == 'leftup') {
                    ball[0].direction = 'leftdown';
                }
            }
            if (ball[1].y < 20) {
                if (ball[1].direction == 'rightup') {
                    ball[1].direction = 'rightdown';
                } else if (ball[1].direction == 'leftup') {
                    ball[1].direction = 'leftdown';
                }
            }
        }, 1);

        // Player
        var points = 0;
        setInterval(function() {
            if ((ball[0].x > playerPosX) && (ball[0].y > 680) && (ball[0].x < playerPosX + playerWidth) && (ball[0].y < 720)) {
                if (ball[0].direction == 'rightdown') {
                    ball[0].direction = 'rightup';
                } else if (ball[0].direction == 'leftdown') {
                    ball[0].direction = 'leftup';
                }
                points++;
                $(".text:eq(1)").html('Points: ' + points);
            }
            if ((ball[1].x > playerPosX) && (ball[1].y > 680) && (ball[1].x < playerPosX + playerWidth) && (ball[1].y < 720)) {
                if (ball[1].direction == 'rightdown') {
                    ball[1].direction = 'rightup';
                } else if (ball[1].direction == 'leftdown') {
                    ball[1].direction = 'leftup';
                }
                points++;
                $(".text:eq(1)").html('Points: ' + points);
            }
        }, 50);

        // Defeat
        var defeat = setInterval(function() {
            if ((ball[0].y >= screen.canvas.height) || (ball[1].y >= screen.canvas.height)) {
                if (gameover == false) {
                    if (confirm('You Lost! Want to take another shot at it?')) {
                        gameover = true;
                        location.reload();
                    } else {
                        gameover = true;
                        var score = $("<h1 id='gameover'>Thanks for playing!</h1>").appendTo("body");
                        score.css({textAlign: 'center'});
                    };
                }
            }
        }, 10); 
        
        $(document).ready(function() {
            
            move();
            
            // Balls
            if (speed == 'hard') {
                for (var i = 0; i < ball.length; i++) {
                    screen.beginPath();
                    screen.fillStyle = ball[i].color;
                    screen.arc(ball[i].x, 20, 20, 0, 2*Math.PI);
                    screen.fill();
                }
            } else {
                screen.beginPath();
                screen.fillStyle = ball[0].color;
                screen.arc(ball[0].x, 20, 20, 0, 2*Math.PI);
                screen.fill();
            }
            
            // Player
            screen.beginPath();
            screen.rect(playerPosX, 700, playerWidth, 10);
            screen.fillStyle = 'green';
            screen.fill();
            
            $(document).keydown(function(e) {
                
                // Left
                if (e.which == 37) {
                    if (!menuOpen) {
                        if (playerPosX > 0) {
                            screen.clearRect(playerPosX, 700, 250, 10);
                            screen.beginPath();
                            screen.rect(playerPosX - 10, 700, playerWidth, 10);
                            screen.fillStyle = 'green';
                            screen.fill();
                            playerPosX = playerPosX - 15;
                        }
                    }
                };

                // Right
                if (e.which == 39) {
                    if (!menuOpen) {
                        if (playerPosX < screen.canvas.width - 250) {
                            screen.clearRect(playerPosX, 700, 250, 10);
                            screen.beginPath();
                            screen.rect(playerPosX + 10, 700, playerWidth, 10);
                            screen.fillStyle = 'green';
                            screen.fill();
                            playerPosX = playerPosX + 15;
                        }
                    }
                };
            });
        
        });
    </script>
</html>