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
            static $int1 = 0;         // Allowed
            static $int2 = 1 + 2;     // Correct (as of PHP 5.6)
            /*
             * static $int3 = sqrt(144); // Disallowed
             */

            echo "Int1: $int1<br>";
            echo "Int2: $int2<br>";
            /*
             * echo "Int3: $int3<br>";
             */

            /*
             * If you plan to use static variables, you should note that you 
             * cannot assign the result of an expression in their definitions. 
             * They can be initialized only with predetermined values.
             */
            ?>
        </div>
    </body>
</html>
