<?php  

	include "../lib/config.php";
    include "../lib/koneksi.php";
	$nama_merek = trim($_POST['nama_merek']) ;

	if ($nama_merek == "") {
		echo "<script> alert('Data Harus Diisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_merek';</script>";
	}
	else{
		$querrySimpan = mysqli_query($koneksi,"INSERT INTO tbl_merek (nama_merek) VALUES ('$nama_merek')");
		if ($querrySimpan) {
			# code...
			echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=merek';</script>";	
		}
		else{
			echo "<script> alert('gagal'); window.location = '$admin_url'+'adminweb.php?module=tambah_merek';</script>";
			
		}
	}
?>
