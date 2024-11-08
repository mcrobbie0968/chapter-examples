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
            $products = array(
                'paper' => array(
                    'copier' => "Copier & Multipurpose",
                    'inkjet' => "Inkjet Printer",
                    'laser' => "Laser Printer",
                    'photo' => "Photographic Paper"),
                'pens' => array(
                    'ball' => "Ball Point",
                    'hilite' => "Highlighters",
                    'marker' => "Markers"),
                'misc' => array(
                    'tape' => "Sticky Tape",
                    'glue' => "Adhesives",
                    'clips' => "Paperclips"
                )
            );

            echo "<pre>";

            foreach ($products as $section => $items) {
                foreach ($items as $key => $value) {
                    echo "$section:\t$key\t($value)<br>";
                }
            }

            echo "</pre>";
            ?>
        </div>
    </body>
</html>
