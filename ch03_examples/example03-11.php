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
            $number = 12345 * 67890;

            echo "Number: $number<br>";
            echo "String: " . substr($number, 3, 1) . "<br>";
            ?>
        </div>
    </body>
</html>
