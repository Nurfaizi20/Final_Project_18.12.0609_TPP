<?php
            include "../lib/config.php";
            include "../lib/koneksi.php";
?>
       

            <div class="content-body">

                <div class="container-fluid mt-3">
                     <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Hover Table</h4>
                                    <div class="table-responsive">
                                        <table class="table header-border table-hover verticle-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">Nama Merek</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php
                                                    $kueriKategori = mysqli_query($koneksi, "select * from tbl_merek");
                                                     if (mysqli_num_rows($kueriKategori) > 0) {
                                                                  $no = 1;
                                                    while ($kat=mysqli_fetch_array($kueriKategori)) {
                                                    ?>
                                                <tr>
                                                    <th><?php echo $no ?></th>
                                                    <td><?php echo $kat['nama_merek'];?></td>
                                                    <td> 
                                                        <div class="button-group">
                                                           <a href="<?php echo  $admin_url; ?>adminweb.php?module=edit_merek&id_merek=<?php echo $kat['id_merek']; ?>"
                                                              class="btn btn-warning"><i class="fa fa-pencil"></i></button> 
                                                            </a>
                                                            <a href="<?php echo  $admin_url; ?>module/merek/aksi_hapus_merek.php?id_merek=<?php echo$kat['id_merek'] ; ?>"
                                                            onClick="return confirm('Anda Yakin Ingin Menghapus data ini ?')"class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                        </div>
                                                    
                                                    </td>
                                                </tr>
                                                <?php
                                                $no++;
                                                         } 
                                                    }
                                                ?>                                              
                                            </tbody>
                                        </table>
                                       <div>
                                                <a href="adminweb.php?module=tambah_merek"><button type="submit" class="btn btn-primary"><span><i class="fa fa-plus-circle"></i></span> Tambah data Merek</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
