<?php
session_start();
require_once 'connect.php';
$avatar = $_POST['file'];
$check_user = mysqli_query($connect, "update users set avatar = $avatar");
