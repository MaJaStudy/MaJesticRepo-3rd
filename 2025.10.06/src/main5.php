<?php
$user=null;
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
        echo $user?->getName();
        // ?-> защищает от фатальной ошибке при попытке вызова Null
        echo $user->getName();
        ?>
    </header>
        
    <main>
    </main>
</body>
</html>