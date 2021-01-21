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
                                                    <th scope="col">Nama Daerah</th>
                                                    <th scope="col">Biaya</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php
                                                    $kueriDaerah = mysqli_query($koneksi, "SELECT * from tbl_biaya_kirim");
                                                     if (mysqli_num_rows($kueriDaerah) > 0) {
                                                                  $no = 1;
                                                    while ($kat=mysqli_fetch_array($kueriDaerah)) {
                                                    ?>
                                                <tr>
                                                    <th><?php echo $no ?></th>
                                                    <td><?php echo $kat['daerah'];?></td>
                                                    <td><?php echo $kat['biaya'];?></td>
                                                    <td> 
                                                        <div class="button-group">
                                                           <a href="<?php echo  $admin_url; ?>adminweb.php?module=edit_biaya&id_biaya=<?php echo $kat['id_biaya_kirim']; ?>"
                                                              class="btn btn-warning"><i class="fa fa-pencil"></i></button> 
                                                            </a>
                                                            <a href="<?php echo  $admin_url; ?>module/biaya/aksi_hapus_biaya.php?id_biaya=<?php echo$kat['id_biaya_kirim'] ; ?>"
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
                                                <a href="adminweb.php?module=tambah_biaya"><button type="submit" class="btn btn-primary"><span><i class="fa fa-plus-circle"></i></span> Tambah Biaya</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
