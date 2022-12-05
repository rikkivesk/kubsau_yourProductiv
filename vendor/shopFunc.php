<?php
session_start();
require_once 'connect.php';

//echo $_GET['id'];
$class_item = $_GET['class'];
$price_item = $_GET['price'];
$id = $_SESSION['user']['id'];
$class = $_SESSION['user']['classes'];
$price = $_SESSION['user']['balls'];

if ($price_item <= $price and $price != 0) {
    if ($class_item == $class) {

        echo 'у вас уже есть этот товар';
        header('Location: ../vendor/signin.php');
    }else{
        mysqli_query($connect, "update users set classes='$class_item' where id = '$id'");
// mysqli_query($connect, "select * from users where id = '$id'");
        $price -= $price_item;
        mysqli_query($connect, "update users set balls='$price' where id = '$id'");
        header('Location: ../vendor/signin.php');
    }

}else{
    echo 'у вас недостаточно баллов';
}
