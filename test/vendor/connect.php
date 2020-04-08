<?php

    $connect = mysqli_connect('localhost', 'root', '', 'registering_php');

    if (!$connect) {
        die('Error connect to DataBase');
    }
