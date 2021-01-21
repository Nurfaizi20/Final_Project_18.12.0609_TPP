<?php
session_start();
include "../lib/koneksi.php";
$sid = session_id();
$idpro = $_GET['idpro'];


 if (isset($_GET['delete'])) {
    mysqli_query($koneksi, "DELETE FROM tbl_cart WHERE id_produk ='$idpro' AND id_session = '$sid'  ");
}
?>





