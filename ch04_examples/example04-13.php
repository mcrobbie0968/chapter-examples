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
            $a = "1000";
            $b = "+1000";

            if ($a == $b) {
                echo "1<br>";
            }
            if ($a === $b) {
                echo "2<br>";
            }
            ?>
        </div>
    </body>
</html>
