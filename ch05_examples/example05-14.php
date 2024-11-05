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

                function __construct($name, $password) {
                    $this->name = $name;
                    $this->password = $password;
                }

                function __destruct() {
                    echo "Last reference to object reached!<br>";
                }
            }

            $object = new User("Bob", "abracadabra");

            echo "Name: $object->name<br>";
            echo "Password: $object->password<br>";
            ?>
        </div>
    </body>
</html>
