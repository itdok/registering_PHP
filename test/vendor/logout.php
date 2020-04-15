<?php
    session_start();
    unset($_SESSION['user']);
    $_SESSION['message'] = 'Вы успешно вышли';
        header ('Location: ../index.php');