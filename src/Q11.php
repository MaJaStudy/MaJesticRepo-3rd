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
            class MathUtils {
                public static function square(float $x): float {
                    return $x * $x;
                }
            };
            $n = 5.0;
            $result1 = MathUtils::square($n); //Вызов Статиков происходит так. Так же они не имеют доступа к this.
            echo "Квадрат числа {$n}: {$result1}" . "<br>";
        ?>
    </main>
</body>
</html>