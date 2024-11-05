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
            $pi = "3.1415927";
            $radius = 5;

            echo "Pi: $pi<br>";
            echo "Radius: $radius<br>";
            echo "Area: " . ($pi * ($radius * $radius)) . "<br>";
            ?>
        </div>
    </body>
</html>
