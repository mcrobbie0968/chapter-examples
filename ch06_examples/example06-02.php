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
            $paper[0] = "Copier";
            $paper[1] = "Inkjet";
            $paper[2] = "Laser";
            $paper[3] = "Photo";

            echo "<pre>";
            print_r($paper);
            echo "</pre>";
            ?>
        </div>
    </body>
</html>
