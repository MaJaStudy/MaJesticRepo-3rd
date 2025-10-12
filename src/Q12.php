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
            class StringUtils {
                public static function isPalindrome(string $s): bool {
                    $s = mb_strtolower(preg_replace('/\s+/', '', $s));
                    return $s === strrev($s);
                }
            }
            $string1="Level";
            $string2="Мадам";
            $string3="Тест";
            echo "{$string1} - это палиндром? " . (StringUtils::isPalindrome($string1) ? "да" : "нет") . "<br>";
            echo "{$string2} - это палиндром? " . (StringUtils::isPalindrome($string2) ? "да" : "нет") . "<br>";
            echo "{$string3} - это палиндром? " . (StringUtils::isPalindrome($string3) ? "да" : "нет") . "<br>";
        ?>
    </main>
</body>
</html>