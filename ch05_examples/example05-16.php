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

            echo $object1->name;

            class User {
                
            }
            ?>
        </div>
    </body>
</html>
