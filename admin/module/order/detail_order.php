<?php
            include "../lib/config.php";
            include "../lib/koneksi.php";

            $id=$_GET['id_order'];
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
                                                    <th scope="col">Order</th>
                                                    <th scope="col">Nama Produk</th>
                                                    <th scope="col">Jumlah</th>
                                                    <th scope="col">Harga Barang</th>
                                                    <th scope="col">Biaya Kirim</th>
                                                    <th scope="col">Total</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php
                                                    $kueriKategori = mysqli_query($koneksi, "SELECT P.*,O.*,B.* ,DO.* from tbl_detail_order DO join tbl_produk P ON DO.id_produk = P.id_produk Join tbl_order O on DO.id_order = O.id_order join tbl_biaya_kirim B on O.id_biaya_kirim = B.id_biaya_kirim WHERE DO.id_order = '$id'");

                                                     if (mysqli_num_rows($kueriKategori) > 0) {
                                                                  $no = 1;
                                                                $total= 0;
                                                    while ($kat=mysqli_fetch_array($kueriKategori)) { 
                                                        $total=$kat['harga'] * $kat['qty'];
                                                    ?>
                                                <tr>
                                                    <th><?php echo $no ?></th>
                                                    <td><?php echo $kat['id_order'];?></td>
                                                    <td><?php echo $kat['nama_produk'];?></td>
                                                    <td><?php echo $kat['qty'];?></td>
                                                    <td><?php echo $kat['harga'];?></td>
                                                    <td><?php echo $kat['biaya'];?></td>
                                                    <td><?php echo $kat['total_bayar'];?></td>
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
