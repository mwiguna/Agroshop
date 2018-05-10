<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Lihat Produk</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		error_reporting(0);
		include 'nav.php';
		include '../core/product_search.php';
	?>
	
	<div class="main">
		
		<div class="vpro">
			<div class="vpro1">
				<a class="full-float vprok"><span>Kategori :</span></a>
				<div class="cat-plant full-float">
					<a class="full-float vprot"><span>Tanaman</span></a>
					<a href="product_all.php?product=Kelapa"     class="cat valuesubfoot"><span class="full-float">Kelapa</span></a>
					<a href="product_all.php?product=Pinang"     class="cat valuesubfoot"><span class="full-float">Pinang</span></a>
					<a href="product_all.php?product=Durian"     class="cat valuesubfoot"><span class="full-float">Durian</span></a>
					<a href="product_all.php?product=Kayu Manis" class="cat valuesubfoot"><span class="full-float">Kayu Manis</span></a>
				</div>
				<div class="cat-plant full-float">
					<a class="full-float vprot"><span>Jenis Produk</span></a>
					<a href="product_all.php?category=Makanan"        class="cat valuesubfoot"><span class="full-float">Makanan</span></a>
					<a href="product_all.php?category=Obat"           class="cat valuesubfoot"><span class="full-float">Obat-obatan</span></a>
					<a href="product_all.php?category=Bahan Bangunan" class="cat valuesubfoot"><span class="full-float">Bahan Bangunan</span></a>
					<a href="product_all.php?category=Bahan Bakar"    class="cat valuesubfoot"><span class="full-float">Bahan Bakar</span></a>
					<a href="product_all.php?category=Hiasan"         class="cat valuesubfoot"><span class="full-float">Hiasan</span></a>
				</div>
				<div class="cat-plant full-float">
					<a class="full-float vprot"><span>Harga</span></a>
					<a href="product_all.php?price=20000" class="cat valuesubfoot"><span class="full-float tnr">0 - Rp. 20.000</span></a>
					<a href="product_all.php?price=50000" class="cat valuesubfoot"><span class="full-float tnr">Rp. 20.000 - Rp. 50.000</span></a>
				</div>
			</div>
			<div class="vpro2">
				<div class="full-float">
					<span  class="info-all" id="info-all">Lihat Semua Produk »</span>
				</div>
				<?php if($result->num_rows == 0){ ?>
					<div class="info-all regis-danger">Produk Tidak Ditemukan!</div>
				<?php } else { ?>
				<div class="vpro22">
					<div class="main-content full-float" id="produk">
						<?php
							while($row = $result->fetch_assoc()){
								echo '
									<div class="content-box content-box2 product-box-width">
										<div class="content-box-text content-box-text2">
											<img src="'.$row['foto1'].'" alt="Produk" class="img-box img-box2">
											'.$row['nama'].'<BR> Rp. '.$row['harga'].' /'.$row['hargaper'].'
											<a href="buy_product.php?product='.$row['nama'].'" class="btn-box-product btn-box-product2">Beli »</a>
										</div>
									</div>
								';
							}
						?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>


	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>