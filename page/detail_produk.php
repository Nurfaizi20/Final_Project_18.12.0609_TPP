<?php
  $id_produk=$_GET['id_produk'];
  $kueriKategori = mysqli_query($koneksi, "SELECT P.*,K.nama_kategori,M.nama_merek from tbl_produk P JOIN tbl_kategori K ON P.id_kategori=K.id_kategori JOIN tbl_merek M ON P.id_merek=M.id_merek WHERE P.id_produk='$id_produk' ");
 $kat=mysqli_fetch_array($kueriKategori);
?>
		<!-- BREADCRUMB -->
		<br>
		<br>
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="admin/upload/<?php echo $kat['gambar'];?>" alt="">
							</div>

						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="admin/upload/<?php echo $kat['gambar'];?>" alt="">
							</div>

						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $kat['nama_produk'];?></h2>
							
							<div>
								<h3 class="product-price">Rp.<?php echo $kat['harga'];?></h3>
								<span class="product-available"><?php echo $kat['qty'];?> Jumlah</span>
							</div>
							<p><?php echo $kat['deskripsi'];?></p>
							<ul class="product-links">
								<li>Merek :</li>
								<li><a href="#"><?php echo $kat['nama_merek'];?></a></li>
							</ul>
								<ul class="product-links">
								<li>Kaetegori : </li>
								<li><a href="#"><?php echo $kat['nama_kategori'];?></a></li>
							</ul>
							<br>
							<form method="post" action="index.php?page=tambah_cart">
								<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="hidden" name="idpro" value="<?php echo $kat['id_produk'];?>">
										
										<input type="number" name="jumlah" value="1">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								
								<button  class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								
								</div>
							</form>
							

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
							</ul>

							

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

			
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

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
