<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'nav.php';
		include 'admin_session.php';
		include '../core/view_confirm_success.php';
	?>
	
	<div class="main">
		<span class="title-product-buy">Halaman Admin</span>
		<div class="full-float admin-kategori add-product">
			<span class="info-all title-kategori-admin">Form Tambah Produk <span class="glyphicon glyphicon-check"></span>
			<form action="../core/add_product.php" method="post">
				<input type="text" name="penjual"  placeholder="Penjual">
				<input type="text" name="nama"     placeholder="Nama">
				<input type="text" name="harga"    placeholder="Harga">
				<input type="text" name="kategori" placeholder="Kategori">
				<input type="text" name="hargaper" placeholder="Harga Per">
				<input type="text" name="olahan"   placeholder="Hasil Olahan">
				<input type="text" name="foto1"    placeholder="Foto 1">
				<input type="text" name="foto2"    placeholder="Foto 2">
				<input type="text" name="foto3"    placeholder="Foto 3">
				<input type="text" name="foto4"    placeholder="Foto 4">
				<input type="submit" value="Kirim" onclick="return confirm('Apakah anda yakin ingin menambahkan produk ini?')">
			</form>
			<a href="lihat_product.php"><div class="btn-buy btn-product-admin">Lihat Produk Yang Sudah Masuk <span class="glyphicon glyphicon-pushpin"></span></div></a>
		</div>
		<div class="full-float admin-kategori konfirmasi-penjualan">
			<span class="info-all title-kategori-admin">Konfirmasi Penjualan <span class="glyphicon glyphicon-info-sign"></span></span>
			<?php
				 while($row = $result->fetch_assoc()){
				 	if($row['status'] == 1){
				 		echo '
						<div class="confirm-admin">
							<table border="0">
								<tr>
									<td>Pembeli</td>
									<td> &nbsp;:&nbsp; </td>
									<td> '.$row['nama'].' </td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td> &nbsp;:&nbsp; </td>
									<td> '.$row['email'].' </td>
								</tr>
								<tr>
									<td>Nama Produk</td>
									<td> &nbsp;:&nbsp; </td>
									<td> '.$row['produk'].' </td>
								</tr>
								<tr>
									<td>Harga</td>
									<td> &nbsp;:&nbsp; </td> 
									<td> Rp. <span class="tnr">'.$row['harga'].'</span>,- </td>
								</tr>
								<tr>
									<td>Tanggal</td> 
									<td> &nbsp;:&nbsp; </td>
									<td> <span class="tnr">'.$row['tanggal'].'</span> </td>
								</tr>
								<tr>
									<td>Rekening</td> 
									<td> &nbsp;:&nbsp; </td>
									<td> '.$row['namarek'].' </td>
								</tr>
								<tr>
									<td>No. Rek</td> 
									<td> &nbsp;:&nbsp; </td>
									<td> <span class="tnr">'.$row['norek'].'</span> </td>
								</tr>
								<tr><td colspan="3">&nbsp;</td></tr>
								<tr>
									<td colspan="3"><i>(Pembelian Sudah Dikonfirmasi)</i></td>
								</table>
							</div>
								'; 
					} else {
					 	echo '
							<div class="confirm-admin">
								<table border="0">
									<tr>
										<td>Pembeli</td>
										<td> &nbsp;:&nbsp; </td>
										<td> '.$row['nama'].' </td>
									</tr>
									<tr>
										<td>E-mail</td>
										<td> &nbsp;:&nbsp; </td>
										<td> '.$row['email'].' </td>
									</tr>
									<tr>
										<td>Nama Produk</td>
										<td> &nbsp;:&nbsp; </td>
										<td> '.$row['produk'].' </td>
									</tr>
									<tr>
										<td>Harga</td>
										<td> &nbsp;:&nbsp; </td> 
										<td> Rp. <span class="tnr">'.$row['harga'].'</span>,- </td>
									</tr>
									<tr>
										<td>Tanggal</td> 
										<td> &nbsp;:&nbsp; </td>
										<td> <span class="tnr">'.$row['tanggal'].'</span> </td>
									</tr>
									<tr>
										<td>Rekening</td> 
										<td> &nbsp;:&nbsp; </td>
										<td> '.$row['namarek'].' </td>
									</tr>
									<tr>
										<td>No. Rek</td> 
										<td> &nbsp;:&nbsp; </td>
										<td> <span class="tnr">'.$row['norek'].'</span> </td>
									</tr>
									'; ?>

									<tr>
										<td class="admin-tab" colspan="2"> 
											<form action="../core/confirm_buy_admin.php" method="post">
												<input type="hidden" name="email"   value="<?= $row['email']   ?>">
												<input type="hidden" name="tanggal" value="<?= $row['tanggal'] ?>">
												<button type="submit" class="btn btn-success">Konfirmasi</button>
											</form>
										</td>
										<td class="admin-tab" colspan="2"> 
											<form action="../core/reject_buy_admin.php" method="post">
												<input type="hidden" name="email"   value="<?= $row['email']   ?>">
												<input type="hidden" name="tanggal" value="<?= $row['tanggal'] ?>">
												<button type="submit" class="btn btn-danger">Tolak</button>
											</form>
										</td>
									</tr>
								</table>
							</div>
				<?php } } ?>
		</div>
	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>