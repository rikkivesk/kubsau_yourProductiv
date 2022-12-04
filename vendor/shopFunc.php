<?php
session_start();
require_once 'connect.php';

//echo $_GET['id'];
$class_item = $_GET['class'];
$id = $_SESSION['user']['id'];
mysqli_query($connect, "update users set classes='$class_item' where id = '$id'");
