<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Edit Biodata/title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'nav.php';
		include 'profile_session.php';
		include '../core/view_biodata.php';
	?>
	
	<div class="main">
		<span class="title-profile">Edit Biodata</span>
		<div class="log edit-biodata">
			<form action="../core/edit_biodata.php" method="post">
				<input type="text"  name="nama"     placeholder="Nama Lengkap"  			 value="<?= $row['nama'];     ?>" required>
				<input type="email" name="email"    placeholder="E-mail"        			 value="<?= $row['email'];    ?>" required>
				<input type="text"  name="nohp"     placeholder="No. Telp"     			     value="<?= $row['nohp'];     ?>">
				<input type="text"  name="tgllahir" placeholder="Tanggal Lahir (yyyy-mm-dd)" value="<?= $row['tgllahir']; ?>">
				<input type="text"  name="alamat"   placeholder="Alamat"       			     value="<?= $row['alamat'];   ?>">
				<input type="text"  name="kota" 	placeholder="Kota" 		 			     value="<?= $row['kota'];     ?>">
				<input type="text"  name="negara"   placeholder="Negara" 	   				 value="<?= $row['negara'];   ?>">
				<input type="text"  name="kodepos"  placeholder="Kode Pos" 	   				 value="<?= $row['kodepos'];  ?>">
				<button type="submit" class="btn btn-primary">Edit » </button>
				<a href="profile.php" class="btn btn-danger">Batal</a>
			</form>
		</div>
	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>