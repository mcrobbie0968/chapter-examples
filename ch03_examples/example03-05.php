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
            $oxo = array(array('x', ' ', 'o'),
                array('o', 'o', 'x'),
                array('x', 'o', ' '));

            echo "<pre>";
            echo $oxo[0][0] . " " . $oxo[0][1] . " " . $oxo[0][2] . "<br>";
            echo $oxo[1][0] . " " . $oxo[1][1] . " " . $oxo[1][2] . "<br>";
            echo $oxo[2][0] . " " . $oxo[2][1] . " " . $oxo[2][2] . "<br>";
            echo "</pre>";
            ?>
        </div>
    </body>
</html>
