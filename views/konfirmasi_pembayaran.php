<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Konfirmasi Pembayaran</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'nav.php';
		include '../core/view_confirm_buy.php';
		if(empty($_POST['email'])){
			header("Location: product_all.php?no_product");
		}
	?>
	
	<div class="main">
		<div class="keranjang">
				<span class="title-biodata">Konfirmasi Pembayaran</span>
				<div class="full-float keranjang-konten">
					<div class="full-float form-kr">
					<table border="0" class="tb-confirm">
							<tr>
								<td>Keterangan Produk</td>
							</tr>	
							<tr>
								<td>Nama Produk</td>
								<td>&nbsp;:&nbsp;</td>
								<td><?= $row['produk'] ?></td>
							</tr>
							<tr>
								<td>Penjual</td>
								<td>&nbsp;:&nbsp;</td>
								<td></td>
							</tr>
							<tr>
								<td>Harga</td>
								<td>&nbsp;:&nbsp;</td>
								<td>Rp. <?= $row['harga'] ?>,-</td>
							</tr>
							<tr>
								<td>Tanggal</td>
								<td>&nbsp;:&nbsp;</td>
								<td><span class="tnr"><?= $row['tanggal'] ?></span></td>
							</tr>
					</table>
					<table border="0">
							<tr>
								<td>Keterangan Pembeli</td>
							</tr>
							<tr>
								<td>Nama Penerima</td>
								<td>&nbsp;:&nbsp;</td>
								<td><?= $row['nama'] ?></td>
							</tr>	
							<tr>
								<td>E-mail</td>
								<td>&nbsp;:&nbsp;</td>
								<td><?= $row['email'] ?></td>
							</tr>
							<tr>
								<td>No. Telp</td>
								<td>&nbsp;:&nbsp;</td>
								<td><span class="tnr"><?= $row['nohp'] ?></span></td>
							</tr>				
							<tr>
								<td>Alamat</td>
								<td>&nbsp;:&nbsp;</td>
								<td><?= $row['alamat'] ?></td>
							</tr>
							<tr>
								<td>Kode POS</td>
								<td>&nbsp;:&nbsp;</td>
								<td><span class="tnr"><?= $row['kodepos'] ?></span></td>
							</tr>	
					</table>
						<div class="full-float">
							<br>Mohon Lengkapi Form Dibawah ini Untuk Konfirmasi Pembayaran : <br><br>
							<form name="formbuy" action="../core/confirm_buy.php" method="post">
								<input class="kr-text" type="text"   name="norek"    placeholder="Masukkan Nomor Rekening Yang Melakukan Pembayaran">
								<input class="kr-text" type="text"   name="namarek"  placeholder="Rekening Atas Nama">
								<input class="kr-text" type="hidden" name="email"    value="<?= $row['email']  ?>">
								<input class="kr-text" type="hidden" name="tanggal"  value="<?= $row['tanggal'] ?>">

								<button class="btn-kr-submit do-buy" type="submit" onclick="return confirm('Anda yakin ingin menkonfirmasi pembayaran atas produk ini?')">Konfirmasi Pembayaran &raquo;</button>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>