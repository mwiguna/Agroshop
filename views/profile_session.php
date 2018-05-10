<?php

if(empty($_SESSION['user']) && empty($_SESSION['admin'])){
	header("Location: login.php?login=no");
}


?>