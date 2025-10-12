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
            }
            $p = new Product("Молоко", 65.5);
            echo $p->name . " " . $p->price
        ?>
    </main>
</body>
</html>