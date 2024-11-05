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
            $temp = "The date is ";
            echo longdate($temp, time());

            function longdate($text, $timestamp) {
                return $text . date("l F jS Y", $timestamp);
            }
            ?>
        </div>
    </body>
</html>