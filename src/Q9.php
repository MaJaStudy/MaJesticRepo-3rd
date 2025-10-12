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
            class User {
                public function __construct(
                    public string $name,
                    public string $email
                ) {}

                public function getInfo(): string {
                return "Пользователь: {$this->name}, eMail: {$this->email}";
            }
            }
            $u = new User("Виктор Пахомов", "majastudy@github.com");
            echo $u->getInfo();
        ?>
    </main>
</body>
</html>