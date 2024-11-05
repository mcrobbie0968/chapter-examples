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
            $j = 23;
            $temp = "Hello";
            $address = "1 Old Street";
            $age = 61;

            echo "<pre>";
            print_r(compact(explode(' ', 'j temp address age')));
            echo "</pre>";
            ?>
        </div>
    </body>
</html>
