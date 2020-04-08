<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Форма авторизации</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/style.css">
    </head>
    <body>
        <div class="container mt-4">
            <?php
                if ($_COOKIE['user'] == ''):
            ?>
            <div class="row">
                <?php require_once 'validation_form/authorization_form.php'; ?>
            </div>
            <?php else: ?>
            <p>Привет <?=$_COOKIE['user']?>.
            Чтобы выйти нажмите <a href="exit.php"><u>здесь</u></a>. </p>
            <?php endif; ?>
        </div>
        <?php require_once 'inc/footer.inc.php'; ?>
    </body>
</html>