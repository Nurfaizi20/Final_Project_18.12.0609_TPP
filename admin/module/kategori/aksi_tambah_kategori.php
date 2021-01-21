<?php  

	include "../lib/config.php";
    include "../lib/koneksi.php";
	$nama_kategori = trim($_POST['nama_kategori']) ;

	if ($nama_kategori == "") {
		echo "<script> alert('Data Harus Diisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_kategori';</script>";
	}
	else{
		$querrySimpan = mysqli_query($koneksi,"INSERT INTO tbl_kategori (nama_kategori) VALUES ('$nama_kategori')");
		if ($querrySimpan) {
			# code...
			echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";	
		}
		else{
			echo "<script> alert('gagal'); window.location = '$admin_url'+'adminweb.php?module=tambah_kategori';</script>";
			
		}
	}
?>
