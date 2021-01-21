

		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Produk</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Guitar</a></li>
									<li><a data-toggle="tab" href="#tab1">Acoustic</a></li>
									<li><a data-toggle="tab" href="#tab1">Electric</a></li>
									<li><a data-toggle="tab" href="#tab1">Ukulele</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<?php
                                             $kueriKategori = mysqli_query($koneksi, "select * from tbl_produk");
                                             if (mysqli_num_rows($kueriKategori) > 0) {
                                            while ($kat=mysqli_fetch_array($kueriKategori)) {
                                         ?>
										<div class="product">
											<div class="product-img">
												<img src="admin/upload/<?php echo $kat['gambar'];?>" alt=" ">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $kat['nama_produk'];?></a></h3>
												<h4 class="product-price">Rp.<?php echo $kat['harga'];?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>

													<button class="quick-view"><a href="./index.php?page=detail_produk&id_produk=<?php echo $kat['id_produk']; ?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button></a>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<?php
                                            
                                            } 
                                            }
                                         ?>  

										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<?php
                    $new = mysqli_query($koneksi, "select * from tbl_produk order by id_produk desc limit 1");
                    $pro=mysqli_fetch_array($new);
                ?>
				<div class="row">
					<div class="col-md-4" >
						<img src="admin/upload/<?php echo $pro['gambar'];?> " style = "width: 350px;height: 370px;">
					</div>
					<div class="col-md-4 ">
						<div class="hot-deal">

							<a class="primary-btn cta-btn" href="#">Shop now</a>
							
							<h2 class="text-uppercase" style="text-align: center;">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
					<div class="col-md-3">
						<img src="admin/upload/<?php echo $pro['gambar'];?>" style = "width: 350px;height: 370px;">
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Guitar</a></li>
									<li><a data-toggle="tab" href="#tab1">Acoustic</a></li>
									<li><a data-toggle="tab" href="#tab1">Electric</a></li>
									<li><a data-toggle="tab" href="#tab1">Ukulele</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<?php
                                             $kueriKategori = mysqli_query($koneksi, "select * from tbl_produk");
                                             if (mysqli_num_rows($kueriKategori) > 0) {
                                            while ($kate=mysqli_fetch_array($kueriKategori)) {
                                         ?>
										<div class="product">
											<div class="product-img">
												<img src="admin/upload/<?php echo $kate['gambar'];?>" alt=" ">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $kate['nama_produk'];?></a></h3>
												<h4 class="product-price">Rp.<?php echo $kate['harga'];?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>

													<button class="quick-view"><a href="./index.php?page=detail_produk&id_produk=<?php echo $kate['id_produk']; ?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button></a>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<?php
                                            
                                            } 
                                            }
                                         ?>  

										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>	
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<?php
                                             $kueriKategori = mysqli_query($koneksi, "select * from tbl_produk limit 3");
                                             if (mysqli_num_rows($kueriKategori) > 0) {
                                            while ($kateg=mysqli_fetch_array($kueriKategori)) {
                                         ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="admin/upload/<?php echo $kateg['gambar'];?>" alt=" ">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $kateg['nama_produk'];?></a></h3>
										<h4 class="product-price">Rp.<?php echo $kateg['harga'];?> </h4>
									</div>
								</div>
									<?php
                                            
                                            } 
                                            }
                                         ?> 
								<!-- /product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<?php
                                             $kueriKategori = mysqli_query($koneksi, "select * from tbl_produk limit 3");
                                             if (mysqli_num_rows($kueriKategori) > 0) {
                                            while ($katego=mysqli_fetch_array($kueriKategori)) {
                                         ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="admin/upload/<?php echo $katego['gambar'];?>" alt=" ">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $katego['nama_produk'];?></a></h3>
										<h4 class="product-price">Rp.<?php echo $katego['harga'];?> </h4>
									</div>
								</div>
									<?php
                                            
                                            } 
                                            }
                                         ?> 
								<!-- /product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<?php
                                             $kueriKategori = mysqli_query($koneksi, "select * from tbl_produk limit 3");
                                             if (mysqli_num_rows($kueriKategori) > 0) {
                                            while ($kategor=mysqli_fetch_array($kueriKategori)) {
                                         ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="admin/upload/<?php echo $kategor['gambar'];?>" alt=" ">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $kategor['nama_produk'];?></a></h3>
										<h4 class="product-price">Rp.<?php echo $kategor['harga'];?> </h4>
									</div>
								</div>
									<?php
                                            
                                            } 
                                            }
                                         ?> 
								<!-- /product widget -->
							</div>
						</div>
					</div>

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
		