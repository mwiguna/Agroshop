<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Pesan</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		include 'nav.php';
		include 'profile_session.php';
	?>
	
	<div class="main u-lay">
		<span class="title-profile">Riwayat Pembelian</span>
		<?php include 'profile_menu.php'; ?>
		<div class="profile2">
			<div class="biodata">
				<span class="title-biodata left"><i>No Subject</i></span>
				<div class="full-float menu-biodata">
					<i>Tidak Ada Pesan Masuk</i>
				</div>
			</div>
		</div>
	</div>

	<?php
		include 'footer.php';
	?>

</body>
</html>