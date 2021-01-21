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
                                                    
                                                    <th scope="col">Nama Customer</th>
                                                    <th scope="col">total_bayar</th>
                                                    <th scope="col">tanggal_order</th>

                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php
                                                    $kueriKategori = mysqli_query($koneksi, "SELECT U.nama,O.* from tbl_order O join tbl_user U ON O.Id_user = U.id_user order by O.id_order desc");

                                                     if (mysqli_num_rows($kueriKategori) > 0) {
                                                                  $no = 1;
                                                    while ($kat=mysqli_fetch_array($kueriKategori)) {
                                                    ?>
                                                <tr>
                                                    <th><?php echo $no ?></th>
                                                    
                                                    <td><?php echo $kat['nama'];?></td>
                                                    <td><?php echo $kat['total_bayar'];?></td>
                                                    <td><?php echo $kat['tgl_order'];?></td>
                                                    <td> 
                                                        <a href="<?php echo  $admin_url; ?>module/order/aksi_edit_order.php?id_order=<?php echo$kat['id_order'] ; ?>"
                                                           class="btn btn-info"><?php echo $kat['status_order'];?></button></a></td>

                                                    <td>
                                                      <div class="button-group">
                                                            <a href="<?php echo  $admin_url; ?>adminweb.php?module=detail_order&id_order=<?php echo $kat['id_order']; ?>"
                                                              class="btn btn-warning"><i class="fa fa-info-circle"></i></button> 
                                                            </a>
                                                            <a href="<?php echo  $admin_url; ?>module/order/aksi_hapus_order.php?id_order=<?php echo$kat['id_order'] ; ?>"
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
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
