<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Привет PHP" ?></title>
</head>
<body>
    <header>
    </header>
    <main>
        <?php
            interface Payable {
                public function pay(float $amount): bool;
            }
            class CashPayment implements Payable {
                public function pay(float $amount): bool {
                    echo "Оплата наличными: " . $amount . "\n";
                    return true;
                }
            }
            class CryptoPayment implements Payable {
                public function pay(float $amount): bool {
                    echo "Оплата криптовалютой: " . $amount . "\n";
                    return true;
                }
            }
            function processPayment(Payable $payment, float $amount): void {
                $payment->pay($amount);
            }
            $cash = new CashPayment();
            $crypto = new CryptoPayment();
            $cash->pay(1500.01);
            echo "<br>";
            $crypto->pay(0.025);
        ?>
    </main>
</body>
</html>