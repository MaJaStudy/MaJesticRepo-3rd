<?php
$numbers = [1, 2, 3, 4, 5];
?>

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
            $squares = array_map(fn($n) => $n ** 2, $numbers);
            $realorfake = fn($x) => "$x - " . ($x % 2 == 0 ? "четное" : "нечетное");
            echo $realorfake(1) . "<br>";
            echo $realorfake(3) . "<br>";
            echo $realorfake(4) . "<br>";
            $resultos = array_map($realorfake, $numbers);
            print_r($resultos);
        ?>
    </main>
</body>
</html>