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
            class Product {
                public function __construct(
                    public string $name,
                    public float $price
                ) {}
                
                public function getInfo(): string {
                    return "Товар: {$this->name}, Цена: \${$this->price}";
                }
            }
        ?>
    </main>
</body>
</html>