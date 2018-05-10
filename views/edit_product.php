<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Edit Produk</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		error_reporting(0);
		session_start();
		$_SESSION['nama_product'] = $_GET['nama'];

		include 'nav.php';
		include 'admin_session.php';
		include '../core/edit_product.php';
	?>
	
	<div class="main">
		<span class="title-product-buy">Edit Product</span>
		<div class="full-float admin-kategori add-product">
			<span class="info-all title-kategori-admin">Form Tambah Produk</span>
			<form action="../core/refine_product.php" method="post">
				<input type="text" name="penjual"    placeholder="Penjual" 	    value="<?= $row['penjual'] ?>">
				<input type="text" name="nama"       placeholder="Nama"		    value="<?= $row['nama'] ?>">
				<input type="text" name="harga"      placeholder="Harga" 		value="<?= $row['harga'] ?>">
				<input type="text" name="hargaper"   placeholder="Harga Per" 	value="<?= $row['hargaper'] ?>">
				<input type="text" name="kategori"   placeholder="Kategori" 	value="<?= $row['kategori'] ?>">
				<input type="text" name="olahan"     placeholder="Hasil Olahan" value="<?= $row['olahan'] ?>">
				<input type="text" name="metode"     placeholder="Metode"       value="<?= $row['metode'] ?>">
				<input type="text" name="bahan"      placeholder="Bahan"        value="<?= $row['bahan'] ?>">
				<input type="text" name="foto1"      placeholder="Foto 1" 	    value="<?= $row['foto1'] ?>">
				<input type="text" name="foto2"      placeholder="Foto 2" 	    value="<?= $row['foto2'] ?>">
				<input type="text" name="foto3"      placeholder="Foto 3" 	    value="<?= $row['foto3'] ?>">
				<input type="text" name="foto4"      placeholder="Foto 4" 	    value="<?= $row['foto4'] ?>">
				<textarea name="keterangan" class="textarea-edpro"><?php if($row['keterangan'] != ''){ echo $row['keterangan']; } else { echo "Isi Keterangan Produk"; } ?></textarea>
				<input type="submit" value="Kirim" onclick="return confirm('Apakah anda yakin ingin mengedit produk ini?')">
			</form>
		</div>
	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>