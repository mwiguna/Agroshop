<!DOCTYPE html>
<html>
<head>
	<title>Agroshop Indonesia</title>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'views/navindex.php';
	?>


	<div class="main">

	<div class="main-bio full-float">
		<div class="welcome">
			<div class="flow">
				SELAMAT DATANG DI AGROSHOP INDONESIA!<br>PENJUALAN PRODUK HASIL OLAHAN ALAM INDONESIA 
			</div>
		</div>
	</div>


	<div class="main-content full-float" id="produk">
		<div class="content-box">
			<div class="content-box-text">
				<img src="assets/img/kelapa.jpg" alt="Kelapa" class="img-box">
				KELAPA<br>Tanaman yang dijuluki sebagai <i>Tree Of Life</i> dimana semua bagian nya dapat dimanfaatkan.
				<form action="core/category.php" method="post">
					<input type="hidden" name="olahan" value="kelapa">
					<button type="submit" href="views/product_kelapa.php" class="btn-box">Lihat Hasil Olahan Produk &raquo;</button>
				</form>
			</div>
		</div>
		<div class="content-box">
			<div class="content-box-text">
				<img src="assets/img/kayu_manis.jpg" alt="Kayu Manis" class="img-box">
				KAYU MANIS<br>Tanaman yang punya sangat banyak manfaat yang juga dikenal dengan sebutan Betel palm atau Betel nut tree.
				<form action="core/category.php" method="post">
					<input type="hidden" name="olahan" value="kayu manis">
					<button type="submit" href="views/product_kayu manis.php" class="btn-box">Lihat Hasil Olahan Produk &raquo;</button>
				</form>
			</div>
		</div>
		<div class="content-box">
			<div class="content-box-text">
				<img src="assets/img/pinang.jpg" alt="Pinang" class="img-box">
				PINANG<br>Tanaman yang punya sangat banyak manfaat yang juga dikenal dengan sebutan Betel palm atau Betel nut tree.
				<form action="core/category.php" method="post">
					<input type="hidden" name="olahan" value="pinang">
					<button type="submit" href="views/product_pinang.php" class="btn-box">Lihat Hasil Olahan Produk &raquo;</button>
				</form>
			</div>
		</div>
		<div class="content-box">
			<div class="content-box-text">
				<img src="assets/img/jernang.jpg" alt="Jernang" class="img-box">
				JERNANG<br>Tanaman yang dijuluki sebagai <i>Tree Of Life</i> dimana semua bagian nya dapat dimanfaatkan.
				<form action="core/category.php" method="post">
					<input type="hidden" name="olahan" value="jernang">
					<button type="submit" href="views/product_jernang.php" class="btn-box">Lihat Hasil Olahan Produk &raquo;</button>
				</form>
			</div>
		</div>
	</div>



	</div>

	<?php
		include 'views/footerindex.php';

	?>

</body>
</html>