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
            $p1 = array("Copier", "Inkjet", "Laser", "Photo");

            echo "p1 element: " . $p1[2] . "<br>";

            $p2 = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

            echo "p2 element: " . $p2['inkjet'] . "<br>";
            ?>
        </div>
    </body>
</html>
