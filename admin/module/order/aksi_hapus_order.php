<?php  
	include "../../../lib/koneksi.php";
	include "../../../lib/config.php";
	$id_order=$_GET['id_order'];
	$kueri = mysqli_query($koneksi,"DELETE FROM tbl_order WHERE id_order='$id_order'");

	if ($kueri) {
		echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=order';</script>";
		# code...
	}else{
		echo "<script> alert('$id_order'); window.location = '$admin_url'+'adminweb.php?module=order';</script>";
	}



	
?>