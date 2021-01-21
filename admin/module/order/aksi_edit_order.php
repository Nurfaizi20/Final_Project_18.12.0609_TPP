<?php  
	include "../../../lib/koneksi.php";
	include "../../../lib/config.php";

	$id_order=$_GET['id_order'];
	
	

		$kueri = mysqli_query($koneksi,"UPDATE tbl_order SET status_order='selesai',tanggal_kirim=current_timestamp() WHERE id_order='$id_order'");
		if ($kueri) {
			# code...
			echo "<script>window.location = '$admin_url'+'adminweb.php?module=order';</script>";
		}
		
		
		
	
	
?>