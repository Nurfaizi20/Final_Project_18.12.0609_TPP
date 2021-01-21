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
                                                    <th scope="col">tanggal order</th>
                                                    <th scope="col">tanggal kirim</th>
                                                    <th scope="col">status</th>
                                                    <th scope="col">detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php
                                                    $kueriKategori = mysqli_query($koneksi, "SELECT U.nama,O.* from tbl_order O join tbl_user U ON O.Id_user = U.id_user where O.status_order = 'selesai' ");

                                                     if (mysqli_num_rows($kueriKategori) > 0) {
                                                                  $no = 1;
                                                    while ($kat=mysqli_fetch_array($kueriKategori)) {
                                                    ?>
                                                <tr>
                                                    <th><?php echo $no ?></th>
                                                    
                                                    <td><?php echo $kat['nama'];?></td>
                                                    <td><?php echo $kat['total_bayar'];?></td>
                                                    <td> 
                                                        <?php echo $kat['tgl_order'];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $kat['tanggal_kirim'];?>
                                                    </td>

                                                    <td>
                                                        <?php echo $kat['status_order'];?>
                                                    </td>

                                                    <td>
                                                      <div class="button-group">
                                                            <a href="<?php echo  $admin_url; ?>adminweb.php?module=detail_order&id_order=<?php echo $kat['id_order']; ?>"
                                                              class="btn btn-warning"><i class="fa fa-info-circle"></i></button> 
                                                            </a>
                                                            
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
