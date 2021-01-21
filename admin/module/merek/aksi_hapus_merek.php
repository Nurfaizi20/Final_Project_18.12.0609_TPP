<?php  
	include "../../../lib/koneksi.php";
	include "../../../lib/config.php";
	$id_merek=$_GET['id_merek'];
	$kueri = mysqli_query($koneksi,"DELETE FROM tbl_merek WHERE id_merek='$id_merek'");

	if ($kueri) {
		echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=merek';</script>";
		# code...
	}else{
		echo "<script> alert('$id_merek'); window.location = '$admin_url'+'adminweb.php?module=merek';</script>";
	}



	
?>