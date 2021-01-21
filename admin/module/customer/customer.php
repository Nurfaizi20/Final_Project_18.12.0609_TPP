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
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Nama Customer</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php
                                                    $kueriKategori = mysqli_query($koneksi, "SELECT * from tbl_user WHERE level='user' ");

                                                     if (mysqli_num_rows($kueriKategori) > 0) {
                                                                  $no = 1;
                                                    while ($kat=mysqli_fetch_array($kueriKategori)) {
                                                    ?>
                                                <tr>
                                                    <th><?php echo $no ?></th>
                                                    <td><?php echo $kat['username'];?></td>
                                                    <td><?php echo $kat['nama'];?></td>
                                                    
                                                    <td>
                                                        <?php 
                                                        if ($kat['status'] =="aktif") { ?>
                                                           
                                                            <div class="button-group">
                                                                <a href="<?php echo  $admin_url; ?>adminweb.php?module=aksi_edit_customer&id_user=<?php echo $kat['id_user'];?>&status=<?php echo $kat['status'];?>"
                                                                  class="btn btn-success"><?php echo $kat['status'];?></button> 
                                                                </a>    
                                                            </div>
                                                        <?php
                                                        }elseif ($kat['status'] =="non-aktif") { ?>
                                                            
                                                             <div class="button-group">
                                                            <a href="<?php echo  $admin_url; ?>adminweb.php?module=aksi_edit_customer&id_user=<?php echo $kat['id_user'];?>&status=<?php echo $kat['status'];?>"
                                                              class="btn btn-danger"><?php echo $kat['status'];?></button> 
                                                            </a>    
                                                        </div>
                                                        <?php
                                                        }
                                                        ?>
                                                     
                                                    
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
