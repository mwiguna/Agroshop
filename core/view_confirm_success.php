<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getselect->view_confirm_success($connect);

?>