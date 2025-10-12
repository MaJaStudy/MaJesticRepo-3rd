# MaJesticRepo-3rd

## Клонирование нужного репозитория

Клонировать

```bash
  git clone https://github.com/MaJaStudy/MaJesticRepo-3rd.git
```

Сменить папку проекта

```bash
  cd MaJesticRepo-3rd
```

Чек-аутнуть нужную ветку. Ветки созданы в формате lab<b><u><i>n</b></u> (n - номер лабораторной)

```
git checkout labn
```

Сделать Pull
```bash
git pull
```


## Задачи

### Задача 8

Мы видим данные, заданные в задаче.

### Задача 9

Данные выведены на страницу. Вызов был произведён в формате

```php
$u = new User("Виктор Пахомов", "majastudy@github.com");
  echo $u->getInfo();
```

### Задача 10

Были заданы 1 интерфейс и 2 класса.

```php
interface Payable {
    public function pay(float $amount): bool;
}
class CashPayment implements Payable {
    public function pay(float $amount): bool {
        echo "Оплата наличными: " . $amount . "\n";
        return true;
    }
}
class CryptoPayment implements Payable {
    public function pay(float $amount): bool {
        echo "Оплата криптовалютой: " . $amount . "\n";
        return true;
    }
}
```
Затем была сдалана функция
```php
function processPayment(Payable $payment, float $amount): void {
    $payment->pay($amount);
}
```
И затем, вызов
```php
$cash = new CashPayment();
$crypto = new CryptoPayment();
$cash->pay(1500.01);
echo "<br>";
$crypto->pay(0.025);
```
На странице PHP данные выведены правильно, в виде: 
```
Оплата наличными: 1500.01
Оплата криптовалютой: 0.025 
```

### Задача 11

Был создан класс
```php
class MathUtils {
    public static function square(float $x): float {
        return $x * $x;
    }
};
```
После чего, вызван в виде:
```php
$n = 5.0;
$result1 = MathUtils::square($n); //Вызов Статиков происходит так. Так же они не имеют доступа к this.
echo "Квадрат числа {$n}: {$result1}" . "<br>";
//Квадрат числа 5: 25
```

### Задача 12

Была создана функция
```php
class StringUtils {
    public static function isPalindrome(string $s): bool {
        $s = mb_strtolower(preg_replace('/\s+/', '', $s));
        return $s === strrev($s);
    }
}
```
После чего, заданы примеры выполнения на примерах, указанных в задании
```php
$string1="Level";
$string2="Мадам";
$string3="Тест";
echo "{$string1} - это палиндром? " . (StringUtils::isPalindrome($string1) ? "да" : "нет") . "<br>";
echo "{$string2} - это палиндром? " . (StringUtils::isPalindrome($string2) ? "да" : "нет") . "<br>";
echo "{$string3} - это палиндром? " . (StringUtils::isPalindrome($string3) ? "да" : "нет") . "<br>";
// Level - это палиндром? да
// Мадам - это палиндром? да
// Тест - это палиндром? нет
```

### Задача 13

Задача была выполнена через боль и страдания. Так как https://getcomposer.org упорно не хотел открываться. Теперь он есть как exe в этом репозитории.

Всё было выполнено по заданию, расположение дерева выглядит следующим образом:
```
MaJesticRepo-3rd/
├── src/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Product.php
│   │   └── Order.php
│   └── Q13.php
├── vendor/
└── composer.json
```

Выглядит код Q13 следующим образом:
```php
<?php
require_once __DIR__ . '/../vendor/autoload.php'; //__DIR__ не обязателен в данном случае, но его наличие позволяет быть уверенным, что не будет проблем, так как он позволяет вызвать ОТКУДА именно вызывается файл. так как Q13 и остальные находятся в src, то это позволяет сделать вызов непосредственно оттуда, а где находится vendor/autoload.php мы уже знаем.

$user = new User("Виктор Пахомов", "majastudy@github.com");
$laptop = new Product("Laptop", 999.99);
$phone = new Product("Phone", 599.99);
$order = new Order(24, ($laptop->price)+($phone->price));

echo $user->getInfo() . "<br>";
echo $laptop->getInfo() . "<br>";
echo $phone->getInfo() . "<br>";
echo $order->getInfo() . "<br>";
?>
```

Composer был задан путём команды composer init. Его можно запустить использовав composerinit.bat. Если у вас установлен composer-всё сработает(во время установки может выдать ошибку.)
Ничего интересного далее не было, так как файлы <b>Product</b>, <b>User</b> и <b>Order</b> уже фактически были сделаны в задании 8 и 9. Вывод выглядит подобным образом:
```
Пользователь: Виктор Пахомов, eMail: majastudy@github.com
Товар: Laptop, Цена: $999.99
Товар: Phone, Цена: $599.99
Заказ #24, Сумма: $1599.98
```
Стоит упомянуть, что namespace располагается в самом верху документа, так как иначе вызывает ошибку.

### Задача 14

Был использован уже существующий Product.php, и был создан Cart.php.

Cart.php включает в себя класс, в котором есть 4 функции
```php
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
```

Структура Q14.php выглядит тоже схоже с Q13, но всё же имеет в себе куда больше.
```php
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
$cart->add($products[0]); // iPhone
$cart->add($products[2]); // Наушники Sony
$cart->add($products[4]); // Клавиатура

echo "<br>=== Информация о корзине ===<br>";
$cart->showItems();

echo "<br>=== Итог ===<br>";
echo "Количество товаров: " . $cart->getItemCount() . "<br>";
echo "Общая сумма: $" . number_format($cart->getTotal(), 2) . "<br>";
```
На выходе, мы получаем следующее

```
=== МАГАЗИН ===

=== Доступные товары: ===
1. Товар: iPhone 15, Цена: $999.99
2. Товар: Ноутбук Dell, Цена: $1299.5
3. Товар: Наушники Sony, Цена: $199.99
4. Товар: Клавиатура, Цена: $79.99
5. Товар: Мышь, Цена: $29.99

=== Добавление товаров в корзину ===
Добавлен товар: Товар: iPhone 15, Цена: $999.99
Добавлен товар: Товар: Наушники Sony, Цена: $199.99
Добавлен товар: Товар: Мышь, Цена: $29.99

=== Информация о корзине ===
Товары в корзине:
1. Товар: iPhone 15, Цена: $999.99
2. Товар: Наушники Sony, Цена: $199.99
3. Товар: Мышь, Цена: $29.99

=== Итог ===
Количество товаров: 3
Общая сумма: $1,229.97
```
## Авторы

- [@MaJaStudy](https://www.github.com/MaJaStudy)

