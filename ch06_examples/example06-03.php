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
            $paper[] = "Copier";
            $paper[] = "Inkjet";
            $paper[] = "Laser";
            $paper[] = "Photo";

            for ($j = 0; $j < 4; ++$j) {
                echo "$j: {$paper[$j]}<br>";
            }
            ?>
        </div>
    </body>
</html>
