	<?php
include "../lib/koneksi.php";
$username = $_POST['username'];
$pass = $_POST['password'];

if (!ctype_alnum($username) OR !ctype_alnum($pass)) {
	# code...
	echo "<center> Login Gagal";
	echo "<a href='index.php'><b> ulangi </b></a></center>";
} else{
	$login = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE  username='$username' AND password ='$pass'");
	$ketemu = mysqli_num_rows($login);
	$r = mysqli_fetch_array($login);

	if ($ketemu > 0) {
		# code...
		session_start();
		$_SESSION['namauser'] = $r['username'];
		$_SESSION['passuser'] = $r['password'];
		$_SESSION['foto'] = $r['foto'];
		header('location:adminweb.php?module=home');
	} else {
		echo "login gagal";
		echo "<a href='index.php'><b>ulangi lagi</b></a>";
	}
}
?>