<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getinsert->nama     = $_POST['nama'];
$getinsert->email    = $_POST['email'];
$getinsert->status   = 'user';

if($_POST['password'] == $_POST['confirm']){
	$getinsert->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$getinsert->register_user($connect);
	header("Location: ../views/login.php?register=success");
} else {
	header("Location: ../views/register.php?password=not_match");
}

?>