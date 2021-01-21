<?php
include "../lib/koneksi.php";
$username = $_POST['username'];
$pass = $_POST['password'];

if (!ctype_alnum($username) OR !ctype_alnum($pass)) {
	# code...
	echo "<center> Login Gagal";
	echo "<a href='indexlogin.php'><b> ulangi </b></a></center>";
} else{
	$login = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE  username='$username' AND password ='$pass' AND status = 'aktif'");
	$ketemu = mysqli_num_rows($login);
	$r = mysqli_fetch_array($login);

	if ($ketemu > 0) {
		# code...
		session_start();
		$_SESSION['iduser'] = $r['id_user'];
		$_SESSION['namauser'] = $r['username'];
		$_SESSION['passuser'] = $r['password'];
		header('location:../index.php?page=home');
	} else {
		echo "login gagal";
		echo "<a href='../index.php?page=login'><b>ulangi lagi</b></a>";
	}
}
?>