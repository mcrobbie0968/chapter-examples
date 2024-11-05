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

            class User {

                public $name, $password;

                function save_user() {
                    echo "Save User code goes here";
                }
            }

            $object = new User;
            
            echo "<pre>";
            print_r($object);
            echo "</pre>";
            ?>
        </div>
    </body>
</html>
