<?php
session_start();
/*
 * если переменная 'todo' из js пришла в POST запросе, то
 *  прибавь к переменной $_SESSION['user']['balls'] 10 и
 *  и обнови значение в базе данных отправив запрос
 *  то есть если значение POST['todo'] не пустое, прибавь к переменной POST['balls'] 10
 *  далее update sql запрос в базу данных отнеси новое значение balls
 */
echo "значение баллов из сессии: " . $_SESSION['user']['balls'] . "<br>";
echo "значение баллов из http: " . $numberMoney = $_POST['numberMoney']. "<br>";
//$numberMoney = $_SESSION['user']['balls'];
//echo "значение баллов из сессии: " . $_SESSION['user']['balls'];
//$numberMoney = $_POST['balls'