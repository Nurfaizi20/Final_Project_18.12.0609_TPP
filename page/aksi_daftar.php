<?php 
include "./lib/koneksi.php";

   $username = $_POST['username'];
   $password = $_POST['password'];
   $nama = $_POST['nama'];
   $nomor = $_POST['nomor'];
   $alamat = $_POST['alamat'];

	if ($username == "") {
		echo "<script> alert('Username harus diisi'); window.location = './index.php?page=daftar';</script>";
	}elseif ($password=="") {
		echo "<script> alert('Password harus diisi'); window.location = './index.php?page=daftar';</script>";
	}elseif ($nama=="") {
		echo "<script> alert('Nama harus diisi'); window.location = './index.php?page=daftar';</script>";
	}elseif ($nomor=="") {
    echo "<script> alert('Nomor harus diisi'); window.location = './index.php?page=daftar';</script>";
  }elseif ($alamat=="") {
    echo "<script> alert('Alamat harus diisi'); window.location = './index.php?page=daftar';</script>";
  }
	
	else{
       $querrySimpan = mysqli_query($koneksi,"INSERT INTO tbl_user (username,password,nama,nomor,alamat,level,status) VALUES ('$username','$password','$nama','$nomor','$alamat','user','aktif')");
    if ($querrySimpan) {
        echo "<script> alert('berhasil'); window.location = './index.php?page=login';</script>";
    }else{
        echo "<script> alert ('gagal');  window.location = './index.php?page=daftar';</script>";
    }
  }


?>
