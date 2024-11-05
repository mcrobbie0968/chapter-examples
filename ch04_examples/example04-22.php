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
            $page = "About";
            
            if ($page == "Home") {
                echo "You selected Home";
            } elseif ($page == "About") {
                echo "You selected About";
            } elseif ($page == "News") {
                echo "You selected News";
            } elseif ($page == "Login") {
                echo "You selected Login";
            } elseif ($page == "Links") {
                echo "You selected Links";
            } else {
                echo "Unrecognized selection";
            }
            ?>
        </div>
    </body>
</html>
