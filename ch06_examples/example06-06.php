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
            $paper = array("Copier", "Inkjet", "Laser", "Photo");
            $j = 0;

            foreach ($paper as $item) {
                echo "$j: $item<br>";
                ++$j;
            }
            ?>
        </div>
    </body>
</html>
