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
            $page = "Contact";

            switch ($page) {
                case "Home":
                    echo "You selected Home";
                    break;
                case "About":
                    echo "You selected About";
                    break;
                case "News":
                    echo "You selected News";
                    break;
                case "Login":
                    echo "You selected Login";
                    break;
                case "Links":
                    echo "You selected Links";
                    break;
                default:
                    echo "Unrecognized selection";
                    break;
            }
            ?>
        </div>
    </body>
</html>
