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

            class Example {

                var $name = "Michael";     // Same as public but deprecated
                public $age = 23;          // Public property
                protected $usercount;      // Protected property

                private function admin() { // Private method
                    // Admin code goes here
                }
            }

            $object = new Example();

            echo "Object Name: $object->name<br>";
            echo "Object Age: $object->age<br>";
            ?>
        </div>
    </body>
</html>
