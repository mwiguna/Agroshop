<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getselect->nama = $_GET['product'];
$getselect->buy_product($connect);


?>