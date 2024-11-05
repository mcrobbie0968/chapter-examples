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

            function test() {
                static $count = 0;
                echo "Count: $count<br>";
                $count++;
            }
            
            test();
            test();
            test();
            ?>
        </div>
    </body>
</html>
