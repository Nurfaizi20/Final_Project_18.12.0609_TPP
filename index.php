<?php 
include "lib/koneksi.php";
if (isset($_GET['page'])) {
	if ($_GET['page'] == "login") {
		# code...
		include "page/form_login.php";
	} elseif ($_GET['page'] == "home") {
		# code...
		include "templete/header.php";
		include "page/main.php";
		include "templete/footer.php";
	} elseif ($_GET['page'] == "daftar") {
		# code...
		include "page/daftar.php";
	} elseif ($_GET['page'] == "aksi_daftar") {
		# code...
		include "page/aksi_daftar.php";
	}elseif ($_GET['page'] == "detail_produk") {
		# code...
		include "templete/header.php";
		include "page/detail_produk.php";
		include "templete/footer.php";
	}elseif ($_GET['page'] == "produk") {
		# code...
		include "templete/header.php";
		include "page/produk.php";
		include "templete/footer.php";
	}elseif ($_GET['page'] == "profile") {
		# code...
		include "templete/header.php";
		include "page/profile.php";
		include "templete/footer.php";
	}elseif ($_GET['page'] == "edit_profile") {
		# code...
		include "templete/header.php";
		include "page/edit_profile.php";
		include "templete/footer.php";
	}elseif ($_GET['page'] == "cart") {
		# code...
		include "templete/header.php";
		include "page/cart.php";
		include "templete/footer.php";

	}elseif ($_GET['page'] == "tambah_cart") {
		# code...
		
		include "page/aksi_cart.php";
		

	}elseif ($_GET['page'] == "checkout") {
		# code...
		include "templete/header.php";
		include "page/checkout.php";
		include "templete/footer.php";

	}elseif ($_GET['page'] == "order") {
		# code...
		include "templete/header.php";
		include "page/order.php";
		include "templete/footer.php";

	}elseif ($_GET['page'] == "histori_pembelian") {
		# code...
		include "templete/header.php";
		include "page/histori_pembelian.php";
		include "templete/footer.php";

	}elseif ($_GET['page'] == "aksi_simpan") {
		# code...
		
		include "page/aksi_simpan.php";
		
	}
}else {	
		include "templete/header.php";
		include "page/main.php";
		include "templete/footer.php";

}

 ?>