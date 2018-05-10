<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getselect->session = $_SESSION['nama'];

$getselect->view_biodata($connect);

?>