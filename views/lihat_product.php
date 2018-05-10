<!DOCTYPE html>
<html>
<head>
	<title>Lihat Produk</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'nav.php';
		include 'admin_session.php';
		include '../core/view_product.php';
	?>
	
	<div class="main">
		<span class="title-product-buy">Lihat Produk Yang Sudah Masuk</span>
		<?php
			while($row = $result->fetch_assoc()){
		?>
		<div class="full-float admin-kategori konfirmasi-penjualan">
			<div class="confirm-admin">
				<table border="0">
					<tr>
						<td class="ed-1a">Penjual</td>
						<td class="ed-2a"> : </td>
						<td class="ed-3a"> <?= $row['penjual'] ?> </td>
					</tr>
					<tr>
						<td>Nama Produk</td>
						<td class="ed-2a"> : </td>
						<td> <?= $row['nama'] ?> </td>
					</tr>
					<tr>
						<td>Harga</td>
						<td class="ed-2a"> : </td> 
						<td> Rp. <span class="tnr"><?= $row['harga'] ?></span>/<?= $row['hargaper'] ?> </td>
					</tr>
					<tr>
						<td>Kategori</td> 
						<td class="ed-2a"> : </td>
						<td> <?= $row['kategori'] ?> </td>
					</tr>
					<tr>
						<td>Olahan</td>
						<td class="ed-2a"> : </td>
						<td> <?= $row['olahan'] ?> </td>
					</tr>
					<tr>
						<td colspan="2"><a href="edit_product.php?nama=<?= $row['nama'] ?>" class="btn btn-success btn-acpro">Edit</a></td>
						<td>
							<form action="../core/delete_product.php" method="post">
								<input  name="nama" type="hidden" value="<?= $row['nama'] ?>">
								<button type="submit" href="delete_product.php" class="btn btn-danger btn-acpro2" onclick="return confirm('Anda yakin ingin menghapus product ini?')">Hapus</button>
							</form>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php } ?>
	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>