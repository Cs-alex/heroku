<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .box {
                width: 100px;
                height: 100px;
                border: 1px solid black;
                background-color: lightblue;
            }
        </style>
    </head>
    <body>
        <script>
            $(document).ready(function() {
                var square = '<div class="box">'+
                             '</div>';
                $('body').append(square);
            });
        </script>
        <?php
            echo 'xyc';
        ?>
    </body>
</html>
