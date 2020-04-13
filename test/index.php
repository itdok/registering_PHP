<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>PHP training</title>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
    <?php require_once 'inc/header.php' ?>

        <div class="content"><h2>Добро пожаловать на наш сайт! :-)</h2></div>

    <?php require_once 'inc/footer.php' ?>
    </body>
</html>