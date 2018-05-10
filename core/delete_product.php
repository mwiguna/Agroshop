<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getdelete->nama       = $_POST['nama'];

$getdelete->delete_product($connect);
header("Location: ../views/lihat_product.php");

?>