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
            echo "a: " . (1 + (6) - (20)) . "<br>";  // Without precedence would be -13
            echo "b: " . (2 - (60) + 1) . "<br>";    // Without precedence would be -57
            echo "b: " . (5 + 2 - 4 + (3)) . "<br>"; // Without precedence would be 6
            ?>
        </div>
    </body>
</html>
