<!-- Slider -->
<div class="main_slider" style="background-image:url(<?=base_url();?>assets/user/images/slider__1.jpeg)">
	<div class="container fill_height">
		<!-- Alert berhasil  Login-->
		<?php if($this->session->flashdata('login')): ?>
		<div class="alert alert-success" role="alert">
			<h6><?= $this->session->flashdata('login') ?></h6>
		</div>
		<?php endif; ?>
		<!-- end alert -->
		<div class="row align-items-center fill_height">
			<div class="col">
				<div class="main_slider_content">
					<h2>Barang Menumpuk di Rumah?</h2>
					<h2>Daripada Dibuang, Bagikan Saja di Monza</h2>
					<h5>Berikan pada yang membutuhkan, bersihkan barang bekas di rumah sembari berbagi ke sesama</h5>
					<div class="red_button shop_now_button"><a
							href="<?= base_url('postproduk/'.$this->session->userdata('id_user')); ?>">Bagikan</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Slider Kategori -->

<center>
	<div class="container mt-4">
		<h2 class="text-center">Kategori</h2>
		<div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-6 col-md-2 col-lg-2">
							<img class="d-block" src="<?=base_url();?>assets/user/images/icon/book.png" alt="buku"
								width="100">
							<p>Buku & Majalah</p>
						</div>
						<div class="col-sm-6 col-md-2 col-lg-2">
							<img class="d-block" src="<?=base_url();?>assets/user/images/icon/gadget.png"
								alt="elektronik" width="100">
							<p>Elektronik</p>
						</div>
						<div class=" col-sm-6 col-md-2 col-lg-2">
							<img class="d-block" src="<?=base_url();?>assets/user/images/icon/clothes.png" alt="pakaian"
								width="100">
							<p>Pakaian</p>
						</div>
						<div class="col-sm-6 col-md-2 col-lg-2">
							<img class="d-block" src="<?=base_url();?>assets/user/images/icon/sport.png" alt="olahraga"
								width="100">
							<p>Hobi & Olahraga</p>
						</div>
						<div class="col-sm-6 col-md-2 col-lg-2">
							<img class="d-block" src="<?=base_url();?>assets/user/images/icon/stationery.png"
								alt="perlengkapan_sekolah" width="100">
							<p>Perlengkapan Sekolah</p>
						</div>
						<div class="col-sm-6 col-md-2 col-lg-2">
							<img class="d-block" src="<?=base_url();?>assets/user/images/icon/household.png"
								alt="perlengkapan_rumah_tangga" width="100">
							<p>Rumah Tangga</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</center>

<!-- END slider kategori -->

<!-- Banner -->

<div class="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="banner_item align-items-center"
					style="background-image:url(<?=base_url();?>assets/user/images/banner__1.jpeg)">
					<div class="banner_category">
						<a href="<?= base_url(); ?>produkgratis">Gratis</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="banner_item align-items-center"
					style="background-image:url(<?=base_url();?>assets/user/images/banner__2.jpeg)">
					<div class="banner_category">
						<a href="<?= base_url(); ?>produkmurah">Termurah</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="banner_item align-items-center"
					style="background-image:url(<?=base_url();?>assets/user/images/banner__3.jpeg)">
					<div class="banner_category">
						<a href="<?= base_url(); ?>donasi">Donasi</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Baru ditambahkan -->

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
			<?php foreach ($produk as $produk): ?>
			<!-- Product 1 -->
			<div class="col-md-3 col-lg-3">
				<a href="<?=base_url();?>detailproduk/<?= $produk->id_produk ?>">
					<div class="product-itm">
						<div class=" product_image">
							<img src="<?=base_url();?>assets/user/images/Produk/thumb/<?= $produk->foto_produk ?>"
								alt="">
						</div>
						<div class="favorite favorite_left"></div>
						<div class="product_info">
							<h6 class="product_name"><a
									href="<?=base_url();?>detailproduk"><?= $produk->nama_produk ?></a></h6>
							<?php if ($produk->kategori_produk == 'F'): ?>
							<div class="product_price">Gratis</div>
							<p><small><?= $produk->kota ?>, <?= $produk->provinsi ?></small></p>
							<?php elseif ($produk->kategori_produk == 'P'): ?>
							<div class="product_price"><?= $produk->harga_produk ?></div>
							<p><small><?= $produk->kota ?>, <?= $produk->provinsi ?></small></p>
							<?php endif; ?>
						</div>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
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
			<?php foreach ($event as $event): ?>
			<div class="col-md-4 col-lg-4 blog_item_col">
				<div class="blog_item">
					<div class="blog_background"
						style="background-image:url(<?=base_url();?>assets/user/images/Event/<?= $event->foto_event ?>">
					</div>
					<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
						<h4 class="blog_title"><?= $event->nama_event ?></h4>
						<span class="blog_meta">oleh admin | <?= $event->waktu_mulai?></span>
						<a class="blog_more" href="<?=base_url();?>detailevent/<?= $event->id_event ?>">Lihat</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
