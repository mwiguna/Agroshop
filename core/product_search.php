<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getselect->search   = $_GET['search'];
$getselect->olahan   = $_GET['product'];
$getselect->kategori = $_GET['category'];
$getselect->harga    = $_GET['price'];
$getselect->view_product($connect);

?>