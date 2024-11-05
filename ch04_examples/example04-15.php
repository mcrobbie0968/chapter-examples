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
            $a = 2;
            $b = 3;

            if ($a > $b) {
                echo "$a is greater than $b<br>";
            }
            if ($a < $b) {
                echo "$a is less than $b<br>";
            }
            if ($a >= $b) {
                echo "$a is greater than or equal to $b<br>";
            }
            if ($a <= $b) {
                echo "$a is less than or equal to $b<br>";
            }
            ?>
        </div>
    </body>
</html>
