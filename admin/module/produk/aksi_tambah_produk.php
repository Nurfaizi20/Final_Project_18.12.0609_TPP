<?php  

	include "../lib/config.php";
    include "../lib/koneksi.php";

	$nama_files = $_FILES['gambar']['name'];
	$ukuran_files = $_FILES['gambar']['size'];
	$tipe_files = $_FILES['gambar']['type'];
	$tmp_files = $_FILES['gambar']['tmp_name'];

	$produk =trim($_POST['nama_produk']) ;
	$merek = $_POST['merek'];
	$kategori = $_POST['kategori'];
	$harga = $_POST['harga'];
	$qty = $_POST['qty'];
	$deskripsi =trim($_POST['deskripsi']) ;
	$slide = $_POST['slide'];


	$path="upload/".$nama_files;
	if ($produk=="") {
		echo "<script> alert('Produk harus diisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
	}elseif ($deskripsi=="") {
		echo "<script> alert('Deskripsi harus diisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
	}elseif ($harga=="") {
		echo "<script> alert('Harga harus diisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
	}elseif (!is_numeric($harga)) {
		echo "<script> alert('Harga Harus Angka/Numeric'); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
	}
	elseif ($nama_files) {
		# code...
		if ($tipe_files=="image/jpeg" || $tipe_files=="image/png") {
		# code...
			if ($ukuran_files <=1000000) {
				# code...
				
				if (move_uploaded_file($tmp_files, $path)) {
					# code...
					$simpan= mysqli_query($koneksi,"INSERT INTO tbl_produk (`id_merek`,`id_kategori`,`nama_produk`,`deskripsi`,`harga`,`gambar`,`qty`,`slide`) VALUES ('$merek','$kategori','$produk','$deskripsi','$harga','$nama_files','$qty','$slide')");
					if ($simpan) {
						echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
						# code...
					}else{
						echo "<script> alert('gagal'); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
					}
				}
			}
		}
	}else{
		$simpan= mysqli_query($koneksi,"INSERT INTO tbl_produk (`id_merek`,`id_kategori`,`nama_produk`,`deskripsi`,`harga`,`qty`,`slide`) VALUES ('$merek','$kategori','$produk','$deskripsi','$harga','$qty','$slide')");
					if ($simpan) {
						echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
						# code...
					}else{
						echo "<script> alert('gagal'); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
					}
	}
	

	
	
?>
