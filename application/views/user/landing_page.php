<!DOCTYPE html>
<html lang="en">

<head>
	<title>Monza</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="<?= base_url();?>'assets/user/plugins/jquery/jquery.min.js'"></script>
	<link rel="shortcut icon" href="<?=base_url();?>assets/user/images/logo-log.png" />
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/bootstrap4/bootstrap.min.css">
	<link href="<?=base_url();?>assets/user/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"
		type="text/css">
	<link rel="stylesheet" type="text/css"
		href="<?=base_url();?>assets/user/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css"
		href="<?=base_url();?>assets/user/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/user/plugins/themify-icons/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/responsive.css">
	<link rel="stylesheet" type="text/css"
		href="<?=base_url();?>assets/user/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/contact_responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/single_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/single_responsive.css">
	<link rel="style sheet" type="text/css" href="<?=base_url();?>assets/user/styles/categories_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/categories_responsive.css">
	<script src="<?=base_url();?>assets/user/js/sweetalert2.all.min.js"></script>

</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header trans_300">

			<?php
                if ($this->session->flashdata('login')) :
                ?>
			<div class="alert alert-danger" id="alertLogin" role="alert">
				<?= $this->session->flashdata('login') ?>
			</div>
			<?php
                elseif ($this->session->flashdata('gagal')) :
                ?>
			<div class="alert alert-danger" id="alertgagal" role="alert">
				<?= $this->session->flashdata('gagal') ?>
			</div>
			<?php endif; ?>

			<!-- Main Navigation -->

			<div class="main_nav_container">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-right">
							<div class="logo_container">
								<a href="#"><img src="<?=base_url();?>assets/user/images/logo-nav.png" alt=""
										height="36"></a>
							</div>
							<nav class="navbar">
								<ul class="navbar_menu">
									<li><a href="#modalLoginForm" data-toggle="modal"> Beranda</a> </li>
									<li><a href="#modalLoginForm" data-toggle="modal">Gratis</a></li>
									<li><a href="#modalLoginForm" data-toggle="modal">Termurah</a></li>
									<li><a href="#modalLoginForm" data-toggle="modal">Donasi</a></li>
									<li><a href="#modalregisterform" data-toggle="modal"
											style="color: #F1873B;"><b>daftar</b></a></li>
								</ul>
								<ul class="navbar_user">
									<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								</ul>
								<div class="hamburger_container">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>

		</header>

		<div class="fs_menu_overlay"></div>

		<!-- Hamburger Menu -->

		<div class="hamburger_menu">
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="hamburger_menu_content text-right">
				<ul class="menu_top_nav">
					<li class="menu_item"><a href="#modalLoginForm" data-toggle="modal">beranda</a></li>
					<li class="menu_item"><a href="#modalLoginForm" data-toggle="modal">gratis</a></li>
					<li class="menu_item"><a href="#modalLoginForm" data-toggle="modal">termurah</a></li>
					<li class="menu_item"><a href="#modalLoginForm" data-toggle="modal">jual</a></li>
					<li class="menu_item"><a href="#" style="color: #F1873B;" data-toggle="modal"
							data-target="#modalregisterform"><b>daftar</b></a></li>
				</ul>
			</div>
		</div>

		<!-- Slider -->

		<div class="main_slider" style="background-image:url(<?=base_url();?>assets/user/images/slider__1.jpeg)">
			<div class="container fill_height">
				<div class="row align-items-center fill_height">
					<div class="col">
						<div class="main_slider_content">
							<h2>Barang Menumpuk di Rumah?</h2>
							<h2>Daripada Dibuang, Bagikan Saja di Monza</h2>
							<h5>Berikan pada yang membutuhkan, bersihkan barang bekas di rumah sembari berbagi ke sesama
							</h5>
							<div class="red_button shop_now_button"><a href="#modalLoginForm"
									data-toggle="modal">Bagikan</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Banner -->

		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="banner_item align-items-center"
							style="background-image:url(<?=base_url();?>assets/user/images/banner__1.jpeg)">
							<div class="banner_category">
								<a href="#modalLoginForm" data-toggle="modal">Gratis</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item align-items-center"
							style="background-image:url(<?=base_url();?>assets/user/images/banner__2.jpeg)">
							<div class="banner_category">
								<a href="#modalLoginForm" data-toggle="modal">Termurah</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item align-items-center"
							style="background-image:url(<?=base_url();?>assets/user/images/banner__3.jpeg)">
							<div class="banner_category">
								<a href="#modalLoginForm" data-toggle="modal">Donasi</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Baru ditambahkans -->

		<div class="new_arrivals">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title new_arrivals_title">
							<h2>Baru ditambahkan</h2>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<!-- Product 1 -->
					<div class="col">
						<a href="#modalLoginForm" data-toggle="modal">
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
						</a>
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
					<!-- Product 4 -->
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
					<!-- Product 4 -->
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

		<!-- Benefit -->

		<div class="benefit">
			<div class="container">
				<div class="row benefit_row">
					<div class="col-lg-4 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>Bayar di tempat</h6>
								<p>Ambil Barang Sendiri</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>Jaminan harga termurah</h6>
								<p>Semua dibawah 50 ribu</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-child" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>Donasi</h6>
								<p>Bantu Orang di Sekitarmu</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Event Donasi -->

		<div class="blogs">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title">
							<h2>Donasi</h2>
						</div>
					</div>
				</div>
				<div class="row blogs_container">
					<div class="col-lg-4 blog_item_col">
						<div class="blog_item">
							<div class="blog_background"
								style="background-image:url(<?=base_url();?>assets/user/images/blogg_1.jpg)"></div>
							<div
								class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
								<h4 class="blog_title">Pakaian bekas bagi anak kurang mampu daerah pedalaman</h4>
								<span class="blog_meta">oleh admin | 20 April 2021</span>
								<a class="blog_more" href="#modalLoginForm" data-toggle="modal">Baca</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 blog_item_col">
						<div class="blog_item">
							<div class="blog_background"
								style="background-image:url(<?=base_url();?>assets/user/images/blogg_2.jpg)"></div>
							<div
								class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
								<h4 class="blog_title">Mari berbagi untuk mereka yang hidup di bawah garis kemiskinan
								</h4>
								<span class="blog_meta">oleh admin | 20 April 2021</span>
								<a class="blog_more" href="#">Baca</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 blog_item_col">
						<div class="blog_item">
							<div class="blog_background"
								style="background-image:url(<?=base_url();?>assets/user/images/blogg_3.jpg)"></div>
							<div
								class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
								<h4 class="blog_title">Seragam sekolah bagi anak SD daerah Kalimantan</h4>
								<span class="blog_meta">oleh admin | 20 April 2021</span>
								<a class="blog_more" href="#">Baca</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Modal masuk -->
		<?php
                if ($this->session->flashdata('login')) :
                ?>
		<div class="alert alert-danger" id="alertLogin" role="alert">
			<?= $this->session->flashdata('login') ?>
		</div>
		<?php endif; ?>
		<?php
                if ($this->session->flashdata('gagal')) :
                ?>
		<div class="alert alert-danger" id="alertgagal" role="alert">
			<?= $this->session->flashdata('gagal') ?>
		</div>
		<?php endif; ?>
		<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header center">
						<div class="col-md-4 offset-md-4">
							<center>
								<a href="#"><img src="<?=base_url();?>assets/user/images/logo-log.png" alt=""
										height="85"></a>
								<h4 class="modal-title w-100 font-weight-bold">Masuk</h4>
							</center>
						</div>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body p-5">
						<form action="<?= base_url('daftar/doLogin') ?>" method="POST" id="login-form">
							<div class="row">
								<div class="form-group col-md-12">
									<label for="exampleInputEmail1">Email</label>
									<input type="email" name="email" class="form-control" id="exampleInputEmail1"
										style="color: #1e1e27" aria-describedby="emailHelp">
								</div>
								<br><br><br>
								<div class="form-group col-md-12">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" name="password" class="form-control" style="color: #1e1e27"
										id="exampleInputPassword1">
								</div>

								<div class="form-group col-md-12">
									<button class="btn btn-lg btn-block" style="background-color:#f1873b; color:white;"
										name="masuk" id="masuk">Masuk</button>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer d-flex justify-content-center text-align">
						<p>Belum punya akun?
							<a href="#modalregisterform" data-toggle="modal" data-dismiss="modal"
								style="color:#f1873b">Daftar di sini</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal masuk -->


	<!-- modal daftar -->
	<div class="modal fade" id="modalregisterform">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header center">
					<div class="col-md-4 offset-md-4">
						<center>
							<a href="#"><img src="<?=base_url();?>assets/user/images/logo-log.png" alt="monza"
									height="65"></a>
							<h4 class="modal-title w-100 font-weight-bold">Daftar</h4>
						</center>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="<?= base_url();?>daftar/daftar" enctype="multipart/form-data">
					<div class="modal-body p-5">
						<div class="row">
							<div class="form-group col-md-6 col-12">
								<label>Nama Lengkap</label>
								<input type="text" name="nama" class="form-control nama_lengkapKu"
									style="color: #1e1e27" onkeyup="cekNamaLengkap()">
								<span class="pesan_nama_lengkapKu"></span>
							</div>
							<div class="form-group col-md-6 col-12">
								<label>Nomor Telepon</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<button class="btn btn-secondary" type="button" id="button-addon1"
											disabled>+62</button>
									</div>
									<input type="text" name="nomor" class="form-control nomorKu"
										aria-describedby="addon-wrapping" aria-describedby="inputGroup-sizing-default"
										onkeypress="return isNumberKey(event)" maxlength="13" style="color: #1e1e27"
										onkeyup="cekNoTel()">
								</div>
								<span class="pesan_noTelKu"></span>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 col-12">
								<label>Email</label>
								<input type="email" name="email" class="form-control emailKu" style="color: #1e1e27"
									placeholder="begini@contoh.com" onkeyup="cekEmail()">
								<span class="pesan_emailKu"></span>
							</div>
							<div class="form-group col-md-6 col-12">
								<label>Username</label>
								<input type="text" name="username" class="form-control usernameKu"
									style="color: #1e1e27" onkeyup="cekUsername()">
								<span class="pesan_usernameKu"></span>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 col-12">
								<label>Password</label>
								<input type="password" name="password" class="form-control passwordKu"
									autocomplete="off" style="color: #1e1e27" onkeyup="cekPass()">
								<span class="pesan_passKu"></span>
							</div>
							<div class="form-group col-md-6 col-12">
								<label>Konfirmasi Password</label>
								<input type="password" name="konfirpass" class="form-control konfirpassKu"
									style="color: #1e1e27" onkeyup="cekKonfirPass()">
								<span class="pesan_konfirPassKu"></span>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 col-12">
								<label>Provinsi</label>
								<select class="form-control provinsiKu" style="color: #1e1e27" name="provinsi"
									onchange="cekProvinsi()">
									<option value="" selected disabled>Piih Provinsi</option>
									<?php foreach($provinsi as $prov): ?>
									<option value="<?= $prov->id_provinsi; ?>"><?= $prov->nama; ?></option>
									<?php endforeach; ?>
								</select>
								<span class="pesan_provKu"></span>
							</div>
							<div class="form-group col-md-6 col-12">
								<label for="kota">Kabupaten/Kota</label>
								<select class="form-control kotaKu" name="kota" style="color: #1e1e27"
									onchange="cekKota()">
									<option value="" selected disabled>Pilih Kabupaten/Kota</option>
									<?php foreach ($kota as $kt):?>
									<option value="<?= $kt->id_kota ?>"><?= $kt->nama ?></option>
									<?php endforeach; ?>
								</select>
								<span class="pesan_kotaKu"></span>
							</div>
						</div>
						<center>
							<br><button type="submit" class="btn btn-lg btn-block btn-validasi"
								style="background-color:#f1873b; color:white; cursor: pointer;">Daftar</button>
						</center>
					</div>
				</form>
				<div class="modal-footer d-flex justify-content-center text-align">
					<p>Sudah Punya Akun? <a href="#modalLoginForm" data-toggle="modal" data-dismiss="modal"
							style="color:#f1873b">Masuk di sini</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal daftar -->
