<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Halaman Register</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'nav.php';
	?>
	
	<div class="main u-lay">
		<span class="title-product-buy">Halaman Register</span>
		<?php 
			if(!empty($_GET['password'])){
		 		if($_GET['password'] == 'not_match'){
		 ?>
		<div class="info-all regis-danger">Maaf Konfirmasi Password Tidak Benar!</div>
		<?php } }?>
		<div class="log regis-alert">
			<form action="../core/register_user.php" method="post">
				<input type="text" name="nama" placeholder="Nama Lengkap" required>
				<input type="email" name="email" placeholder="E-mail" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="password" name="confirm" placeholder="Konfirmasi Password" required>
				<input type="submit" value="Register">
			</form>
		</div>
	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>