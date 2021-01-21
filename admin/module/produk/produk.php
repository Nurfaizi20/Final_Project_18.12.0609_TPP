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
                                                    <th scope="col">Nama Produk</th>
                                                    <th scope="col">Merek</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Gambar</th>
                                                    <th scope="col">Jumlah</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php
                                                    $kueriKategori = mysqli_query($koneksi, "select * from tbl_produk");
                                                     if (mysqli_num_rows($kueriKategori) > 0) {
                                                                  $no = 1;
                                                    while ($kat=mysqli_fetch_array($kueriKategori)) {
                                                    ?>
                                                <tr>
                                                    <th><?php echo $no ?></th>
                                                    <td><?php echo $kat['nama_produk'];?></td>
                                                     <td><?php 
                                                        $a = $kat['id_merek'];
                                                            $Merek = mysqli_query($koneksi, "SELECT * FROM tbl_merek WHERE id_merek =' $a' ");
                                                            $hasil=mysqli_fetch_array($Merek);
                                                        echo $hasil['nama_merek'];?>                    
                                                    </td>
                                                    <td><?php 
                                                        $b = $kat['id_kategori'];
                                                        $Kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori =' $b' ");
                                                            $hasil=mysqli_fetch_array($Kategori);
                                                        echo $hasil['nama_kategori'];?>                 
                                                    </td>
                                                    <td>Rp.<?php echo $kat['harga'];?></td>
                                                    <td><img src="upload/<?php echo $kat['gambar'];?>" alt="noImage" width="50" ></td>
                                                    <td><?php echo $kat['qty'];?></td>
                                                    <td>
                                                      <div class="button-group">
                                                           <a href="<?php echo  $admin_url; ?>adminweb.php?module=edit_produk&id_produk=<?php echo $kat['id_produk']; ?>"
                                                              class="btn btn-warning"><i class="fa fa-pencil"></i></button> 
                                                            </a>
                                                            <a href="<?php echo  $admin_url; ?>module/produk/aksi_hapus_produk.php?id_produk=<?php echo$kat['id_produk'] ; ?>"
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
                                                <a href="adminweb.php?module=tambah_produk"><button type="submit" class="btn btn-primary"><span><i class="fa fa-plus-circle"></i></span> Tambah data Produk</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
