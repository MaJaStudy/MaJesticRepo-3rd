<?php
    namespace App\Models;
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
            class Cart {
                private array $items = [];

                public function add(Product $product): void {
                    $this->items[] = $product;
                    echo "Добавлен товар: {$product->getInfo()}<br>";
                }

                public function getTotal(): float {
                    $total = 0;
                    foreach ($this->items as $item) {
                        $total += $item->price;
                    }
                    return $total;
                }
                
                public function getItemCount(): int {
                    return count($this->items);
                }

                public function showItems(): void {
                    if (empty($this->items)) {
                        echo "Корзина пуста<br>";
                        return;
                    }
                    
                    echo "Товары в корзине:<br>";
                    foreach ($this->items as $index => $item) {
                        echo ($index + 1) . ". {$item->getInfo()}<br>";
                    }
                }
            }
        ?>
    </main>
</body>
</html>