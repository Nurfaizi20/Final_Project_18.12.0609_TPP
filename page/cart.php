<?php
include "lib/koneksi.php";
$sid = session_id();
$sql = mysqli_query($koneksi, "SELECT * FROM tbl_cart,tbl_produk WHERE tbl_cart.id_session = '$sid' AND tbl_cart.id_produk = tbl_produk.id_produk ");
$cek = mysqli_fetch_row($sql);

$biaya= mysqli_query($koneksi, "SELECT * FROM tbl_biaya_kirim");
?>
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
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <?php
                if (empty($cek)) {
                    echo '<tbody style="height:150px"><tr><td colspan="5"><center><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; cart kosong</center></td></tr></tbody>';
                } else {
                ?>
                    <tbody>
                        <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM tbl_cart,tbl_produk WHERE tbl_cart.id_session = '$sid' AND tbl_cart.id_produk = tbl_produk.id_produk ");
                        $i = 0;
                        while ($k = mysqli_fetch_array($sql)) {
                            $subtotal = $k['harga'] *  $k['jumlah'];

                            $i++;
                            $hargatotal[$i] = $subtotal;
                        ?>
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="admin/upload/<?php echo $k['gambar'];?>" width="100px"></a>
                                </td>
                                <td class="cart_description" style="max-width: 300px">
                                    <h4><a href=""><?= $k['nama_produk']; ?></a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>Rp. <?php echo number_format($k['harga'], 0, '', '.'); ?></p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="page/aksi_cart.php?idpro=<?= $k['id_produk']; ?>&harga=<?= $k['harga']; ?>"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="<?= $k['jumlah']; ?>" autocomplete="off" size="2" disabled>
                                        <a class="cart_quantity_down" href="page/aksi_cart.php?idpro=<?= $k['id_produk']; ?>&harga=<?= $k['harga']; ?>&minus"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">Rp. <?php echo number_format($subtotal, 0, '', '.'); ?></p>
                                </td>
                                <td class="cart_delete">
                                    
                                   <a class="cart_quantity_delete" href=" page/aksi_cart.php?idpro=<?= $k['id_produk']; ?>&delete"><i class="fa fa-times"></i></a>
                                </td>

                            </tr>
                        <?php
                        }

                        ?>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                            <td colspan="2">
                                <table class="table table-condensed total-result">
                                    <tr>
                                        <td>Total Belanjaan :</td>
                                        <td>Rp. <?php echo number_format(array_sum($hargatotal), 0, '', '.'); ?></td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </tbody>
                <?php
                } ?>
            </table>
            <div class="col-sm-12">
                <div class="total_area">
                    
                    <form method="POST" action="./index.php?page=checkout"> 
                    <div class="section-title">                                
                        <h7 class="title">Daerah pengiriman</h7>
                    </div> 
                      
                    <select class="form-control form-control-sm" name="biaya" required>
                        <option  disabled selected>Pilih Daerah pengiriman</option>
                        <?php while ($b=mysqli_fetch_array($biaya)) {
                          ?>
                        <option value="<?php echo $b['id_biaya_kirim']; ?>"><?php echo $b['daerah'];?></option>
                        <?php } ?>
                    </select>
                    
                    <button type="submit" class="btn btn-default check_out" onclick="window.location.href='index.php?page=checkout'" <?php if (empty($cek)) {                                                                                                    echo 'disabled';
                     } ?>>Check Out</button>
                    </form>

                            
                </div>
            </div>
        </div>

    </div>

</section>
<!--/#cart_items-->

<section id="do_action">

</section>
<!--/#do_action-->