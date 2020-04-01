<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass . 'lvsihj63208');
require '../../database/connect.php';

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = mysqli_fetch_assoc($result);
if ($user == NULL) {
    echo " Такой пользователь не найден!" .
        "<meta http-equiv='refresh' content='3; url=http://registeringphp/'>";
    exit();
}
setcookie('user', $user['name'], time() + 360, "/");

$mysql->close();
echo "Вы успешно авторизовались - переадресация через 5 сек" .
    "<meta http-equiv='refresh' content='5; url=http://registeringphp/'>";
