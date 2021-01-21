<?php

include "lib/koneksi.php";
$iduser = $_SESSION['iduser'];

$sid = session_id();

?>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Gambar</td>
                        <td class="description">Nama Produk</td>
                        <td class="price">Harga</td>
                        <td class="quantity">Jumlah</td>
                        <td class="quantity">Biaya Kirim</td>
                        <td class="total">Total</td>
                        <td class="total">Status</td>
                    </tr>
                </thead>
                <?php
                
                ?>
                    <tbody>
                        <?php
                        $sql = mysqli_query($koneksi, "SELECT O.*,DO.*,U.*,B.*,P.*,DO.qty as jml FROM tbl_order O join tbl_detail_order DO on O.id_order = DO.id_order join tbl_user U on O.id_user = U.id_user join tbl_biaya_kirim B on O.id_biaya_kirim = B.id_biaya_kirim join tbl_produk P on DO.id_produk = P.id_produk where O.id_user = $iduser AND O.status_order ='order'");
                        // $sql = mysqli_query($koneksi, "SELECT O.*,DO.* FROM tbl_cart C join tbl_produk P on C.id_produk = P.id_produk WHERE C.id_session = '$sid'");
                        $i = 0;
                        while ($k = mysqli_fetch_array($sql)) {
                            
                        ?>
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="admin/upload/<?php echo $k['gambar'];?>" width="100px"></a>
                                </td>
                                <td class="cart_description" style="max-width: 300px">
                                    <h4><a href=""><?= $k['nama_produk']; ?></a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>Rp. <?php echo $k['total_harga']; ?></p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                       
                                        <?= $k['jml']; ?>
                                        
                                    </div>
                                </td>
                                 <td class="cart_ongkir">
                                    <p>Rp. <?php echo $k['biaya']; ?></p>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">Rp. <?php echo number_format($k['total_bayar'], 0, '', '.'); ?></p>
                                </td>
                                <td class="cart_delete">
                                    <?= $k['status_order']; ?>
                                   
                                </td>

                            </tr>
                        <?php
                        }

                        ?>
                        
                    </tbody>
                
            </table>
           
        </div>

    </div>

</section>
<!--/#cart_items-->

<section id="do_action">

</section>
<!--/#do_action-->