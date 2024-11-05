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
            $object = new Son;
            $object->test();
            $object->test2();

            class Dad {

                function test() {
                    echo "[Class Dad] I am your Father<br>";
                }
            }

            class Son extends Dad {

                function test() {
                    echo "[Class Son] I am Luke<br>";
                }

                function test2() {
                    parent::test();
                }
            }
            ?>
        </div>
    </body>
</html>
