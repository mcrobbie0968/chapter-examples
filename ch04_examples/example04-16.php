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
            $a = 1;
            $b = 0;

            echo "[" . ($a AND $b) . "]<br>";
            echo "[" . ($a or $b) . "]<br>";
            echo "[" . ($a XOR $b) . "]<br>";
            echo "[" . !$a . "]<br>";
            ?>
        </div>
    </body>
</html>
