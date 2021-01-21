<?php  
	include "../../../lib/koneksi.php";
	include "../../../lib/config.php";
	$id_biaya=$_GET['id_biaya'];
	$kueri = mysqli_query($koneksi,"DELETE FROM tbl_biaya_kirim WHERE id_biaya_kirim='$id_biaya'");

	if ($kueri) {
		echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=biaya';</script>";
		# code...
	}else{
		echo "<script> alert('$id_kategori'); window.location = '$admin_url'+'adminweb.php?module=biaya';</script>";
	}

	
?>