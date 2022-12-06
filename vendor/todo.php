<?php
session_start();
require_once 'connect.php';
/*
 * если переменная 'todo' из js пришла в POST запросе, то
 *  прибавь к переменной $_SESSION['user']['balls'] 10 и
 *  и обнови значение в базе данных отправив запрос
 *  то есть если значение POST['todo'] не пустое, прибавь к переменной POST['balls'] 10
 *  далее update sql запрос в базу данных отнеси новое значение balls
 */
//echo "значение баллов из сессии: " . $_SESSION['user']['balls'] . "<br>";
//echo "значение баллов из http: " . $numberMoney = $_POST['numberMoney']. "<br>";
//$numberMoney = $_SESSION['user']['balls'];
//echo "значение баллов из сессии: " . $_SESSION['user']['balls'];
//$numberMoney = $_POST['balls'
$price = $_SESSION['user']['balls'];
$id = $_SESSION['user']['id'];
$postTodo = $_POST['todo'];
if (isset($postTodo)){
    $price += 50;
    mysqli_query($connect, "update users set balls='$price' where id = '$id'");
    unset($postTodo);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$id'");

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email'],
        "balls" => $user['balls'],
        "classes" => $user['classes']
    ];
    header('Location: ../index.php');
}
