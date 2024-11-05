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
            $day_number = 341;

            $days_to_new_year = 366 - $day_number; // Expression

            if ($days_to_new_year < 30) {
                echo "Not long now till new year";  // Statement
            }
            ?>
        </div>
    </body>
</html>
