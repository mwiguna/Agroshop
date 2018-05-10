<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();

$getselect->olahan = $_SESSION['olahan'];
$getselect->product_category($connect);

?>