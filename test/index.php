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
    <div class="col">
        <h1>Форма авторизации</h1><br>
        <form action="vendor/signin.php" method="post">
            <libel>Логин</libel>
            <input type="text" name="login" placeholder="Введите логин">
            <libel>Пароль</libel>
            <input type="password" name="pass" placeholder="Введите пароль">
            <button type="submit">Авторизовать</button>
            <p>У Вас нет аккаунта?<a href="register.php"> Регистрация</a></p>
            <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
</body>
</html>