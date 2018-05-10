<?php

$connect = $getconnect->get_connect();
$getselect->email  = $_SESSION['email'];
$getselect->status = '0';

$getselect->buy_history($connect);


?>