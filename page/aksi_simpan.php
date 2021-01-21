<?php
include "./lib/config.php";
include "./lib/koneksi.php";

if (isset($_POST['profil'])) {
    $user = ($_POST['user']);
    $nama_files = $_FILES['foto']['name'];
    $ukuran_files = $_FILES['foto']['size'];
    $tipe_files = $_FILES['foto']['type'];
    $tmp_files = $_FILES['foto']['tmp_name'];

    $username = ($_POST['username']);
    $foto = ($_POST['foto']);
    $nama = ($_POST['nama']);
    $password = ($_POST['password']);
    $nomor = ($_POST['nomor']);
    $alamat = ($_POST['alamat']);

    $path="img/".$nama_files;
    if ($tipe_files=="image/jpeg" || $tipe_files=="image/png") {
            # code...
            if ($ukuran_files <=1000000) {
                # code...
                
                if (move_uploaded_file($tmp_files, $path)) {
                    # code...
                    $simpan= mysqli_query($koneksi,"UPDATE tbl_user SET username ='$username', foto ='$nama_files', password ='$password',nama ='$nama',nomor ='$nomor',alamat ='$alamat' WHERE id_user ='$user'");
                  
                    if ($simpan) {
                        echo "<script> alert('berhasil'); window.location = './index.php?page=profile';</script>";
                        # code...
                    }else{
                        echo "<script> alert('gagal'); window.location = './index.php?page=profile';</script>";
                    }
                }
            }
        }
        else {
         $simpan= mysqli_query($koneksi,"UPDATE tbl_user SET username ='$username', foto ='$foto', password ='$password',nama ='$nama',nomor ='$nomor',alamat ='$alamat' WHERE id_user ='$user'");
                  
                    if ($simpan) {
                        echo "<script> alert('berhasil'); window.location = './index.php?page=profile';</script>";
                        # code...
                    }else{
                        echo "<script> alert('gagal'); window.location = './index.php?page=profile';</script>";
                    }  
        }

   
    

  
}
?>
