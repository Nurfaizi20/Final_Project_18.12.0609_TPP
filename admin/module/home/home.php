<?php
            include "../lib/config.php";
            include "../lib/koneksi.php";
?>
   

        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <?php
                            $jumjual = mysqli_query($koneksi, "SELECT count(id_produk) as pro from tbl_detail_order ");

                            $pr=mysqli_fetch_array($jumjual);
                                         
                           
                            ?>
                            <div class="card-body">
                                <h3 class="card-title text-white">Products Sold</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $pr['pro'];?></h2>
                                   
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <?php
                                $jumpro = mysqli_query($koneksi, "SELECT count(id_produk) as duk from tbl_produk ");

                                $od=mysqli_fetch_array($jumpro);
                                             
                               
                                ?>
                                <h3 class="card-title text-white">Produk</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $od['duk'];?></h2>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <?php
                                $cus = mysqli_query($koneksi, "SELECT count(id_user) as us from tbl_user where level='user'");

                                $er=mysqli_fetch_array($cus);
                                             
                               
                                ?>
                                <h3 class="card-title text-white">New Customers</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $er['us'];?></h2>
                                
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <?php
                                $te = mysqli_query($koneksi, "SELECT count(id_kategori) as gori from tbl_kategori ");

                                $kat=mysqli_fetch_array($te);
                                             
                               
                                ?>
                                <h3 class="card-title text-white">Kategori</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $kat['gori'];?></h2>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
     