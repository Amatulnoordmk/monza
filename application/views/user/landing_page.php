<!DOCTYPE html>
<html lang="en">

<head>
	<title>Monza</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
								<a href="#"><img src="<?=base_url();?>assets/user/images/logo-nav.png" alt=""
										height="36"></a>
							</div>
							<nav class="navbar">
								<ul class="navbar_menu">
									<li><a href="#">beranda</a></li>
									<li><a href="#">gratis</a></li>
									<li><a href="#">termurah</a></li>
									<li><a href="#">jual</a></li>
									<li><a href="#" style="color: #F1873B;"><b>masuk</b></a></li>
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
					<li class="menu_item"><a href="#">beranda</a></li>
					<li class="menu_item"><a href="#">gratis</a></li>
					<li class="menu_item"><a href="#">termurah</a></li>
					<li class="menu_item"><a href="#">jual</a></li>
					<li class="menu_item"><a href="#" style="color: #F1873B;"><b>masuk</b></a></li>
				</ul>
			</div>
		</div>

		<!-- Slider -->

		<div class="main_slider" style="background-image:url(<?=base_url();?>assets/user/images/slider_1.jpg)">
			<div class="container fill_height">
				<div class="row align-items-center fill_height">
					<div class="col">
						<div class="main_slider_content">
							<h6>Spring / Summer Collection 2017</h6>
							<h1>Get up to 30% Off New Arrivals</h1>
							<div class="red_button shop_now_button"><a href="#">shop now</a></div>
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
							style="background-image:url(<?=base_url();?>assets/user/images/banner_1.jpg)">
							<div class="banner_category">
								<a href="categories.html">Gratis</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item align-items-center"
							style="background-image:url(<?=base_url();?>assets/user/images/banner_2.jpg)">
							<div class="banner_category">
								<a href="categories.html">Termurah</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="banner_item align-items-center"
							style="background-image:url(<?=base_url();?>assets/user/images/banner_3.jpg)">
							<div class="banner_category">
								<a href="categories.html">Donasi</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- New Arrivals -->

		<div class="new_arrivals">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title new_arrivals_title">
							<h2>New Arrivals</h2>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col text-center">
						<div class="new_arrivals_sorting">
							<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
								<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"
									data-filter="*">all</li>
								<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
									data-filter=".women">women's</li>
								<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
									data-filter=".accessories">accessories</li>
								<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
									data-filter=".men">men's</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="product-grid"
							data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

							<!-- Product 1 -->

							<div class="product-item men">
								<div class="product discount product_filter">
									<div class="product_image">
										<img src="images/product_1.png" alt="">
									</div>
									<div class="favorite favorite_left"></div>
									<div
										class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
										<span>-$20</span></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital
												Camera (Silver)</a></h6>
										<div class="product_price">$520.00<span>$590.00</span></div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>

							<!-- Product 2 -->

							<div class="product-item women">
								<div class="product product_filter">
									<div class="product_image">
										<img src="images/product_2.png" alt="">
									</div>
									<div class="favorite"></div>
									<div
										class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
										<span>new</span></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved
												27-Inch FHD Monitor</a></h6>
										<div class="product_price">$610.00</div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>

							<!-- Product 3 -->

							<div class="product-item women">
								<div class="product product_filter">
									<div class="product_image">
										<img src="images/product_3.png" alt="">
									</div>
									<div class="favorite"></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout
												Edition</a></h6>
										<div class="product_price">$120.00</div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>

							<!-- Product 4 -->

							<div class="product-item accessories">
								<div class="product product_filter">
									<div class="product_image">
										<img src="images/product_4.png" alt="">
									</div>
									<div
										class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
										<span>sale</span></div>
									<div class="favorite favorite_left"></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo
												Thermal Label Printer</a></h6>
										<div class="product_price">$410.00</div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>

							<!-- Product 5 -->

							<div class="product-item women men">
								<div class="product product_filter">
									<div class="product_image">
										<img src="images/product_5.png" alt="">
									</div>
									<div class="favorite"></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold &
												Grey</a></h6>
										<div class="product_price">$180.00</div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>

							<!-- Product 6 -->

							<div class="product-item accessories">
								<div class="product discount product_filter">
									<div class="product_image">
										<img src="images/product_6.png" alt="">
									</div>
									<div class="favorite favorite_left"></div>
									<div
										class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
										<span>-$20</span></div>
									<div class="product_info">
										<h6 class="product_name"><a href="#single.html">Fujifilm X100T 16 MP Digital
												Camera (Silver)</a></h6>
										<div class="product_price">$520.00<span>$590.00</span></div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>

							<!-- Product 7 -->

							<div class="product-item women">
								<div class="product product_filter">
									<div class="product_image">
										<img src="images/product_7.png" alt="">
									</div>
									<div class="favorite"></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved
												27-Inch FHD Monitor</a></h6>
										<div class="product_price">$610.00</div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>

							<!-- Product 8 -->

							<div class="product-item accessories">
								<div class="product product_filter">
									<div class="product_image">
										<img src="images/product_8.png" alt="">
									</div>
									<div class="favorite"></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout
												Edition</a></h6>
										<div class="product_price">$120.00</div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>

							<!-- Product 9 -->

							<div class="product-item men">
								<div class="product product_filter">
									<div class="product_image">
										<img src="images/product_9.png" alt="">
									</div>
									<div
										class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
										<span>sale</span></div>
									<div class="favorite favorite_left"></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo
												Thermal Label Printer</a></h6>
										<div class="product_price">$410.00</div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>

							<!-- Product 10 -->

							<div class="product-item men">
								<div class="product product_filter">
									<div class="product_image">
										<img src="images/product_10.png" alt="">
									</div>
									<div class="favorite"></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold &
												Grey</a></h6>
										<div class="product_price">$180.00</div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Deal of the week -->

		<!-- Best Sellers -->

		<!-- Benefit -->

		<div class="benefit">
			<div class="container">
				<div class="row benefit_row">
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>free shipping</h6>
								<p>Suffered Alteration in Some Form</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>cach on delivery</h6>
								<p>The Internet Tend To Repeat</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>45 days return</h6>
								<p>Making it Look Like Readable</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 benefit_col">
						<div class="benefit_item d-flex flex-row align-items-center">
							<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
							<div class="benefit_content">
								<h6>opening all week</h6>
								<p>8AM - 09PM</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Blogs -->

		<div class="blogs">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title">
							<h2>Blog</h2>
						</div>
					</div>
				</div>
				<div class="row blogs_container">
					<div class="col-lg-4 blog_item_col">
						<div class="blog_item">
							<div class="blog_background"
								style="background-image:url(<?=base_url();?>assets/user/images/blog_1.jpg)"></div>
							<div
								class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
								<h4 class="blog_title">Here are the trends I see coming this fall</h4>
								<span class="blog_meta">by admin | dec 01, 2017</span>
								<a class="blog_more" href="#">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 blog_item_col">
						<div class="blog_item">
							<div class="blog_background"
								style="background-image:url(<?=base_url();?>assets/user/images/blog_2.jpg)"></div>
							<div
								class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
								<h4 class="blog_title">Here are the trends I see coming this fall</h4>
								<span class="blog_meta">by admin | dec 01, 2017</span>
								<a class="blog_more" href="#">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 blog_item_col">
						<div class="blog_item">
							<div class="blog_background"
								style="background-image:url(<?=base_url();?>assets/user/images/blog_3.jpg)"></div>
							<div
								class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
								<h4 class="blog_title">Here are the trends I see coming this fall</h4>
								<span class="blog_meta">by admin | dec 01, 2017</span>
								<a class="blog_more" href="#">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
