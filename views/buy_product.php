<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Beli Produk</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script>
		var x = document.getElementById("u-foto").value;
		document.write(x);
	</script>
</head>
<body>

	<?php
		error_reporting(0);
		include 'nav.php';
		include '../core/buy_product.php';

		if($_GET['product'] == 'no'){
	?>

	<div class="info-all regis-danger top-8 u-lay">Produk Tidak Ditemukan !</div>

	<?php
		} else if ($result->num_rows == 0){
			header("Location: buy_product.php?product=no");
		} else {
	?>


	<div class="main u-lay">
		<span class="title-product-buy"><?= $row['nama'] ?></span>
		<div class="photos">
			<div class="photos1">
			<?php
				if(isset($_POST['photos'])){
			?>
				<img src="<?= $_POST['photos'] ?>" class="u-photo">

			<?php } else {?>
				<img src="<?= $row['foto1'] ?>" class="u-photo">
			<?php } ?>

			</div>
			<div class="photos2">
				<div class="full-float">
					<div class="buy-price">Harga : Rp. <span class="tnr"><?= $row['harga'] ?></span>/<?= $row['hargaper'] ?></div>
					<form action="keranjang.php" method="post">
						<input type="hidden" name="nama"     value="<?= $row['nama'] ?>">
						<input type="hidden" name="penjual"  value="<?= $row['penjual'] ?>">
						<input type="hidden" name="harga"    value="<?= $row['harga'] ?>">
						<input type="hidden" name="hargaper" value="<?= $row['hargaper'] ?>">
						<input type="hidden" name="kategori" value="<?= $row['kategori'] ?>">
						<input type="hidden" name="foto"     value="<?= $row['foto1'] ?>">
						<button type="submit" class="btn-buy">Beli &nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span></button>
					</form>
				</div>
				<form action="" method="post">
					<input type="hidden" name="product" value="<?= $_GET['product'] ?>">
					<input type="hidden" name="photos" value="<?= $row['foto1'] ?>">
					<button class="submit-photos" type="submit"><img src="<?= $row['foto1'] ?>" class="sub-photos"></button>
				</form>
				<?php if($row['foto2'] != '../assets/img/'){ ?>
				<form action="" method="post">
					<input type="hidden" name="product" value="<?= $_GET['product'] ?>">
					<input type="hidden" name="photos" value="<?= $row['foto2'] ?>">
					<button class="submit-photos" type="submit"><img src="<?= $row['foto2'] ?>" class="sub-photos"></button>
				</form>
				<?php } if($row['foto3'] != '../assets/img/'){ ?>
				<form action="" method="post">
					<input type="hidden" name="product" value="<?= $_GET['product'] ?>">
					<input type="hidden" name="photos" value="<?= $row['foto3'] ?>">
					<button class="submit-photos" type="submit"><img src="<?= $row['foto3'] ?>" class="sub-photos"></button>
				</form>
				<?php } if($row['foto4'] != '../assets/img/'){ ?>
				<form action="" method="post">
					<input type="hidden" name="product" value="<?= $_GET['product'] ?>">
					<input type="hidden" name="photos" value="<?= $row['foto4'] ?>">
					<button class="submit-photos" type="submit"><img src="<?= $row['foto4'] ?>" class="sub-photos"></button>
				</form>
				<?php } ?>
			</div>		
		</div>

		<div class="full-float describe">
			<table border="0" class="table-buy">
				<tr>
					<td>Penjual</td>
					<td>:</td>
					<td class="optional-table-buy"> <?= $row['penjual'] ?></td>
				</tr>
				<tr><td colspan="3">&nbsp;</td></tr>
				<tr>
					<td colspan="3"><?= $row['nama'] ?> dibuat dengan metode <?= $row['metode'] ?></td>
				</tr>
				<tr><td colspan="3">&nbsp;</td></tr>
				<tr>
					<td>Bahan</td>
					<td>:</td>
					<td><?= $row['bahan'] ?></td>
				</tr>
			</table>
		</div>

		<div class="full-float menu-buy">
				<ul class="nav nav-tabs" role="tab-list">
					<li role="presentation" class="active">
						<a href="#home" class="tab-agr" aria-controller="home" role="tab" data-toggle="tab"> 
						 	Keterangan
						</a>
					</li>
					<li role="presentation">
						<a href="#profil" class="tab-agr" aria-controller="profil" role="tab" data-toggle="tab"> 
							Review
						</a>
					</li>
					<li role="presentation">
						<a href="#ulasan" class="tab-agr" aria-controller="profil" role="tab" data-toggle="tab"> 
							Ulasan Produk
						</a>
					</li>
				</ul>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane top-1 active" id="home">
						<?= $row['keterangan'] ?>
					</div>
					<div role="tabpanel" class="tab-pane top-1" id="profil">
						<i>Belum ada Review</i>
					</div>
					<div role="tabpanel" class="tab-pane top-1" id="ulasan">
						<i>Tidak ada ulasan untuk produk ini</i>
					</div>
				</div>

		</div>

	</div>

	<?php
		}
		include 'footer.php';
	?>

	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

</body>
</html>