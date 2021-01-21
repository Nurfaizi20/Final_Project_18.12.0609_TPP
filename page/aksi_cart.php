<?php
session_start();
include "../lib/koneksi.php";
$sid = session_id();
$idpro = $_GET['idpro'];



if (isset($_GET['minus'])) {

    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_cart WHERE id_produk ='$idpro' AND id_session = '$sid' ");
    $to = mysqli_fetch_assoc($sql);
    $jml = $to['jumlah'];
    if ($jml <= 1) {
        mysqli_query($koneksi, "DELETE FROM tbl_cart WHERE id_produk ='$idpro' AND id_session = '$sid'  ");
    } else {
        mysqli_query($koneksi, "UPDATE tbl_cart SET jumlah = jumlah - 1 WHERE id_produk ='$idpro' AND id_session = '$sid'  ");
    }
    header("Location: ../index.php?page=cart");
} else if (isset($_GET['delete'])) {
    mysqli_query($koneksi, "DELETE FROM tbl_cart WHERE id_produk ='$idpro' AND id_session = '$sid'  ");
    header("Location: ../index.php?page=cart");
} else {
    $harga = $_GET['harga'];
    $jumlah = $_POST['jumlah'];
    $id = $_POST['idpro'];

    $que = mysqli_query($koneksi, "SELECT harga FROM tbl_produk WHERE id_produk ='$id' ");
    $to = mysqli_fetch_assoc($que);
    $har = $to['harga'];
    $tot = $har * $jumlah;

    $sql = mysqli_query($koneksi, "SELECT id_produk FROM tbl_cart WHERE id_produk ='$id' AND id_session = '$sid' ");
    $ketemu = mysqli_num_rows($sql);

    if (empty($ketemu)) {
        mysqli_query($koneksi, "INSERT INTO tbl_cart (id_produk, jumlah, harga, id_session) VALUES ($id,$jumlah,'$tot','$sid')");
       
    } else {
        mysqli_query($koneksi, "UPDATE tbl_cart SET jumlah = jumlah + 1, harga = harga + $har WHERE id_produk ='$id' AND id_session = '$sid'  ");
        echo "<script> alert ('disini');</script>";
        header("Location: ../index.php?page=cart");
    }
    header("Location: ./index.php?page=cart");
}
?>





