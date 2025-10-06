<?php
declare(strict_types=1);
function divide(float $a, float $b): ?float {
    return $b === 0.0 ? null : $a / $b;
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
        echo divide(4.0,2.0);
        ?>
        <br>
        <?php
        if(divide(2.0,0.0)==null)
        {
            echo "Ошибка деления на ноль";
        }
        else
        {
            echo  divide(2.0,0.0);
        }
        ?>
    </header>
        
    <main>
    </main>
</body>
</html>