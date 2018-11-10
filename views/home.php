<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USERS</title>
</head>
<body>
    <h1>Главная страница</h1>
    <hr>
    <h2>Список пользователей</h2>
    <?php
        foreach($users as $user) {
            echo '<h3>'.$user['name'].'</h3>';
            echo '<i>'.$user['date_created'].'</i>';
        }

    ?>

    <hr>
    Все права защищены

</body>
</html>