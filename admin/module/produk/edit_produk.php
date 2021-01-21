 <?php  
	include "../lib/koneksi.php";
	include "../lib/config.php";
	
    $idProduk=$_GET['id_produk'];
    $kueri = mysqli_query($koneksi,"SELECT * FROM tbl_produk WHERE id_produk='$idProduk'");
    $hasil = mysqli_fetch_array($kueri);
    
    $id = $hasil['id_produk'];
    $me =$hasil['id_merek'];
    $gori = $hasil['id_kategori'];
    $nama = $hasil['nama_produk'];
    $deskripsi = $hasil['deskripsi'];
    $harga = $hasil['harga'];
    $gambar = $hasil['gambar'];
    $qty = $hasil['qty'];
    $slide = $hasil['slide'];
    

    $merek= mysqli_query($koneksi, "SELECT * FROM tbl_merek WHERE id_merek !='$me'");
    $kategori= mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori !='$gori'");
	
?>
  <div class="content-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="adminweb.php?module=aksi_edit_produk" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <input type="hidden" class="form-control form-control-sm" name="id_produk" value="<?php echo $id ?>">
                                            <label class="col-lg-4 col-form-label" for="val-username">Nama Produk <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control form-control-sm" name="produk" value="<?php echo $nama; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Merek <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control form-control-sm" name="merek" required>
                                                    <option  disabled selected>Pilih Merek</option>
                                                    <?php
                                                    $mer= mysqli_query($koneksi, "SELECT * FROM tbl_merek WHERE id_merek='$me'");
                                                    $i = mysqli_fetch_array($mer);
                                                    ?>
                                                    <option  value="<?php echo $i['id_merek']; ?>" selected><?php echo $i['nama_merek']; ?></option>
                                                    <?php while ($a=mysqli_fetch_array($merek)) {
                                                      ?>
                                                      <option value="<?php echo $a['id_merek']; ?>"><?php echo $a['nama_merek'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Kategori <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control form-control-sm" name="kategori" required>
                                                    <option  disabled selected>Pilih Kategori</option>
                                                    <?php
                                                    $kat= mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori='$gori'");
                                                    $isi = mysqli_fetch_array($kat);
                                                    ?>
                                                    <option  value="<?php echo $isi['id_kategori']; ?>" selected><?php echo $isi['nama_kategori']; ?></option>
                                                    <?php while ($b=mysqli_fetch_array($kategori)) {
                                                      ?>
                                                    <option value="<?php echo $b['id_kategori']; ?>"><?php echo $b['nama_kategori'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Harga <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                               <input type="text" class="form-control form-control-sm" name="harga" value="<?php echo $harga; ?>">  
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Gambar <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <img src="upload/<?php echo $gambar;?>" alt="noImage" width="50" >
                                                <input type="file" class="form-control form-control-sm" name="gambar" >
                                                <input type="hidden" class="form-control form-control-sm" name="gambar" value="<?php echo $gambar;?>">
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Jumlah <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="qty" value="<?php echo $qty; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Deskripsi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-suggestions" name="deskripsi" rows="5" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Slide <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="slide" value="<?php echo $slide; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                               <a  href="adminweb.php?module=produk">  
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