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
            if (isset($_GET['n'])) {
                $n = (int)$_GET['n'];
                if ($n % 15 === 0) {
                    echo "FizzBuzz";
                } 
                elseif ($n % 3 === 0) {
                    echo "Fizz";
                }
                elseif ($n % 5 === 0) {
                    echo "Buzz";
                }
                else {
                    echo $n;
                }
            } else {
                echo "Передайте параметр. (например: main7.php?n=15)";
            }
        ?>
    </main>
</body>
</html>