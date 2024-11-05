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
            $fname = "Doctor";
            $sname = "Who";
            $planet = "Gallifrey";
            $system = "Gridlock";
            $constellation = "Kasterborous";

            $contact = compact('fname', 'sname', 'planet',
                    'system', 'constellation');

            echo "<pre>";
            print_r($contact);
            echo "</pre>";
            ?>
        </div>
    </body>
</html>
