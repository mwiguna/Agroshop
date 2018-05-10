<?php

$connect = $getconnect->get_connect();
$getselect->email  = $_SESSION['email'];
$getselect->status = '1';

$getselect->notification_buy($connect);


?>