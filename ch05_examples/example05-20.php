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
            $temp = new Test();

            echo "Test A: " . Test::$static_property . "<br>";
            echo "Test B: " . $temp->get_sp() . "<br>";
            echo "Test C: " . $temp->static_property . "<br>";
            
            /*
             * Test C fails because the static property $static_property is 
             * not accessible to the object $temp.
             */

            class Test {

                static $static_property = "I'm static";

                function get_sp() {
                    return self::$static_property;
                }
            }
            ?>
        </div>
    </body>
</html>
