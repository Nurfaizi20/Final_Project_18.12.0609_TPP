
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Kategori</h3>
							<div class="checkbox-filter">
								<?php
                                         $kueriKategori = mysqli_query($koneksi, "select * from tbl_kategori");
                                         if (mysqli_num_rows($kueriKategori) > 0) {
                                        $no = 1;
                                     while ($kat=mysqli_fetch_array($kueriKategori)) {
                                ?>

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										<?php echo $kat['nama_kategori'];?>
										<?php
										$idpro = $kat['id_kategori'];
										$kate= mysqli_query($koneksi, "SELECT * from tbl_produk where id_kategori = $idpro");
										$jum = mysqli_num_rows($kate);
										?>
										<small>(<?php echo "$jum";$jum?>)</small>
									</label>
								</div>

								    <?php
                                        $no++;
                                        } 
                                        }
                                     ?> 
								
							</div>
						</div>
						<!-- /aside Widget -->


						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Merek</h3>
							<div class="checkbox-filter">
								   <?php
                                        $kueriKMerek = mysqli_query($koneksi, "select * from tbl_merek");
                                        if (mysqli_num_rows($kueriKMerek) > 0) {
                                        $no = 1;
                                        while ($mer=mysqli_fetch_array($kueriKMerek)) {
                                    ?>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										<?php echo $mer['nama_merek'];?>
										<?php
										$idmer = $mer['id_merek'];
										$mere= mysqli_query($koneksi, "SELECT * from tbl_produk where id_merek = $idmer");
										$jml = mysqli_num_rows($mere);
										?>
										<small>(<?php echo "$jml";$jml?>)</small>
									</label>
								</div>
								   <?php
                                        $no++;
                                        } 
                                        }
                                    ?>  
								
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<?php
                                $kueriKategori = mysqli_query($koneksi, "select * from tbl_produk");
                                if (mysqli_num_rows($kueriKategori) > 0) {
                                while ($kat=mysqli_fetch_array($kueriKategori)) {
                            ?>
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="admin/upload/<?php echo $kat['gambar'];?>">
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
							</div>
								<?php     
                                    } 
                                    }
                                ?>  
						</div>
						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>