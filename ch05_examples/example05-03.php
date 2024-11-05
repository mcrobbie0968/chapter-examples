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
            $names = fix_names('WILLIAM', 'henry', 'gatES');
            echo "$names[0] $names[1] $names[2]";

            function fix_names($n1, $n2, $n3) {
                $n1 = ucfirst(strtolower($n1));
                $n2 = ucfirst(strtolower($n2));
                $n3 = ucfirst(strtolower($n3));

                return array($n1, $n2, $n3);
            }
            ?>
        </div>
    </body>
</html>
