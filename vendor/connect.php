<?php

    $connect = mysqli_connect('localhost', 'root', '', 'reg_users');

    if (!$connect) {
        die('Error connect to DataBase');
    }