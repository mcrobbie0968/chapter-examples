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

                final function copyright() {
                    echo "This class was written by Joe Smith";
                }
            }
            
            $object = new User();
            
            $object->copyright();
            ?>
        </div>
    </body>
</html>
