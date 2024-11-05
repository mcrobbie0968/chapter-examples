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
            $object1 = new User();
            $object1->name = "Alice";
            
            $object2 = clone $object1;
            $object2->name = "Amy";

            echo "Object1 Name: $object1->name<br>";
            echo "Object2 Name: $object2->name<br>";

            class User {

                public $name;
            }
            ?>
        </div>
    </body>
</html>
