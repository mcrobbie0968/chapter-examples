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
            $bank_balance = 175;
            $savings = 700;

            if ($bank_balance < 100) {
                $money = 1000;
                $bank_balance += $money;
            } elseif ($bank_balance > 200) {
                $savings += 100;
                $bank_balance -= 100;
            } else {
                $savings += 50;
                $bank_balance -= 50;
            }

            echo "Bank Balance: £$bank_balance<br>";
            echo "Savings: £$savings<br>";
            ?>
        </div>
    </body>
</html>
