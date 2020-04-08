<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: index.php');
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
    <h1>Профиль пользователя</h1><br>
    <form action="">
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?> - <?= $_SESSION['user']['login'] ?></h2>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>
</body>
</html>