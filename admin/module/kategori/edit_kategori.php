 <?php  
	include "../lib/koneksi.php";
	include "../lib/config.php";
	$idKategori=$_GET['id_kategori'];
	$queryEdit= mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori='$idKategori'");

	$hasil=mysqli_fetch_array($queryEdit);
	$id=$hasil['id_kategori'];
	$nama=$hasil['nama_kategori'];
	
?>
  <div class="content-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="adminweb.php?module=aksi_edit_kategori" method="post">
                                    	<input type="hidden" name="id_kategori" value="<?php echo $id; ?>">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Nama Kategori <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                               <input type="text" class="form-control" name="nama_kategori" value="<?php echo $nama; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                               <a  href="adminweb.php?module=kategori">  
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
