<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Kelapa</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'nav.php';
		include '../core/product_category.php';
		$_SESSION['olahan'] = 'jernang';
	?>

	<span class="title-product u-lay">JERNANG</span>

	<div class="product-parent full-float">
		<div class="intro-product">
			<div class="description-parent">
				Jernang adalah sejenis resin yang dihasilkan dari beberapa spesies rotan dari marga Daemonorops. Resin berwarna merah ini telah sejak lama diperdagangkan dan dimanfaatkan sebagai bahan pewarna, dupa, dan bahan obat tradisional. Terutama dihasilkan dari Sumatera dan Kalimantan, sebutannya dalam berbagai daerah di antaranya adalah jernang, jerenang, jeranang, jeronang, dan lain-lain. <br><br>
				Dalam bahasa-bahasa asing, resin ini dikenal sebagai dragon blood atau dragon's blood (Ingg.); drakenbloed (Bld.); sangre de drago (Prc.); sanguis draconis, dan lain-lain. Dalam pada itu, di luar Indonesia, dragon's blood juga diperoleh dari tetumbuhan lain selain rotan jernang; dari Timur Tengah, Asia Tenggara, dan Amerika Selatan.
			</div>
			<div class="photo-parent">
				<img src="../assets/img/jernang.jpg" alt="KAYU MANIS" class="img-box">
				Gambar : Jernang 
			</div>
		</div>
	</div>


	<div class="main-content full-float" id="produk">
		<?php
		while($row    = $result->fetch_assoc()){
			echo '

				<div class="content-box">
					<div class="content-box-text">
						<img src="'.$row['foto1'].'" alt="Produk '.$row['olahan'].'" class="img-box">
						'.$row['nama'].'<BR> Rp. '.$row['harga'].'/'.$row['hargaper'].'
						<a href="buy_product.php?product='.$row['nama'].'" class="btn-box-product">Beli »</a>
					</div>
				</div>
			
			';
		}
		?>
	</div>

	<?php
		include 'footer.php';

	?>

</body>
</html>