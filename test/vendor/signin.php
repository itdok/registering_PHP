<?php

    session_start ();

    require_once  'connect.php';

    $login  = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass   = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        $_SESSION['message'] = " Недопустимая длина логина " .
            header ('Location: ../index.php');
        exit();
    } elseif (mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
        $_SESSION['message'] = " Недопустимая длина пароля (от 2 до 6 символов) " .
            header ('Location: ../index.php');
        exit();
    }

    $pass = md5 ($pass . 'lvihj63208');

    $check_user = mysqli_query ($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = mysqli_fetch_assoc($check_user);

    if ($user == NULL) {
        $_SESSION['message'] = " Такой пользователь не найден! " .
            header ('Location: ../index.php');
        exit();
    } else
        $_SESSION['user'] = [
            'id'      => $user['id'],
            'login'   => $user['login'],
            'name'    => $user['name'],
            'avatar'  => $user['avatar']
        ];
        header ('Location: ../profile.php');