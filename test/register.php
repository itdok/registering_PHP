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
        <!--        <h1>Форма регистрации</h1><br>-->
                <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
                    <libel>Логин</libel>
                    <input type="text" name="login" placeholder="Введите логин">
                    <libel>Имя</libel>
                    <input type="text" name="name" placeholder="Введите имя">
                    <libel>Изображение профиля</libel>
                    <input type="file" name="avatar">
                    <libel>Пароль</libel>
                    <input type="password" name="pass" placeholder="Введите пароль">
                    <libel>Потвердите пароль</libel>
                    <input type="password" class="form-control" name="pass_confirm" placeholder="Подтведите пароль">

                    <button type="submit">Зарегистрировать</button>
                    <p>У Вас есть аккаунт?<a href="login.php"> Авторизация</a></p>
                    <?php
                        require_once  "inc/functions/func_message.php";
                    ?>
                </form>
            </div>
        </div>

        <?php require_once 'inc/footer.php' ?>

    </body>
</html>