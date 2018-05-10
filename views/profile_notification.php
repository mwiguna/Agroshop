<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Pemberitahuan</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'nav.php';
		include 'profile_session.php';
		include '../core/view_biodata.php';
		$_SESSION['email'] = $row['email'];
		include '../core/notification_buy.php';
	?>
	
	<div class="main u-lay">
		<span class="title-profile">Pemberitahuan</span>
		<?php include 'profile_menu.php'; ?>
		<div class="profile2">
			<?php 
				while($co = $result->fetch_assoc()){
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
										<tr><td colspan="3">&nbsp;</td></tr>
										<tr>
											<td colspan="3"><i>Pembelian ini telah diverifikasi oleh admin, proses pengiriman produk segera dilakukan. Terimakasih telah membeli produk kami, semoga anda puas dengan pelayanan kami </i>:)</td>
										</tr>
										<tr><td colspan="3">&nbsp;</td></tr>
										<tr>
											<td colspan="3"><i>Best Regards. AGROSHOP INDONESIA <span class="glyphicon glyphicon-ok-circle"></span></i></td>
										</tr>
									</table>
								</div>
							</div>
						';
				}

				if($getselect->notification_buy($connect)->num_rows == 0){
					echo '
						<div class="biodata">
							<span class="title-biodata left"><i>No Notification</i></span>
							<div class="full-float menu-biodata">
								<i>Tidak ada Pemberitahuan</i>
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