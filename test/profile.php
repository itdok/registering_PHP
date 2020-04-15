<?php
    require_once "inc/functions/variable_no_profile.php";
    require_once 'inc/functions/do_login.php';
//    session_start();
//
//    if (!isset($_SESSION['user'])) {
//        header('Location: index.php');
//    }
//
//    if ($_GET['do'] == 'login') {
//        header('Location: login.php');
//    }
?>
<!--<!doctype html>-->
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP training</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<?php require_once 'inc/header.php' ?>

<div class="content">
    <!--        <div><h3>Профиль пользователя</h3></div>-->
    <div class="col">
        <form action="">
            <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
            <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?> - <?= $_SESSION['user']['login'] ?></h2>
            <a href="vendor/logout.php" class="logout">Выход</a>
        </form>
    </div>
</div>

<?php require_once 'inc/footer.php' ?>
</body>
</html>