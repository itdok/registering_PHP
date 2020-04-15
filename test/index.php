<?php
    session_start();
    require_once 'inc/functions/do_login.php';
//    if ($_GET['do'] == 'login') {
//        header('Location: login.php');
//    }
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

        <div class="content"><h2>
                Добро пожаловать на наш сайт! :-)
            </h2>
            <form action="" method="post">
            <?php
            require_once  "inc/functions/func_message.php";
            ?>
            </form>
        </div>

    <?php require_once 'inc/footer.php' ?>
    </body>
</html>