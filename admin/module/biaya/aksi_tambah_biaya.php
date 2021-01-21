<?php  

	include "../lib/config.php";
    include "../lib/koneksi.php";
	$daerah = trim($_POST['daerah']) ;
	$biaya = trim($_POST['biaya']) ;
	if ($daerah == "") {
		echo "<script> alert('Data Harus Diisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_daerah';</script>";
	}
	else{
		$querrySimpan = mysqli_query($koneksi,"INSERT INTO tbl_biaya_kirim (daerah,biaya) VALUES ('$daerah','$biaya')");
		if ($querrySimpan) {
			# code...
			echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=biaya';</script>";	
		}
		else{
			echo "<script> alert('gagal'); window.location = '$admin_url'+'adminweb.php?module=tambah_biaya';</script>";
			
		}
	}
?>
