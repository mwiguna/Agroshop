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
		$_SESSION['olahan'] = 'kelapa';
	?>

	<span class="title-product u-lay">Kelapa</span>

	<div class="product-parent full-float">
		<div class="intro-product">
			<div class="description-parent">
				Kelapa (Cocos nucifera) adalah anggota tunggal dalam marga Cocos dari suku aren-arenan atau Arecaceae. Tumbuhan ini dimanfaatkan hampir semua bagiannya oleh manusia sehingga dianggap sebagai tumbuhan serbaguna, terutama bagi masyarakat pesisir. Kelapa juga adalah sebutan untuk buah yang dihasilkan tumbuhan ini. <br><br> Tumbuhan ini diperkirakan berasal dari pesisir Samudera Hindia di sisi Asia, namun kini telah menyebar luas di seluruh pantai tropika dunia. <br><br> Hasil olahan Kelapa berupa Coconut Shell Charcoal (Arang Batok), Coconut Charcoal Briquette (Briket Arang Batok), Karbon aktif, Minyak kelapa, Coconut milk dan lain sebagainya.
			</div>
			<div class="photo-parent">
				<img src="../assets/img/kelapa.jpg" alt="PINANG" class="img-box">
				Gambar : Kelapa 
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