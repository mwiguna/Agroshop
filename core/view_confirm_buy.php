<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getselect->email   = $_POST['email'];
$getselect->tanggal = $_POST['tanggal'];

$getselect->view_confirm_buy($connect);

?>