<?php
session_start();
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getupdate->nama     = $_POST['nama'];
$getupdate->email    = $_POST['email'];
$getupdate->nohp     = $_POST['nohp'];
$getupdate->tgllahir = $_POST['tgllahir'];
$getupdate->alamat   = $_POST['alamat'];
$getupdate->kota     = $_POST['kota'];
$getupdate->negara   = $_POST['negara'];
$getupdate->kodepos  = $_POST['kodepos'];
$getupdate->session  = $_SESSION['nama'];

$_SESSION['nama'] = $_POST['nama']; 
$getupdate->edit_biodata($connect);
header("Location: ../views/profile.php");



?>