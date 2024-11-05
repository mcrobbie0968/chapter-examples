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
            $chessboard = array(
                array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
                array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
                array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
                array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
                array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
                array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
                array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
                array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
            );

            echo "<pre>";

            foreach ($chessboard as $row) {
                foreach ($row as $piece) {
                    echo "$piece ";
                }
                echo "<br>";
            }

            echo "</pre>";
            ?>
        </div>
    </body>
</html>
