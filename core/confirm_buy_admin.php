<?php
session_start();
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getupdate->status   = '1';
$getupdate->email    = $_POST['email'];
$getupdate->tanggal  = $_POST['tanggal'];

$getupdate->confirm_buy_admin($connect);
header("Location: ../views/admin_privacy.php");

?>