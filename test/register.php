<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
    $collation_error  = $_SESSION['message'];
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
                    if (isset($collation_error)) {
                        echo '<p class="msg" > ' . $collation_error . ' </p>';
                        }
                        session_destroy();
                    ?>
                </form>
            </div>
        </div>

        <?php require_once 'inc/footer.php' ?>

    </body>
</html>