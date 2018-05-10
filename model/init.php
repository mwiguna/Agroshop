<?php

class insert {
	public $nama;
	public $email;
	public $status;
	public $password;

	public $nohp;
	public $kota;
	public $alamat;
	public $negara;
	public $kodepos;
	public $produk;
	public $jumlah;
	public $harga;
	public $tanggal;

	public function register_user($connect){
		$query    = "INSERT INTO biodata_user (nama, email, status, password) VALUES (?, ?, ?, ?)";
		$eks      = $connect->prepare($query);
		
		$eks->bind_param("ssss", $this->nama, $this->email, $this->status, $this->password);
		$eks->execute();

	}

	public function add_product($connect){
		$query    = "INSERT INTO produk (nama, penjual, harga, hargaper, kategori, olahan, foto1, foto2, foto3, foto4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$eks      = $connect->prepare($query);
		
		$eks->bind_param("ssisssssss", $this->nama, $this->penjual, $this->harga, $this->hargaper, $this->kategori, $this->olahan, $this->foto1, $this->foto2, $this->foto3, $this->foto4);
		$eks->execute();

	}

	public function buy_product($connect){
		$query    = "INSERT INTO pembelian (nama, email, nohp, kota, alamat, negara, kodepos, produk, jumlah, harga, tanggal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$eks      = $connect->prepare($query);

		$eks->bind_param("ssssssssiis", $this->nama, $this->email, $this->nohp, $this->kota, $this->alamat, $this->negara, $this->kodepos, $this->produk, $this->jumlah, $this->harga, $this->tanggal);
		$eks->execute();
	}
}

$getinsert = new insert;

class select {
	public $email;
	public $password;
	public $session;
	public $olahan;
	public $kategori;
	public $price;
	public $tanggal;
	public $status;
	public $search;

	public function login($connect){
		global $row;
		$query  = "SELECT * FROM biodata_user WHERE email = '$this->email'";
		$result = $connect->query($query);
		$row    = $result->fetch_assoc();

		return $row;
	}

	public function view_biodata($connect){
		global $row;
		$query  = "SELECT * FROM biodata_user WHERE nama = '$this->session'";
		$result = $connect->query($query);
		$row    = $result->fetch_assoc();

		return $row;
	}

	public function view_all_product($connect){
		global $result;
		$query  = "SELECT * FROM produk";
		$result = $connect->query($query);

		return $result;
	}

	public function product_category($connect){
		global $result;
		$query  = "SELECT * FROM produk WHERE olahan like '%$this->olahan%'";
		$result = $connect->query($query);

		return $result;
	}

	public function edit_product($connect){
		global $row;
		$query  = "SELECT * FROM produk WHERE nama = '$this->nama'";
		$result = $connect->query($query);
		$row    = $result->fetch_assoc();

		return $row;
	}

	public function view_product($connect){
		global $result;
		if(empty($_GET['product']) && empty($_GET['category']) && empty($_GET['price']) && empty($_GET['search'])) $query  = "SELECT * FROM produk";
		else if(isset($_GET['search']))   $query = "SELECT * FROM produk WHERE nama     like '%$this->search%' OR kategori like '%$this->search%' OR olahan like '%$this->search%'";
		else if(isset($_GET['product']))  $query = "SELECT * FROM produk WHERE olahan   like '%$this->olahan%'";
		else if(isset($_GET['category'])) $query = "SELECT * FROM produk WHERE kategori like '%$this->kategori%'";
		else if(isset($_GET['price']))	{
			if($_GET['price'] == 20000){
			  $query = "SELECT * FROM produk WHERE harga <= '$this->harga'";
			} else if ($_GET['price'] == 50000){
			  $query = "SELECT * FROM produk WHERE harga > 20000 AND harga <= 50000";
			}
		}

		$result = $connect->query($query);
		return $result;
	}

	public function buy_product($connect){
		global $row;
		global $result;
		$query  = "SELECT * FROM produk WHERE nama = '$this->nama'";
		$result = $connect->query($query);
		$row    = $result->fetch_assoc();

		return $row;
	}

	public function buy_history($connect){
		global $result;
		$query  = "SELECT * FROM pembelian WHERE email = '$this->email' AND status = '$this->status'";
		$result = $connect->query($query);

		return $result;
	}

	public function notification_buy($connect){
		global $result;
		$query  = "SELECT * FROM pembelian WHERE email = '$this->email' AND status = '$this->status'";
		$result = $connect->query($query);

		return $result;
	}

	public function view_confirm_buy($connect){
		global $row;
		$query  = "SELECT * FROM pembelian WHERE email = '$this->email' AND tanggal = '$this->tanggal'";
		$result = $connect->query($query);
		$row    = $result->fetch_assoc();

		return $row;
	}

	public function view_confirm_success($connect){
		global $result;
		$query  = "SELECT * FROM pembelian WHERE konfirmasi = 1";
		$result = $connect->query($query);

		return $result;
	}
}

$getselect = new select;

class update {
	public $nama;
	public $email;
	public $nohp;
	public $tgllahir;
	public $alamat;
	public $kota;
	public $negara;
	public $kodepos;
	public $session;

	public $penjual;
	public $harga;
	public $hargaper;
	public $kategori;
	public $olahan;
	public $metode;
	public $bahan;
	public $keterangan;
	public $foto1;
	public $foto2;
	public $foto3;
	public $foto4;
	public $namarek;
	public $norek;
	public $tanggal;
	public $konfirmasi;
	public $status;

	public function edit_biodata($connect){
		$query = "UPDATE biodata_user SET 
			nama       = '$this->nama',
			email      = '$this->email', 
			nohp       = '$this->nohp', 
			tgllahir   = '$this->tgllahir', 
			alamat     = '$this->alamat', 
			kota       = '$this->kota', 
			negara     = '$this->negara', 
			kodepos    = '$this->kodepos'
			WHERE nama = '$this->session'";

		return $connect->query($query);
	}

	public function edit_product($connect){
		$query = "UPDATE produk SET 
			penjual    = '$this->penjual',
			nama       = '$this->nama',
			harga      = '$this->harga', 
			hargaper   = '$this->hargaper', 
			kategori   = '$this->kategori', 
			olahan     = '$this->olahan', 
			metode     = '$this->metode', 
			bahan      = '$this->bahan', 
			keterangan = '$this->keterangan',
			foto1      = '$this->foto1',
			foto2      = '$this->foto2',
			foto3      = '$this->foto3',
			foto4      = '$this->foto4'
			WHERE nama = '$this->session'";

		return $connect->query($query);
	}

	public function confirm_buy($connect){
		$query = "UPDATE pembelian SET 
			namarek     = '$this->namarek',
			norek       = '$this->norek',
			konfirmasi  = '$this->konfirmasi' 
			WHERE email = '$this->email' AND tanggal = '$this->tanggal'";

		return $connect->query($query);
	}

	public function confirm_buy_admin($connect){
		$query = "UPDATE pembelian SET 
			status 	    = '$this->status' 
			WHERE email = '$this->email' AND tanggal = '$this->tanggal'";

		return $connect->query($query);
	}

	public function reject_buy_admin($connect){
		$query = "UPDATE pembelian SET 
			konfirmasi  = '$this->konfirmasi' 
			WHERE email = '$this->email' AND tanggal = '$this->tanggal'";

		return $connect->query($query);
	}
}

$getupdate = new update();

class delete {
	public $nama;

	public function delete_product($connect){
		$query = "DELETE FROM produk WHERE nama = '$this->nama'";

		return $connect->query($query);
	}
}

$getdelete = new delete;

?>