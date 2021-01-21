 <?php  
	include "../lib/koneksi.php";
	include "../lib/config.php";
	$idMerek=$_GET['id_merek'];
	$queryEdit= mysqli_query($koneksi, "SELECT * FROM tbl_merek WHERE id_merek='$idMerek'");

	$hasil=mysqli_fetch_array($queryEdit);
	$id=$hasil['id_merek'];
	$nama=$hasil['nama_merek'];
	
?>
  <div class="content-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="adminweb.php?module=aksi_edit_merek" method="post">
                                    	<input type="hidden" name="id_merek" value="<?php echo $id; ?>">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Nama Merek <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                               <input type="text" class="form-control" name="nama_merek" value="<?php echo $nama; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                               <a  href="adminweb.php?module=merek">  
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
