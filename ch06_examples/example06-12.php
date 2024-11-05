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
            $temp = explode(' ', "This is a sentence with seven words");
            echo "<pre>";
            print_r($temp);
            echo "</pre>";
            ?>
        </div>
    </body>
</html>
