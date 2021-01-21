<?php 
    include "./lib/koneksi.php";
    include "./lib/config.php";
    $sid = session_id();
    
    // $lihat = mysqli_num_rows($sql);
    $sql2 = mysqli_query($koneksi, "SELECT sum(C.harga) as tot FROM tbl_cart C join tbl_produk P on C.id_produk = P.id_produk WHERE C.id_session = '$sid'");
    $to=mysqli_fetch_array($sql2);

    $id_biaya=$_POST['biaya'];

    $biaya= mysqli_query($koneksi, "SELECT * FROM tbl_biaya_kirim WHERE id_biaya_kirim ='$id_biaya'");
?>
    
?>
        <!-- BREADCRUMB -->
        <div id="breadcrumb" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="breadcrumb-header">Checkout</h3>
                        <ul class="breadcrumb-tree">
                            <li><a href="#">Home</a></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /BREADCRUMB -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- Order Details -->
                    <div class="col-md-12 order-details">
                        <div class="section-title text-center">
                            <h3 class="title">Your Order</h3>
                        </div>

                        <div class="order-summary">

                            <div class="order-col">
                                <div><strong>PRODUCT</strong></div>
                                <div><strong>TOTAL</strong></div>
                            </div>
                            <div class="order-products">
                                <!-- $kat=mysqli_fetch_array($sql); -->
                                <?php
                                $sql = mysqli_query($koneksi, "SELECT P.*,C.* FROM tbl_cart C join tbl_produk P on C.id_produk = P.id_produk WHERE C.id_session = '$sid'");
                                if (mysqli_num_rows($sql) > 0) {
                                    
                                 while ($kat=mysqli_fetch_array($sql)) {
                            ?>
                                <div class="order-col">
                                    <div><?php echo $kat['nama_produk'];?></div>
                                    <div><?php echo $kat['harga'];?></div>
                                </div>
                            <?php 
                                }
                            }
                            ?>
                            <form method="POST" action="page/aksi_order.php"> 
                            <div class="order-col">
                                <div><strong>SUB TOTAL</strong></div>
                                <input type="hidden"  value="<?php echo $to['tot'];?>">
                                <div><strong class="order-total"><?php echo $to['tot'];?></strong></div>
                            </div>
                        </div>

                        <div class="billing-details">                          

                           <div class="section-title">
                                
                                <h7 class="title">Alamat Detail</h7>
                            </div> 
                            <div class="form-group">
                                <textarea class="input" name="alamat" rows="3"></textarea>
                            </div>

                            
                            

                             <div class="section-title">
                                <h7 class="title">Catatan </h7>
                            </div>
                             <div class="form-group">
                                <textarea class="input" name="catatan" rows="3"></textarea>
                            </div>

                            
                            <?php
                            $b=mysqli_fetch_array($biaya);

                            ?>
                            <div class="order-col">
                                <div><strong>Biaya Kirim</strong></div>
                                <input type="hidden" name="id_biaya" value="<?php echo $b['id_biaya_kirim'];?>">
                                <div><strong class="order-total"><?php echo $b['biaya'];?></strong></div>
                            </div>
                            <?php
                            $akhir = $to['tot'] + $b['biaya'];

                            ?>
                            <div class="order-col">
                                <div><strong>TOTAL</strong></div>
                                <input type="hidden" name="total" value="<?php echo $akhir;?>">
                                <div><strong class="order-total"><?php echo $akhir;?></strong></div>
                            </div>
                        </div>

                        <div class="input-checkbox">
                            <input type="checkbox" id="terms">
                            <label for="terms">
                                <span></span>
                                I've read and accept the <a href="#">terms & conditions</a>
                            </label>
                        </div>
                        <button type="submit" class="primary-btn order-submit">Place order </button>
                        <!-- <a href="#" class="primary-btn order-submit">Place order</a> -->
                    </form>
                    </div>

                    <!-- /Order Details -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- NEWSLETTER -->
        <div id="newsletter" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter">
                            <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                            <form>
                                <input class="input" type="email" placeholder="Enter Your Email">
                                <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                            </form>
                            <ul class="newsletter-follow">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /NEWSLETTER -->