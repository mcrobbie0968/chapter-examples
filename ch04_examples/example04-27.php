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
            $fuel = 6;
            $enough = $fuel <= 1 ? FALSE : TRUE;

            echo "Fuel: $fuel<br>";
            echo "Enough: [$enough]<br>";
            ?>
        </div>
    </body>
</html>
