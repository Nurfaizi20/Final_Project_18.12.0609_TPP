<?php  
	include "../lib/koneksi.php";
	include "../lib/config.php";

	$id=$_POST['id_biaya'];
	$daerah=trim($_POST['daerah']);
	$biaya=trim($_POST['biaya']);
	

	if ($daerah=="") {
		
		echo "<script> alert('Data Harus Diisi'); window.location = '$admin_url'+'adminweb.php?module=edit_biaya&id_biaya=$id';</script>";
	}else{
		$kueri = mysqli_query($koneksi,"UPDATE tbl_biaya_kirim SET daerah='$daerah',biaya='$biaya' WHERE id_biaya_kirim='$id'");
		if ($kueri) {
			echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=biaya';</script>";
		}else {
			echo "<script> alert('gagal'); window.location = '$admin_url'+'adminweb.php?module=edit_biaya&id_biaya=$id';</script>";
		}
	}
	
?>