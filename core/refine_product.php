<?php
session_start();
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getupdate->nama       = $_POST['nama'];
$getupdate->penjual    = $_POST['penjual'];
$getupdate->harga      = $_POST['harga'];
$getupdate->hargaper   = $_POST['hargaper'];
$getupdate->olahan     = $_POST['olahan'];
$getupdate->metode     = $_POST['metode'];
$getupdate->bahan      = $_POST['bahan'];
$getupdate->kategori   = $_POST['kategori'];
$getupdate->keterangan = $_POST['keterangan'];
$getupdate->foto1      = $_POST['foto1'];
$getupdate->foto2      = $_POST['foto2'];
$getupdate->foto3      = $_POST['foto3'];
$getupdate->foto4      = $_POST['foto4'];

$getupdate->session  = $_SESSION['nama_product'];

$getupdate->edit_product($connect);
header("Location: ../views/edit_product.php?nama=".$_SESSION['nama_product']);



?>