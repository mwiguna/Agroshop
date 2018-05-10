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
		$_SESSION['olahan'] = 'pinang';
	?>

	<span class="title-product u-lay">PINANG</span>

	<div class="product-parent full-float">
		<div class="intro-product">
			<div class="description-parent">
				Pinang adalah sejenis palma yang tumbuh di daerah Pasifik, Asia dan Afrika bagian timur. Pinang juga merupakan nama buahnya yang diperdagangkan orang. <br><br>
				Pelbagai nama daerah di antaranya adalah pineung (Aceh), pining (Batak Toba), penang (Md.), jambe (Sd., Jw.), bua, ua, wua, pua, fua, hua (aneka bahasa di Nusa Tenggara dan Maluku) dan berbagai sebutan lainnya.
				Dalam bahasa Inggris dikenal sebagai Betel palm atau Betel nut tree, dan nama ilmiahnya adalah Areca catechu.
			</div>
			<div class="photo-parent">
				<img src="../assets/img/pinang.jpg" alt="KAYU MANIS" class="img-box">
				Gambar : Pinang 
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