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
            $paper['copier'] = "Copier & Multipurpose";
            $paper['inkjet'] = "Inkjet Printer";
            $paper['laser'] = "Laser Printer";
            $paper['photo'] = "Photographic Paper";

            echo $paper['laser'];
            ?>
        </div>
    </body>
</html>
