<?php
    namespace App\Models;
    use App\Models\{User, Product, Order};
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
<!-- 
Composer - это менеджер зависимостей для PHP, который управляет библиотеками и их версиями в проекте.
-->
        <?php
        require_once __DIR__ . '/../vendor/autoload.php';

        $user = new User("Виктор Пахомов", "majastudy@github.com");
        $laptop = new Product("Laptop", 999.99);
        $phone = new Product("Phone", 599.99);
        $order = new Order(24, ($laptop->price)+($phone->price));

        echo $user->getInfo() . "<br>";
        echo $laptop->getInfo() . "<br>";
        echo $phone->getInfo() . "<br>";
        echo $order->getInfo() . "<br>";
        ?>
    </main>
</body>
</html>