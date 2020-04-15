<?php

    session_start ();

    require_once  'connect.php';

    $login  = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass   = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if (mb_strlen($login) < 2 || mb_strlen($login) > 10) {
        $_SESSION['message'] = " Недопустимая длина логина (от 2 до 10 символов)" .
            header ('Location: ../login.php');
        exit();
    } elseif (mb_strlen($pass) < 3 || mb_strlen($pass) > 8) {
        $_SESSION['message'] = " Недопустимая длина пароля (от 3 до 8 символов) " .
            header ('Location: ../login.php');
        exit();
    }

    $pass = md5 ($pass . 'lvihj63208');

    $check_user = mysqli_query ($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = mysqli_fetch_assoc($check_user);

    if ($user == NULL) {
        $_SESSION['message'] = " Такой пользователь не найден! " .
            header ('Location: ../login.php');
        exit();
    } else
        $_SESSION['user'] = [
            'id'      => $user['id'],
            'login'   => $user['login'],
            'name'    => $user['name'],
            'avatar'  => $user['avatar']
        ];
        header ('Location: ../profile.php');