<?php  
	include "../../../lib/koneksi.php";
	include "../../../lib/config.php";
	$id_produk=$_GET['id_produk'];
	$kueri = mysqli_query($koneksi,"DELETE FROM tbl_produk WHERE id_produk='$id_produk'");

	if ($kueri) {
		echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
		# code...
	}else{
		echo "<script> alert('$id_produk'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
	}



	
?>