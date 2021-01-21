 <?php  
    include "../lib/koneksi.php";
    include "../lib/config.php";
    $merek= mysqli_query($koneksi, "SELECT * FROM tbl_merek");
    $kategori= mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
?>
  <div class="content-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="adminweb.php?module=aksi_tambah_produk" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Nama Produk <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="nama_produk">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Merek <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control form-control-sm" name="merek" required>
                                                    <option  disabled selected>Pilih Merek</option>
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
                                                <input type="text" class="form-control form-control-sm" name="harga" placeholder="Harga Produk">
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Gambar <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-username" name="gambar">
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Jumlah <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="qty">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Deskripsi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-suggestions" name="deskripsi" rows="5" placeholder="Deskripsi"></textarea>
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Slide <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="slide">
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