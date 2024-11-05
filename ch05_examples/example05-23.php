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
            $object = new Tiger();

            echo "Tigers have...<br>";
            echo "Fur: $object->fur<br>";
            echo "Stripes: $object->stripes<br>";

            class Wildcat {

                public $fur; // Wildcats have fur

                function __construct() {
                    $this->fur = "TRUE";
                }
            }

            class Tiger extends Wildcat {

                public $stripes; // Tigers have stripes

                function __construct() {
                    parent::__construct(); // Call parent constructor first
                    $this->stripes = "TRUE";
                }
            }
            ?>
        </div>
    </body>
</html>
