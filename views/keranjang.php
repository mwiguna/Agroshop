<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>Keranjang Belanja</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/biolife.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

	<?php
		error_reporting(0);
		include 'nav.php';
		include 'profile_session.php';
		include '../core/view_biodata.php';
		if(empty($_POST['nama'])){
			header("Location: product_all.php?no_product");
		}
		$_POST['tanggal'];
	?>
	
	<div class="main">

			<div class="keranjang">
				<span class="title-biodata">Keranjang Belanja</span>
				<div class="full-float keranjang-konten">
					<div class="kr-1">
						<img src="../assets/img/minyakkelapa.jpg" class="u-photo kr-photo">
					</div>
					<div class="kr-2">
						<table border="0">
							<tr>
								<td>Nama Produk</td>
								<td>&nbsp;:&nbsp;</td>
								<td><?= $_POST['nama'] ?></td>
							</tr>
							<tr>
								<td>Penjual</td>
								<td>&nbsp;:&nbsp;</td>
								<td><?= $_POST['penjual'] ?></td>
							</tr>
							<tr>
								<td>Harga</td>
								<td>&nbsp;:&nbsp;</td>
								<td>Rp. <?= $_POST['harga'] ?>/ <?= $_POST['hargaper'] ?></td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td>&nbsp;:&nbsp;</td>
								<td><?= $_POST['kategori'] ?></td>
							</tr>		
						</table>
						<div class="info-kr">
							Untuk dapat mengonfirmasikan pembelian anda, anda harus melengkapi form identitas dibawah ini. Sebelum melakukan pembelian harap
							mengecek terlebih dahulu produk yang anda pesan, bisa anda lihat keterangan pada masing-masing produk. Jika ada yang kurang jelas
							anda dapat mengirim pesan kepada kami lewat kontak yang telah disediakan.<br><br>
							
							<i><b>Peringatan : </b> Mohon untuk tidak memesan makanan langsung (yang tidak tahan lama) dengan jasa pesan antar kami jika anda berada di lokasi yang cukup jauh dari lokasi kantor kami, 
							jarak maksimal adalah sekitar 1 jam perjalanan darat (40km). Jika lokasi anda jauh, anda dapat langsung mengunjungi kantor kami untuk membeli secara langsung produk unik kami :)
							</i>
						</div>
					</div>
					<div class="full-float form-kr">
					Lengkapi Form Dibawah ini : <br><br>
						<form name="formbuy" action="../core/buy_insert.php" method="post">
							<input class="kr-text" type="text" name="jumlah"  placeholder="Jumlah Pesanan (Per <?= $_POST['hargaper'] ?>)">
							<input class="kr-text" type="text" name="nama"    placeholder="Nama Penerima">
							<input class="kr-text" type="text" name="email"   placeholder="E-mail">
							<input class="kr-text" type="text" name="nohp"    placeholder="No.Telp">
							<input class="kr-text" type="text" name="kota"    placeholder="Kota">
							<input class="kr-text" type="text" name="alamat"  placeholder="Alamat">
							<input class="kr-text" type="text" name="negara"  placeholder="Negara">
							<input class="kr-text" type="text" name="kodepos" placeholder="Kode POS">
							<input class="kr-text" type="hidden" name="tanggal" id="tanggal">
							<input class="kr-text" type="hidden" name="produk" value="<?= $_POST['nama']  ?>">
							<input class="kr-text" type="hidden" name="harga"  value="<?= $_POST['harga'] ?>">

							<button class="btn-kr-submit" type="submit">Lakukan Pembayaran &raquo;</button>
						</form>
					</div>
				</div>
			</div>

	</div>

	<?php
		include 'footer.php';
	?>

	<script>
		var time     = new Date();
		var daynow   = time.getDay();
		var monthnow = time.getMonth();
		var year     = time.getYear() + 1900;
		var day      = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
		var month    = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

		if(time.getHours() < 10){
			var hour = "0" + time.getHours();  
		} else if(time.getMinutes() < 10){
			var minute = "0" + time.getMinutes();  
		} else if(time.getSeconds() < 10){
			var second = "0" + time.getSeconds();  
		}
		var timenow  = day[daynow] + ", " + time.getDate() + " " + month[monthnow] + " " + year + " Pukul : " + hour + ":" + minute + ":" + second;	
		document.getElementById('tanggal').value = timenow;
	</script>

</body>
</html>