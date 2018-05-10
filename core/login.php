<?php
include '../model/connect.php';
include '../model/init.php';

$connect = $getconnect->get_connect();
$getselect->email = $_POST['email'];
$getselect->login($connect);

$pass_input = $_POST['password'];
$pass_db    = $row['password'];
$status     = $row['status'];
$nama   	= $row['nama'];

if($status == 'admin'){
	if(password_verify($pass_input, $pass_db)){
		session_start();
		$_SESSION['nama']  = $nama;
		$_SESSION['admin'] = $pass_db;
		header("Location: ../views/admin_privacy.php");
	} else {
		header("Location: ../views/login.php?login=failed");
	}
} else {
	if(password_verify($pass_input, $pass_db)){
		session_start();
		$_SESSION['nama']  = $nama;
		$_SESSION['user'] = $pass_db;
		header("Location: ../views/profile.php");
	} else {
		header("Location: ../views/login.php?login=failed");
	}
}


?>