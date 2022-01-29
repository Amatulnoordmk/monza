<<<<<<< HEAD
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
=======
<div class="container single_product_container">
	<table class="table table-borderless" width="100%">
		<thead>
			<tr>
				<th>
					<h3 style="color:#f1873b;">Profil Anda</h3>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td rowspan="4" style="text-align: center;"><img src="<?=base_url();?>assets/user/images/single_1.jpg"
						alt="" height="150" width="170"></td>
				<td width="80%">
					<h4><?= $user->nama_lengkap ?></h4>
				</td>
			</tr>
			<tr>
				<td><span class="ti-location-pin"></span> <?= $user->provinsi ?></td>
			</tr>
			<tr>
				<td><span class="fa fa-whatsapp"></span> 0<?= $user->no_telp ?></td>
			</tr>
			<tr>
				<td>
					<a href="#modaleditprofil" data-toggle="modal" style="color: #F1873B;"><b>Edit Profil</b>
				</td>
			</tr>
		<tbody>
	</table>
	<h3>List Barang</h3>
	<div class="row">
		<div class="col-sm-3">
			<div class="card" style="width: 15rem;">
				<img src="<?=base_url();?>assets/user/images/single_1.jpg" class="card-img-top" height="200">
				<div class="card-body">
					<h5 class="card-title">Seragam Sekolah SMA</h5>
					<p class="card-test">
						<Gratis><span class="product_price">Gratis</span>
							<br>
							<span class="ti-location-pin"></span>Medan
					</p>
					<a href="#" class="btn btn-warning"><span class="ti-pencil"></span></a>
					<a href="#" class="btn btn-danger"><span class="ti-trash"></span></a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card" style="width: 15rem;">
				<img src="<?=base_url();?>assets/user/images/single_1.jpg" class="card-img-top" height="200">
				<div class="card-body">
					<h5 class="card-title">Seragam Sekolah SMA</h5>
					<p class="card-test">
						<Gratis><span class="product_price">Gratis</span>
							<br>
							<span class="ti-location-pin"></span>Medan
					</p>
					<a href="#" class="btn btn-warning"><span class="ti-pencil"></span></a>
					<a href="#" class="btn btn-danger"><span class="ti-trash"></span></a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card" style="width: 15rem;">
				<img src="<?=base_url();?>assets/user/images/single_1.jpg" class="card-img-top" height="200">
				<div class="card-body">
					<h5 class="card-title">Seragam Sekolah SMA</h5>
					<p class="card-test">
						<Gratis><span class="product_price">Gratis</span>
							<br>
							<span class="ti-location-pin"></span>Medan
					</p>
>>>>>>> 376d28b30e31757e574b8576965ad68c0f312a22


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

<<<<<<< HEAD
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
=======
<!-- modal edit profil -->
<div class="modal fade" id="modaleditprofil">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header center">
				<div class="col-md-4 offset-md-4">
					<center>
						<a href="#"><img src="<?=base_url();?>assets/user/images/logo-log.png" alt="" height="65"></a>
						<h4 class="modal-title w-100 font-weight-bold">Edit Profil</h4>
					</center>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-5">
				<form method="POST" action="<?= base_url('user/updateProfil/'.$user->id_user)?>"
					enctype="multipart/form-data">
					<div class="row">
						<div class="form-group col-md-6 col-12">
							<label>Nama Lengkap</label>
							<input type="hidden" name="id_user" value="<?= $user->id_user ?>">
							<input type="text" name="nama_lengkap" class="form-control" style="color: #1e1e27"
								value="<?= $user->nama_lengkap ?>">
						</div>
						<div class="form-group col-md-6 col-12">
							<label>Nomor Handphone</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<button class="btn btn-secondary" type="button" id="button-addon1"
										disabled>+62</button>
								</div>
								<input type="text" name="nomor" id="nomor" class="form-control"
									value="<?= substr($user->no_telp, 1, 13) ?>" aria-describedby="addon-wrapping"
									aria-describedby="inputGroup-sizing-default" onkeypress="return isNumberKey(event)"
									maxlength="13" style="color: #1e1e27">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6 col-12">
							<label>Email</label>
							<input type="email" name="email" style="color: #1e1e27" class="form-control"
								onkeyup="cekEmail" value="<?= $user->email?>">
						</div>
						<div class="form-group col-md-6 col-12">
							<label>Username</label>
							<input type="text" name="username" class="form-control" style="color: #1e1e27"
								value="<?= $user->username?>">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6 col-12">
							<label>Password</label>
							<input type="password" name="password" class="form-control" style="color: #1e1e27">
						</div>
						<div class="form-group col-md-6 col-12">
							<label>Konfirmasi Password</label>
							<input type="password" name="konfirPass" class="form-control" style="color: #1e1e27">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6 col-12">
							<label for="provinsi">Provinsi</label>
							<select class="form-control" id="provinsi" name="provinsi" style="color: #1e1e27">
								<option value="" selected disabled><?= $user->provinsi; ?></option>
								<?php foreach($provinsi as $prov): ?>
								<option value="<?= $prov->id_provinsi; ?>"><?= $prov->nama; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group col-md-6 col-12">
							<label for="kota">Kabupaten/Kota</label>
							<select class="form-control" id="kota" name="kota" style="color: #1e1e27">
								<option value="" selected disabled><?= $user->kota; ?></option>
								<option value="3">Medan</option>
							</select>
						</div>
					</div>
					<center>
						<br><button type="submit" class="btn btn-lg btn-block"
							style="background-color:#f1873b; color:white;">Simpan Perubahan</button>
					</center>
				</form>
>>>>>>> 376d28b30e31757e574b8576965ad68c0f312a22
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
