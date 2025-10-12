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
            class Product {
                public function __construct(
                    public string $name,
                    public float $price
                ) {}
            }
            $p = new Product("Молоко", 65.5);
            echo "Товар: {$p->name}, Цена: {$p->price} руб.";
        ?>
    </main>
</body>
</html>