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
            $paper = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

            while (list($item, $description) = myEach($paper)) {
                echo "$item: $description<br>";
            }

            function myEach(&$array) { // Replacement for deprecated 'each' function
                $key = key($array);
                $result = ($key === null) ? false :
                        [$key, current($array), 'key', 'value' =>
                    current($array)];
                next($array);
                return $result;
            }
            ?>
        </div>
    </body>
</html>
