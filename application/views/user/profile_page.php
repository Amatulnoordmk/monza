<div class="container single_product_container">
	<div class="col text-center">
		<div class="section_title new_arrivals_title">
			<h3>Profil Anda</h3>
		</div>
	</div>
	<br><br><br>

	<div class="row">
		<div class="col-4">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top"
					src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
					alt="Card image cap">
				<div class="card-body">
					<div class="text-center">
						<h5 class="card-title"><?= $user->nama_lengkap ?></h5>
						<p class="card-text">
							<td><span class="ti-location-pin"></span> <?= $user->provinsi ?></td>
						</p>
						<p class="card-text">
							<td><span class="fa fa-whatsapp"></span> <?= $user->no_telp ?></td>
						</p>
						<a href="#modaleditprofil" data-toggle="modal" type="button" class="btn btn-sm btn-block"
							style="background-color:#f1873b; color:white;">Edit Profil</a>
					</div>
				</div>

			</div>
		</div>

		<div class="col-8">
			<div class="product_sorting_container product_sorting_container_top">
				<ul class="product_sorting">
					<li>
						<span class="type_sorting_text">Filter</span>
						<i class="fa fa-angle-down"></i>
						<ul class="sorting_type">
							<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>
								<span>Gratis</span></li>
							<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
								<span>Termurah</span></li>
							<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>
								<span>Donasi</span></li>
						</ul>
					</li>
		
				</ul>
				<button class="btn btn-outline-warning float-right" style="color:#f1873b;" type="submit">tambahkan</button>

			</div>
			<div class="products_iso">
				<div class="row">
					<div class="col">

						<!-- Product Sorting -->

						<div class="row mt-5">

							<!-- Product 1 -->
							<div class="col">
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
							</div>
							<!-- Product 2 -->
							<div class="col">
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
							</div>
							<!-- Product 3 -->
							<div class="col">
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
							</div>
							<!-- Baris 2 -->
							<div class="row mt-5">

								<!-- Product 1 -->
								<div class="col">
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
								</div>
								<!-- Product 2 -->
								<div class="col">
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
								</div>
								<!-- Product 3 -->
								<div class="col">
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
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
