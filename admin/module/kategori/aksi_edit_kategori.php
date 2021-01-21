<?php  
	include "../lib/koneksi.php";
	include "../lib/config.php";

	$id=$_POST['id_kategori'];
	$nama=trim($_POST['nama_kategori']);
	

	if ($nama=="") {
		
		echo "<script> alert('Data Harus Diisi'); window.location = '$admin_url'+'adminweb.php?module=edit_kategori&id_kategori=$id';</script>";
	}else{
		$kueri = mysqli_query($koneksi,"UPDATE tbl_kategori SET nama_kategori='$nama'WHERE id_kategori='$id'");
		if ($kueri) {
			echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";
		}else {
			echo "<script> alert('gagal'); window.location = '$admin_url'+'adminweb.php?module=edit_kategori&id_kategori=$id';</script>";
		}
	}
	
?>