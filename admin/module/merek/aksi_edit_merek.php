<?php  
	include "../lib/koneksi.php";
	include "../lib/config.php";

	$id=$_POST['id_merek'];
	$nama=trim($_POST['nama_merek']);
	

	if ($nama=="") {
		
		echo "<script> alert('Data Harus Diisi'); window.location = '$admin_url'+'adminweb.php?module=edit_merek&id_merek=$id';</script>";
	}else{
		$kueri = mysqli_query($koneksi,"UPDATE tbl_merek SET nama_merek='$nama'WHERE id_merek='$id'");
		if ($kueri) {
			echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=merek';</script>";
		}else {
			echo "<script> alert('gagal'); window.location = '$admin_url'+'adminweb.php?module=edit_merek&id_merek=$id';</script>";
		}
	}
	
?>