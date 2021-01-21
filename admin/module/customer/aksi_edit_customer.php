<?php  
	include "../lib/koneksi.php";
	include "../lib/config.php";

	$id=$_GET['id_user'];
	$status=$_GET['status'];
	
	if ($status == "aktif") {
		# code...
		$kueri = mysqli_query($koneksi,"UPDATE tbl_user SET status='non-aktif' WHERE id_user='$id'");
		if ($kueri) {
			echo "<script>window.location = '$admin_url'+'adminweb.php?module=customer';</script>";
		}else {
			echo "<script> window.location = '$admin_url'+'adminweb.php?module=customer';</script>";
		}
	}elseif ($status=="non-aktif") {
		# code...
		$kueri = mysqli_query($koneksi,"UPDATE tbl_user SET status='aktif' WHERE id_user='$id'");
		if ($kueri) {
			echo "<script> window.location = '$admin_url'+'adminweb.php?module=customer';</script>";
		}else {
			echo "<script>  window.location = '$admin_url'+'adminweb.php?module=customer';</script>";
		}
	}
		
	
?>