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
            $j = 11;

            while ($j > -10) {
                $j--;

                if ($j == 0) {
                    continue;
                }

                echo (10 / $j) . "<br>";
            }
            ?>
        </div>
    </body>
</html>
