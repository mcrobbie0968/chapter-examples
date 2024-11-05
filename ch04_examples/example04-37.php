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
            $a = 56;
            $b = 12;
            // $c = $a / $b;
            $c = (int) ($a / $b);

            echo "a: $a<br>";
            echo "b: $b<br>";
            echo "c: $c<br>";
            ?>
        </div>
    </body>
</html>
