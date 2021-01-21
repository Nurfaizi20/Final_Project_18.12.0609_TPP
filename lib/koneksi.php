<?php

//$server ="12.0.0.1";
$username = "root";
$password = "";
$database = "breezy-fix";

//$koneksi = mysqli_connect("localhost", "root","","ecom2020");
//if (!$koneksi) {
//	die('Gagal terhubung ke MySQLi : '.mysqli_connect_error());
//}

$koneksi = mysqli_connect("localhost",$username,$password,$database);

if (mysqli_connect_errno()) {
echo "Gagal Untuk Connect Mysql : ".mysqli_connect_error();
	exit();
}
 //$koneksi= mysqli_connect($server,$username,$password) or die ("koneksi gagal");
   //mysqli_select_db($koneksi,$database) or die("database tidak bisa dibuka");
?>
