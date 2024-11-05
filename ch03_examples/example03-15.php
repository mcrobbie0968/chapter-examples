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
            $temp = "The date is ";
            echo longdate(time());

            function longdate($timestamp) {
                return $temp . date("l F jS Y", $timestamp);
            }

            /*
             * Because $temp was neither created within the longdate function 
             * nor passed to it as a parameter, longdate cannot access it. 
             * Therefore, this code snippet outputs only the date, not the 
             * preceding text. In fact, depending on how PHP is configured, it 
             * may first display the error message 
             * Notice: Undefined variable: temp, 
             * something you don’t want your users to see.
             */
            ?>
        </div>
    </body>
</html>
