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
            echo "a: " . (((1 + 2) * 3 - 4) * 5) . "<br>"; // With forced precedence: 25
            echo "b: " . ((2 - 4) * 5 * 3 + 1) . "<br>";   // With forced precedence: -29
            echo "b: " . ((5 + 2 - 4 + 1) * 3) . "<br>";   // With forced precedence: 12
            ?>
        </div>
    </body>
</html>
