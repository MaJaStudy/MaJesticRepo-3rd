<?php
    namespace App\Models;
    use App\Models\Product;
    use App\Models\Cart;
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

        echo "=== МАГАЗИН ===<br>";

        $products = [
            new Product("iPhone 15", 999.99),
            new Product("Ноутбук Dell", 1299.50),
            new Product("Наушники Sony", 199.99),
            new Product("Клавиатура", 79.99),
            new Product("Мышь", 29.99)
        ];

        $cart = new Cart();

        echo "<br>=== Доступные товары: ===<br>";
        foreach ($products as $index => $product) {
            echo ($index + 1) . ". {$product->getInfo()}<br>";
        }

        echo "<br>=== Добавление товаров в корзину ===<br>";

        // Добавляем товары в корзину
        $cart->add($products[0]);
        $cart->add($products[2]);
        $cart->add($products[4]);

        echo "<br>=== Информация о корзине ===<br>";
        $cart->showItems();

        echo "<br>=== Итог ===<br>";
        echo "Количество товаров: " . $cart->getItemCount() . "<br>";
        echo "Общая сумма: $" . number_format($cart->getTotal(), 2) . "<br>";

        ?>
    </main>
</body>
</html>