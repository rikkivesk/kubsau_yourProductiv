<?php
session_start();
require_once 'connect.php';

//echo $_GET['id'];
$class_item = $_GET['class'];
$id_category = $_GET['id_category']; // 1 - фон, 2 - рамки, 3 - шрифты
$price_item = $_GET['price'];
$id = $_SESSION['user']['id'];
$classes_background = $_SESSION['user']['classes_background'];
$classes_fonts = $_SESSION['user']['classes_fonts'];
$classes_border = $_SESSION['user']['classes_border'];
$price = $_SESSION['user']['balls'];

if ($price_item <= $price and $price != 0) {
    if ($id_category == 1) {

        //echo 'у вас уже есть этот товар';
        //header('Location: ../vendor/signin.php');

    }else{
        mysqli_query($connect, "update users set classes_background = '$class_item' where id = '$id'");
        $price -= $price_item;
        mysqli_query($connect, "update users set balls='$price' where id = '$id'");
        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$id'");

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
        header('Location: ../index.php');
    }

}else{
    echo 'у вас недостаточно баллов';
}
if ($price_item <= $price and $price != 0) {
    if ($id_category == 2) {

        //echo 'у вас уже есть этот товар';
        //header('Location: ../vendor/signin.php');

    }else{
        mysqli_query($connect, "update users set classes_border ='$class_item' where id = '$id'");
        $price -= $price_item;
        mysqli_query($connect, "update users set balls='$price' where id = '$id'");
        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$id'");

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
        header('Location: ../index.php');
    }

}else{
    echo 'у вас недостаточно баллов';
}
if ($price_item <= $price and $price != 0) {
    if ($id_category == 3) {

        //echo 'у вас уже есть этот товар';
        //header('Location: ../vendor/signin.php');

    }else{
        mysqli_query($connect, "update users set classes_fonts='$class_item' where id = '$id'");
        $price -= $price_item;
        mysqli_query($connect, "update users set balls='$price' where id = '$id'");
        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$id'");

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
        header('Location: ../index.php');
    }

}else{
    echo 'у вас недостаточно баллов';
}
