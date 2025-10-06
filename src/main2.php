<?php
declare(strict_types=1);
function sum(int $a, int $b): int {
    return $a + $b;
}

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
        <?php
        echo sum(2,3);
        echo sum("2",3);
        ?>
    </header>
        
    <main>
    </main>
</body>
</html>