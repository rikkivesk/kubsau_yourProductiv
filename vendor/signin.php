<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "balls" => $user['balls'],
            "classes_background" => $user['classes_background'],
            "classes_fonts" => $user['classes_fonts'],
            "classes_border" => $user['classes_border']

        ];

        header('Location: ../ava.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../auth.php');
    }
    ?>

