<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Konfirmasi Pembelian</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		session_start();
		error_reporting(0);
		include 'nav.php';
		if($_POST[''] == ''){
			header("Location: product_all.php?no_product");
		} else {
	?>
	
	<div class="main">

			<div class="keranjang">
				<span class="title-biodata">Konfirmasi Pembayaran Berhasil !</span>
				<div class="full-float keranjang-konten">
					Terimakasih telah melakukan pembayaran. Pesanan anda akan segera diproses.
					<div class="buy-it"><a href="product_all.php" class="btn-kr-submit buy-it-link">Lihat Produk Menarik Lainnya &raquo;</a></div>
					<div class="buy-it"><a href="profile_history.php" class="btn-kr-submit buy-it-link">Halaman Konfirmasi Pembayaran &raquo;</a></div>
				</div>
			</div>

	</div>

	<?php
		}
		include 'footer.php';
	?>

</body>
</html>