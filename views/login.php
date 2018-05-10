<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'nav.php';
	?>
	
	<div class="main u-lay">
		<span class="title-product-buy">Halaman Login</span>
		<?php
			error_reporting(0);
			if(!empty($_GET['register']) || !empty($_GET['login'])){
				if($_GET['register'] == 'success'){
		?>
		<div class="info-all regis-success">Selamat Anda Telah Terdaftar! Silahkan Login!</div>
		<?php } else if ($_GET['login'] == 'no') { ?>
		<div class="info-all regis-danger">Harap Login Terlebih Dahulu!</div>
		<?php } else if ($_GET['login'] == 'failed') { ?>
		<div class="info-all regis-danger">E-mail atau kata sandi tidak benar!</div>
		<?php } } ?>
		<div class="log">
			<form action="../core/login.php" method="post">
				<input type="text" name="email" placeholder="E-mail" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="submit" value="Log In">
			</form>
			<a href="register.php" class="regis-info">Belum Punya Akun? Klik Untuk Register!</a>
		</div>
	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>