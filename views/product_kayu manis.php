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
		$_SESSION['olahan'] = 'kayu manis';
	?>

	<span class="title-product u-lay">KAYU MANIS</span>

	<div class="product-parent full-float">
		<div class="intro-product">
			<div class="description-parent">
				Kulit kayu manis adalah sejenis rempah-rempah yang diperoleh dari kulit bagian dalam beberapa spesies pohon genus Cinnamomum yang digunakan untuk masakan yang manis dan sedap. Meskipun kayu manis terkadang dianggap sebagai "kayu manis yang sesungguhnya", kebanyakan kulit kayu manis di perdagangan internasional dari spesies lain yang berdekatan, yang juga disebut "kasia"untuk membedakannya dari "kulit kayu manis yang sesungguhnya".<br><br>

				Kayu manis adalah nama untuk selusin spesies pepohonan dan produk rempah komersial yang dihasilkan oleh sebagian pepohonan tersebut. Semuanya tergolong dalam genus Cinnamomum dalam keluarga Lauraceae. Hanya sedikit dari spesies-spesies tersebut yang ditumbuhkan untuk dijual sebagai rempah-rempah.
			</div>
			<div class="photo-parent">
				<img src="../assets/img/kayu_manis.jpg" alt="KAYU MANIS" class="img-box">
				Gambar : Kayu Manis
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