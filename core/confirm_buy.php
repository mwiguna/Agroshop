<?php
session_start();
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getupdate->namarek    = $_POST['namarek'];
$getupdate->norek      = $_POST['norek'];
$getupdate->email      = $_POST['email'];
$getupdate->tanggal    = $_POST['tanggal'];
$getupdate->konfirmasi = 1;

$getupdate->confirm_buy($connect);
header("Location: ../views/confirm_success.php");

?>