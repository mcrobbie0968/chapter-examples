<!DOCTYPE html>
<html>
    <head>
        <title>PHP, MySQL and JavaScript</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php

            function longdate($timestamp) {
                return date("l F jS Y", $timestamp);
            }

            echo longdate(time()) . "<br>";
            echo longdate(time() - 17 * 24 * 60 * 60). "<br>";
            ?>
        </div>
    </body>
</html>
