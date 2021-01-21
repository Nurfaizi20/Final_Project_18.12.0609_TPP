<?php  
	include "../../../lib/koneksi.php";
	include "../../../lib/config.php";
	$id_kategori=$_GET['id_kategori'];
	$kueri = mysqli_query($koneksi,"DELETE FROM tbl_kategori WHERE id_kategori='$id_kategori'");

	if ($kueri) {
		echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";
		# code...
	}else{
		echo "<script> alert('$id_kategori'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";
	}



	
?>