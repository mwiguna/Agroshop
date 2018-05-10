<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getinsert->nama     = $_POST['nama'];
$getinsert->email    = $_POST['email'];
$getinsert->nohp     = $_POST['nohp'];
$getinsert->kota     = $_POST['kota'];
$getinsert->alamat   = $_POST['alamat'];
$getinsert->negara   = $_POST['negara'];
$getinsert->kodepos  = $_POST['kodepos'];
$getinsert->produk   = $_POST['produk'];
$getinsert->jumlah   = $_POST['jumlah'];
$getinsert->tanggal  = $_POST['tanggal'];
$getinsert->harga    = $_POST['harga']*$_POST['jumlah'];


$getinsert->buy_product($connect);
session_start();
$_SESSION['access'] = $getinsert->harga;
header("Location: ../views/buy_it.php");

?>