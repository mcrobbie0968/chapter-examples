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
            $object = new Subscriber;
            $object->name = "Fred";
            $object->password = "pword";
            $object->phone = "012 345 6789";
            $object->email = "fred@bloggs.com";
            $object->display();

            class User {

                public $name, $password;

                function save_user() {
                    echo "Save User code goes here";
                }
            }

            class Subscriber extends User {

                public $phone, $email;

                function display() {
                    echo "Name: $this->name<br>";
                    echo "Pass: $this->password<br>";
                    echo "Phone: $this->phone<br>";
                    echo "Email: $this->email<br>";
                }
            }
            ?>
        </div>
    </body>
</html>
