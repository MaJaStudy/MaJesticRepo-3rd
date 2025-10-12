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

```bash
git checkout labn
```

Сделать Pull
```bash
git pull
```


## Задачи
### Задача 1
php -v выдала версию php
```bat
PHP 8.2.12 (cli) (built: Oct 24 2023 
21:15:15) (ZTS Visual C++ 2019 x64)  
Copyright (c) The PHP Group
Zend Engine v4.2.12, Copyright (c) Zend Technologies
```
После этого, был создан main.php и title был преобразован в "Привет, PHP!"
### Задача 2
```php
// был создан
function sum(int $a, int $b): int {
    return $a + $b;
}
```
При sum(2,3)
```php
sum(2,3) //5
```
При sum("2",3)
```php
Fatal Error
```
### Задача 3
```php
// был создан
function divide(float $a, float $b): ?float {
    return $b === 0.0 ? null : $a / $b;
}
```
Деление 4 на 2
```php
divide(4.0, 2.0) // 2
```
Деление на 0
```php
divide(2.0, 0.0)
```

```php
if(divide(2.0,0.0)==null)
{
    echo "Ошибка деления на ноль";
}
else
{
    echo  divide(2.0,0.0);
}
```
### Задача 4
Была создана match
```php
function grade(int $score): string {
    return match (true) {
    $score >= 90 => 'A',
    $score >= 75 => 'B',
    $score >= 60 => 'C',
    default => 'F',
    };
}
```
После этого, был создан пример.
```php
$grading = 95;
echo "При {$grading}, оценка: " . grade($grading) . "<br>";
$grading = 70;
echo "При {$grading}, оценка: " . grade($grading). "<br>";
$grading = 50;
echo "При {$grading}, оценка: " . grade($grading);
```
### Задача 5
Был задан
```php
$user=null;
```
После чего был применён getName()
```php
<?php
echo $user?->getName(); // ?-> защищает от фатальной ошибке при попытке вызова Null
echo $user->getName(); // Fatal Error
?>
```

### Задача 6
Задан массив
```php
$numbers = [1, 2, 3, 4, 5];
```
Написано возведение каждого элемента массива в квадрат
```php
$squares = array_map(fn($n) => $n ** 2, $numbers);
print_r($squares) //Выдаёт все значения массива по индексам от 0 до 4(в нашем случае)
```
Написана логика чётный-нечётный используя стрелочные функции
```php
$realorfake = fn($x) => "$x - " . ($x % 2 == 0 ? "чётное" : "нечётное");
```
Проверка + Вывод Чётный-Нечётный для массива $numbers
```php
echo $realorfake(1) . "<br>"; //нечётное
echo $realorfake(3) . "<br>"; //нечётное
echo $realorfake(4) . "<br>"; //чётное
$resultos = array_map($realorfake, $numbers);
print_r($resultos);
```
### Задача 7
Нужно было сделать задачу, которая бы проверяла, делится ли число на 3, 5 или 15. 
Она была выполнена следующим образом
```php
if (isset($_GET['n'])) {
    $n = (int)$_GET['n'];
    if ($n % 15 === 0) {
        echo "FizzBuzz";
    } 
    elseif ($n % 3 === 0) {
        echo "Fizz";
    }
    elseif ($n % 5 === 0) {
        echo "Buzz";
    }
    else {
        echo $n;
    }
} else {
    echo "Передайте параметр. (например: main7.php?n=15)";
}
```
Стоит заметить, что её МОЖНО было бы сделать путём конкатенации переменных, но сделать одно дополнительное "if" было проще.
## Авторы

- [@MaJaStudy](https://www.github.com/MaJaStudy)

