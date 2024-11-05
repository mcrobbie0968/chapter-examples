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
            Translate::lookup();

            class Translate {

                const ENGLISH = 0;
                const SPANISH = 1;
                const FRENCH = 2;
                const GERMAN = 3;

                // ...

                static function lookup() {
                    echo self::SPANISH;
                }
            }
            ?>
        </div>
    </body>
</html>
