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
            $a1 = 'WILLIAM';
            $a2 = 'henry';
            $a3 = 'gatES';

            function fix_names() {
                global $a1;
                global $a2;
                global $a3;
                $a1 = ucfirst(strtolower($a1));
                $a2 = ucfirst(strtolower($a2));
                $a3 = ucfirst(strtolower($a3));
            }

            echo "$a1 $a2 $a3<br>";
            fix_names();
            echo "$a1 $a2 $a3<br>";
            ?>
        </div>
    </body>
</html>
