<!-- Main Content -->

<div class="main_content">

	<!-- Products -->

	<div class="products_iso">
		<div class="row">
			<div class="col">

				<!-- Product Sorting -->

				<div class="product_sorting_container product_sorting_container_top">
					<ul class="product_sorting">
						<li>
							<span class="type_sorting_text">Urutkan</span>
							<i class="fa fa-angle-down"></i>
							<ul class="sorting_type">
								<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>
									<span>Urutkan</span></li>
								<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
									<span>Harga</span></li>
								<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>
									<span>jarak</span></li>
							</ul>
						</li>
						<!-- <li>
							<span>Show</span>
							<span class="num_sorting_text">6</span>
							<i class="fa fa-angle-down"></i>
							<ul class="sorting_num">
								<li class="num_sorting_btn"><span>6</span></li>
								<li class="num_sorting_btn"><span>12</span></li>
								<li class="num_sorting_btn"><span>24</span></li>
							</ul>
						</li> -->
					</ul>
					<!-- <div class="pages d-flex flex-row align-items-center">
						<div class="page_current">
							<span>1</span>
							<ul class="page_selection">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
							</ul>
						</div>
						<div class="page_total"><span>of</span> 3</div>
						<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right"
									aria-hidden="true"></i></a></div>
					</div> -->

				</div>

				<!-- Product Grid -->
				<!-- Baris 1 -->
				<div class="row mt-5">
					<?php foreach($produk as $pro) : ?>
					<!-- Product 1 -->
					<div class="col-md-3">
						<div class="product-itm">
							<div class=" product_image">
								<img src="<?=base_url();?>assets/user/images/Produk/<?= $pro->foto_produk ?>" alt="produk">
							</div>
							<div class="favorite favorite_left"></div>

							<div class="product_info">
								<h6 class="product_name"><a href="single.html"><?= $pro->nama_produk ?></a></h6>
								<div class="product_price">Gratis</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					<!-- Product 2 -->
					<!-- <div class="col">
						<div class="product-itm">
							<div class=" product_image">
								<img src="<?=base_url();?>assets/user/images/product_1.png" alt="">
							</div>
							<div class="favorite favorite_left"></div>

							<div class="product_info">
								<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital
										Camera (Silver)</a></h6>
								<div class="product_price">Gratis</div>
							</div>
						</div>
					</div> -->
					<!-- Product 3 -->
					<!-- <div class="col">
						<a href="<?=base_url();?>detailproduk">
							<div class="product-itm">
								<div class=" product_image">
									<img src="<?=base_url();?>assets/user/images/product_1.png" alt="">
								</div>
								<div class="favorite favorite_left"></div>

								<div class="product_info">
									<h6 class="product_name"><a href="">Fujifilm X100T 16 MP Digital
											Camera (Silver)</a></h6>
									<div class="product_price">Gratis</div>
								</div>
							</div>
						</a>
					</div> -->
					<!-- Product 4 -->
					<!-- <div class="col">
						<div class="product-itm">
							<div class=" product_image">
								<img src="<?=base_url();?>assets/user/images/product_1.png" alt="">
							</div>
							<div class="favorite favorite_left"></div>

							<div class="product_info">
								<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital
										Camera (Silver)</a></h6>
								<div class="product_price">Gratis</div>
							</div>
						</div>
					</div> -->
				</div>

				

				<!-- Product Sorting -->

				<!-- <div class="product_sorting_container product_sorting_container_bottom clearfix">
					<ul class="product_sorting">
						<li>
							<span>Show:</span>
							<span class="num_sorting_text">04</span>
							<i class="fa fa-angle-down"></i>
							<ul class="sorting_num">
								<li class="num_sorting_btn"><span>01</span></li>
								<li class="num_sorting_btn"><span>02</span></li>
								<li class="num_sorting_btn"><span>03</span></li>
								<li class="num_sorting_btn"><span>04</span></li>
							</ul>
						</li>
					</ul>
					<span class="showing_results">Showing 1–3 of 12 results</span>
					<div class="pages d-flex flex-row align-items-center">
						<div class="page_current">
							<span>1</span>
							<ul class="page_selection">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
							</ul>
						</div>
						<div class="page_total"><span>of</span> 3</div>
						<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right"
									aria-hidden="true"></i></a></div>
					</div>

				</div> -->

			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
