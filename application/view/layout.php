<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Сервис мониторинга событий EvDay</title>
</head>
<body>
    <style>
        <?php
            // Подключаем стиль шапки сайта
            include chooseHeader($_GET, "css");
            // Подключаем стиль тела сайта
            include chooseBody($_GET, "css");
        ?>
    </style>
    <header>
        <?php
            // Подключаем шапку сайта
            include chooseHeader($_GET, "templates");
        ?>
    </header>
    <?php
        // Подключаем тело сайта
        include chooseBody($_GET, "templates");
    ?>

</body>
</html>