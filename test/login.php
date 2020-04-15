<?php
    require_once "inc/functions/variable_is.php";
    require_once 'inc/functions/do_login.php';
//    session_start();
//
//    if (isset($_SESSION['user'])) {
//        header('Location: profile.php');
//    }
//
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
    <div class="content">
        <div class="col">
    <!--        <h1>Форма авторизации</h1><br>-->
            <form action="vendor/signin.php" method="post">
                <libel>Логин</libel>
                <input type="text" name="login" placeholder="Введите логин">
                <libel>Пароль</libel>
                <input type="password" name="pass" placeholder="Введите пароль">
                <button type="submit">Авторизовать</button>
                <p>У Вас нет аккаунта?<a href="register.php"> Регистрация</a></p>
                <?php
                    require_once  "inc/functions/func_message.php";
                ?>
            </form>
        </div>
    </div>

    <?php require_once 'inc/footer.php' ?>

</body>
</html>
