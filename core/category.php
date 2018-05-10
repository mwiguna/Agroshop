<?php
session_start();
$_SESSION['olahan'] = $_POST['olahan'];
header("Location: ../views/product_".$_POST['olahan'].".php");
?>