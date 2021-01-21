<?php
session_start();
include "../lib/koneksi.php";

$sid = session_id();
$iduser = $_SESSION['iduser'];
$sql_member = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE id_user='$iduser' ");
$u = mysqli_fetch_array($sql_member);
$nama = $u['nama'];


$tujuan =trim($_POST['alamat']);
$catatan =$_POST['catatan'];
$total =$_POST['total'];
$id_biaya =$_POST['id_biaya'];
if ($tujuan=="") {
	echo "<script> alert('alamat harus diisi');</script>";
}else{
	// $querrySimpan = mysqli_query($koneksi,"INSERT INTO tbl_order (id_user,catatan_order,total_bayar,tujuan) VALUES ('$iduser','$password','$catatan','$total','$alamat')");

	$querrySimpan = mysqli_query($koneksi,"INSERT INTO `tbl_order` (`id_order`, `status_order`, `tgl_order`, `jam_order`, `id_user`, `catatan_order`, `tanggal_kirim`, `status_bayar`, `total_bayar`, `tujuan`,`id_biaya_kirim`) VALUES (NULL, 'Order', current_timestamp(), current_timestamp(), '$iduser', '$catatan', NULL, 'belum dibayar', '$total', '$tujuan', '$id_biaya');");

	
	//ambil data order
	if ($querrySimpan) {
		# code...
		$query_last_order = mysqli_query($koneksi, "SELECT * FROM tbl_order WHERE id_user = '$iduser' ORDER BY id_order DESC LIMIT 1");
		$last = mysqli_fetch_array($query_last_order);
		$id_order = $last['id_order'];

		//ambil data keranjang
		$query_keranjang = mysqli_query($koneksi, "SELECT * FROM tbl_cart WHERE id_session = '$sid'");

		while ($k = mysqli_fetch_array($query_keranjang)) {
		    $id_produk = $k['id_produk'];
		    $qty_produk = $k['jumlah'];
		    $harga = $k['harga'];
		    $total_harga = $qty_produk  * $harga;

		    $query_masuk = mysqli_query($koneksi, "INSERT INTO tbl_detail_order(id_order,id_produk,qty,total_harga) 
		    VALUES ('$id_order','$id_produk','$qty_produk','$harga')");
		}

		
			mysqli_query($koneksi,"DELETE FROM tbl_cart WHERE id_session='$sid'");
			header('location:../index.php?page=order');
		
	}
	else{
		echo "login gagal";
	}
	

}


?>