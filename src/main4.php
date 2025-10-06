<?php
declare(strict_types=1);
function grade(int $score): string {
    return match (true) {
    $score >= 90 => 'A',
    $score >= 75 => 'B',
    $score >= 60 => 'C',
    default => 'F',
};
}

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
        $grading = 95;
        echo "При {$grading}, оценка: " . grade($grading);
        ?>
        <br>
        <?php
        $grading = 70;
        echo "При {$grading}, оценка: " . grade($grading);
        ?>
        <br>
        <?php
        $grading = 50;
        echo "При {$grading}, оценка: " . grade($grading);
        ?>
    </header>
        
    <main>
    </main>
</body>
</html>