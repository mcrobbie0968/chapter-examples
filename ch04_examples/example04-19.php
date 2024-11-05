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
            $bank_balance = 50;
            
            if ($bank_balance < 100) {
                $money = 1000;
                $bank_balance += $money;
            }
            
            echo "Bank Balance: £$bank_balance<br>";
            ?>
        </div>
    </body>
</html>
