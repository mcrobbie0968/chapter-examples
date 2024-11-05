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
            $count = 0;

            while (++$count <= 12) {
                echo "$count times 12 is " . ($count * 12) . "<br>";
            }
            ?>
        </div>
    </body>
</html>
