<?php
$r['username'] = $_SESSION['namauser'];
$user = $r['username'];
$querymem = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username ='$user' ");
$u = mysqli_fetch_array($querymem);


?>
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Menu</a></li>
                <li class="active">Profil</li>
            </ol>
        </div>
    </div>
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-form">
                        <h2 class="title text-center">Data Profile</h2>
                           <div class="status alert alert-success" style="display: none"></div>
                                  <?php
                                   if (isset($_GET['edit'])) {
                                  ?>
                            <form id="main-contact-form" action="index.php?page=aksi_simpan" class="contact-form row" name="contact-form" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="user" value="<?= $u['id_user'] ?>">
                                 <div class="form-group col-md-12" align="center">
                                  <?php
                                    if (is_null($u['foto'])) {
                                     ?>
                                     <img src="img/default.png" width="200" height="80" alt="..." class="img-thumbnail" style="">
                                     <?php
                                    }else { ?>
                                      <img src="img/<?= $u['foto'] ?>" width="200" height="80" alt="..." class="img-thumbnail" style="">
                                      <?php
                                    }
                                    ?>
                                   <input type="file" class="form-control form-control-sm" name="foto" >
                                   <input type="hidden" class="form-control form-control-sm" name="foto" value="<?= $u['foto'] ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="<?= $u['username'] ?>" value="<?= $u['username'] ?>">
                                </div>
                                 <div class="form-group col-md-12">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="<?= $u['password'] ?>" value="<?= $u['password'] ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="<?= $u['nama'] ?>" value="<?= $u['nama'] ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Nomor Telepon</label>
                                    <input type="text" name="nomor" class="form-control" placeholder="<?= $u['nomor'] ?>" value="<?= $u['nomor'] ?>">
                                </div>
                                                    
                                <div class="form-group col-md-12">
                                    <label>Alamat Lengkap</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="<?= $u['alamat'] ?>" value="<?= $u['alamat'] ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <button name="profil" type="submit" class="btn btn-primary pull-right "> Simpan </button> 
                                </div>
                            </form>

                        <?php
                        } else {
                        ?>
                            <form id="main-contact-form" class="contact-form row" name="contact-form" method="GET">
                                <div class="form-group col-md-12" align="center">
                                    <?php
                                    if (is_null($u['foto'])) {
                                     ?>
                                     <img src="img/default.png" width="200" height="80" alt="..." class="img-thumbnail" style="">
                                     <?php
                                    }else { ?>
                                      <img src="img/<?= $u['foto'] ?>" width="200" height="80" alt="..." class="img-thumbnail" style="">
                                      <?php
                                    }
                                    ?>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="<?= $u['username'] ?>" disabled value="<?= $u['username'] ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="<?= $u['nama'] ?>" disabled value="<?= $u['nama'] ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Nomor Telepon</label>
                                    <input type="text" name="nomor" class="form-control" placeholder="<?= $u['nomor'] ?>" disabled value="<?= $u['nomor'] ?>">
                                </div>
                                  <div class="form-group col-md-12">
                                    <label>Alamat Lengkap</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="<?= $u['alamat'] ?>" disabled value="<?= $u['alamat'] ?>">
                                </div>
                              
                                <div class="form-group col-md-12">
                                    <a class="btn btn-primary pull-right" href="index.php?page=profile&edit">Edit</a>
                                </div>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>