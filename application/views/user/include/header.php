<!DOCTYPE html>
<html lang="en">

<head>
	<title>Monza</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/categories_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/categories_responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/postProduk.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header trans_300">

			<!-- Top Navigation -->

			<!-- Main Navigation -->

			<div class="main_nav_container">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-right">
							<div class="logo_container">
								<a href="#"><img src="<?=base_url();?>assets/user/images/logo-nav.png" alt="monza"
										height="36"></a>
							</div>
							<nav class="navbar">
								<ul class="navbar_menu">
									<li><a href="<?= base_url(); ?>beranda">Beranda</a></li>
									<li><a href="<?= base_url(); ?>produkgratis">Gratis</a></li>
									<li><a href="<?= base_url(); ?>produkmurah">Termurah</a></li>
									<li><a href="<?= base_url(); ?>donasi">Donasi</a></li>
									<li><a
											href="<?= base_url('postproduk/'.$this->session->userdata('id_user')); ?>">Jual</a>
									</li>
								</ul>
								<!-- <ul class="navbar_user">
									<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
									</li>
									<li class="dropdown">
										<a href="#" data-toggle="dropdown"
											class="nav-link dropdown-toggle nav-link-sm nav-link-user">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
										<div class="dropdown-menu">
											<a href="" class="dropdown-item">Profil</a>
											<div class="dropdown-divider"></div>
											<a href="" class="dropdown-item text-danger">Keluar</a>
										</div>
									</li>
									</li>
								</ul> -->

								<!-- <ul class="navbar_user navbar-right">
									<li class="nav-item">
										<h6>
											<a href="" class="nav-link nav-link-lg">
												<i class="fa fa-user"></i>
											</a>
										</h6>
									</li>
									<li class="nav-item dropdown"><a href="#" data-toggle="dropdown"
											class="nav-link dropdown-toggle" id="navbarDropdownMenuLink">
											Hai
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a href="" class="dropdown-item">
												Profil
											</a>
											<a href="" class="dropdown-item">
												Keluar
											</a>
										</div>
									</li>
								</ul> -->
								<ul class="navbar-menu">
									<li class="nav-item dropdown dropleft">
										<a class="nav-link dropdown-toggle dropleft" href="#"
											id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false" style="color: #1e1e27">
											<i
												class="fa fa-user"></i>&nbsp&nbspHai,&nbsp<?= $this->session->userdata('username') ?>
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a class="dropdown-item"
												href="<?= base_url('profil/'.$this->session->userdata('id_user')) ?>">Profil</a>
											<a href="<?=base_url('user/logout')?>" class="dropdown-item">Keluar</a>
										</div>
									</li>
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
					<li class="menu_item"><a href="#">beranda</a></li>
					<li class="menu_item"><a href="#">gratis</a></li>
					<li class="menu_item"><a href="#">termurah</a></li>
					<li class="menu_item"><a href="#">jual</a></li>
				</ul>
			</div>
		</div>
