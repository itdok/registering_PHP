<?php

    session_start ();

    require_once  'connect.php';

    $login          = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name           = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass           = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $pass_confirm   = $_POST['pass_confirm'];

    if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        $_SESSION['message'] = "Недопустимая длина логина" .
            header ('Location: ../register.php');
        exit();
    } elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        $_SESSION['message'] = "Недопустимая длина имени" .
            header ('Location: ../register.php');
        exit();
    } elseif (mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
        $_SESSION['message'] = "Недопустимая длина пароля (от 2 до 6 символов)" .
            header ('Location: ../register.php');
        exit();
    }

    if ($pass === $pass_confirm) {

    $path = 'uploads/' .time () . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке файла';
        header ('Location: ../register.php');
    }
    $pass = md5 ($pass . 'lvihj63208');

    mysqli_query ($connect, "INSERT INTO `users` (`id`, `login`, `pass`, `name`, `avatar`) 
                                    VALUES (NULL, '$login', '$pass', '$name' , '$path')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header ('Location: ../index.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header ('Location: ../register.php');
    }