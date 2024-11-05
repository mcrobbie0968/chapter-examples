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
            $month = "March";

            echo "Month: $month<br>";

            if ($month == "April") {
                echo "A quarter of a year has passed<br>";
            }
            ?>
        </div>
    </body>
</html>
