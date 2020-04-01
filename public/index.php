<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <?php
            if ($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
                <form action="validation_form/check.php" method="post"><br>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Зарегистрировать</button>
                </form>
            </div>
            <div class="col">
                <h1>Форма авторизации</h1>
                <form action="validation_form/auth.php" method="post"><br>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-success" type="submit">Авторизоваться</button>
                </form>
            </div>
        </div>
        <?php else: ?>
        <p>Привет <?=$_COOKIE['user']?>.
        Чтобы выйти нажмите <a href="/exit.php"><u>здесь</u></a>. </p>
        <?php endif; ?>
    </div>
</body>
</html>