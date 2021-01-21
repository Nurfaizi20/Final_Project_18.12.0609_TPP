<?php  
	include "../lib/koneksi.php";
	include "../lib/config.php";

	$nama_files = $_FILES['gambar']['name'];
	$ukuran_files = $_FILES['gambar']['size'];
	$tipe_files = $_FILES['gambar']['type'];
	$tmp_files = $_FILES['gambar']['tmp_name'];

	$id_produk = $_POST['id_produk'];
	$produk = trim($_POST['produk']);
	$kategori = $_POST['kategori'];
	$merek = trim($_POST['merek']);
	$deskripsi = $_POST['deskripsi'];
	$harga = trim($_POST['harga']);
	$slide = $_POST['slide'];
	$gambar = $_POST['gambar'];
	$qty = $_POST['qty'];

	$path="upload/".$nama_files;

	if ($produk=="") {
		echo "<script> alert('Produk Harus Diisi'); window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk=$id_produk';</script>";
	}elseif ($deskripsi=="") {
		echo "<script> alert('Deskripsi Harus Diisi'); window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk=$id_produk';</script>";
	}elseif ($harga=="") {
		echo "<script> alert('Harga Harus Diisi'); window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk=$id_produk';</script>";
	}elseif (!is_numeric($harga)) {
		echo "<script> alert('Harus Angka/Numeric'); window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk=$id_produk';</script>";
	}
	
	elseif ($nama_files) {
		# code...
		if ($tipe_files=="image/jpeg" || $tipe_files=="image/png") {
			# code...
			if ($ukuran_files <=1000000) {
				# code...
				
				if (move_uploaded_file($tmp_files, $path)) {
					# code...
					$simpan= mysqli_query($koneksi,"UPDATE tbl_produk SET id_kategori='$kategori',id_merek='$merek',nama_produk='$produk',deskripsi='$deskripsi',harga='$harga',gambar='$nama_files',slide='$slide',qty='$qty' WHERE id_produk='$id_produk' ");
					if ($simpan) {
						echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
						# code...
					}else{
						echo "<script> alert('gagal'); window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk=$id_produk';</script>";
					}
				}
			}
		}

	}else{
		$simpan= mysqli_query($koneksi,"UPDATE tbl_produk SET id_kategori='$kategori',id_merek='$merek',nama_produk='$produk',deskripsi='$deskripsi',harga='$harga',gambar='$gambar',slide='$slide',qty='$qty' WHERE id_produk='$id_produk' ");
		if ($simpan) {
			echo "<script> alert('berhasil'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
			# code...
		}else{
			echo "<script> alert('gagal'); window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk=$id_produk';</script>";
		}

	}
	
	
	
?>