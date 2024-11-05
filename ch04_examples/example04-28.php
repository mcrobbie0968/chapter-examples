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
            $fuel = 0.5;
            
            echo "Fuel: $fuel<br>";

            while ($fuel > 1) {
                // Keep driving...
                echo "There's enough fuel<br>";
            }
            ?>
        </div>
    </body>
</html>
