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
	?>
	
	<div class="main u-lay">
		<span class="title-profile">Halaman Profile</span>
		<?php include 'profile_menu.php'; ?>
		<div class="profile2">
			<div class="biodata">
				<span class="title-biodata">Biodata</span>
				<div class="full-float menu-biodata">
					<table border="0">
						<tr>
							<td>Nama</td>
							<td class="double-point">:</td>
							<td><?= $row['nama'] ?></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td class="double-point">:</td>
							<td><?= $row['email'] ?></td>
						</tr>
						<tr>
							<td>No. Telp</td>
							<td class="double-point">:</td>
							<td class="tnr"><?= $row['nohp'] ?></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td class="double-point">:</td>
							<td class="tnr"><?= $row['tgllahir'] ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td class="double-point">:</td>
							<td class="tnr"><?= $row['alamat'] ?></td>
						</tr>
						<tr>
							<td>Kota</td>
							<td class="double-point">:</td>
							<td><?= $row['kota'] ?></td>
						</tr>
						<tr>
							<td>Negara</td>
							<td class="double-point">:</td>
							<td><?= $row['negara'] ?></td>
						</tr>
						<tr>
							<td>Kode Pos</td>
							<td class="double-point">:</td>
							<td class="tnr"><?= $row['kodepos'] ?></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td><a href="edit_biodata.php" class="btn btn-primary">Edit »</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>