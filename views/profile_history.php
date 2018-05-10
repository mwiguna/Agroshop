<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Profil</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'nav.php';
		include 'profile_session.php';
		include '../core/view_biodata.php';
		$_SESSION['email'] = $row['email'];
		include '../core/buy_history.php';
	?>
	
	<div class="main u-lay">
		<span class="title-profile">Riwayat Pembelian</span>
		<?php include 'profile_menu.php'; ?>
		<div class="profile2">
			<?php 
				while($co = $result->fetch_assoc()){
					if($co['konfirmasi'] == 1){
						echo '
							<div class="biodata">
								<span class="title-biodata left">'.$co['tanggal'].'</span>
								<div class="full-float menu-biodata">
									<table border="0">
										<tr>
											<td>Nama Produk</td>
											<td class="double-point">:</td>
											<td>'.$co['produk'].'</td>
										</tr>
										<tr>
											<td>Jumlah</td>
											<td class="double-point">:</td>
											<td>'.$co['jumlah'].'</td>
										</tr>
										<tr>
											<td>Harga</td>
											<td class="double-point">:</td>
											<td>Rp. '.$co['harga'].',-</td>
										</tr>
										<tr>
											<td colspan="3"><i>(Sudah di Konfirmasi. Sedang dalam proses Verifikasi oleh Admin)</i></td>
										</tr>
									</table>
								</div>
							</div>
						';
					} else {
					echo '
						<div class="biodata">
							<span class="title-biodata left">'.$co['tanggal'].'</span>
							<div class="full-float menu-biodata">
								<table border="0">
									<tr>
										<td>Nama Produk</td>
										<td class="double-point">:</td>
										<td>'.$co['produk'].'</td>
									</tr>
									<tr>
										<td>Jumlah</td>
										<td class="double-point">:</td>
										<td>'.$co['jumlah'].'</td>
									</tr>
									<tr>
										<td>Harga</td>
										<td class="double-point">:</td>
										<td>Rp. '.$co['harga'].',-</td>
									</tr>
									<tr><td>&nbsp;</td></tr>
									'; ?>
									<tr>
										<form action="konfirmasi_pembayaran.php" method="post">
											<input type="hidden" name="email"   value="<?= $row['email'] ?>">
											<input type="hidden" name="tanggal" value="<?= $co['tanggal'] ?>">
											<td>
												<button type="submit" class="btn btn-primary">Konfirmasi Pembayaran &raquo;</a>
											</td>
										</form>
									</tr>
								</table>
							</div>
						</div>
				<?php
				} }
				if($getselect->buy_history($connect)->num_rows == 0){
					echo '
						<div class="biodata">
							<span class="title-biodata left"><i>No Product</i></span>
							<div class="full-float menu-biodata">
								<i>Tidak ada Riwayat Pembelian</i>
							</div>
						</div>
					';
				}
			?>
		</div>
	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>