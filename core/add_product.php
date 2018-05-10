<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getinsert->nama     = $_POST['nama'];
$getinsert->penjual  = $_POST['penjual'];
$getinsert->harga    = $_POST['harga'];
$getinsert->hargaper = $_POST['hargaper'];
$getinsert->kategori = $_POST['kategori'];
$getinsert->olahan   = $_POST['olahan'];

$location = '../assets/img/';
$getinsert->foto1    = $location . $_POST['foto1'];
$getinsert->foto2    = $location . $_POST['foto2'];
$getinsert->foto3    = $location . $_POST['foto3'];
$getinsert->foto4    = $location . $_POST['foto4'];

$getinsert->add_product($connect);
header("Location: ../views/admin_privacy.php");




?>