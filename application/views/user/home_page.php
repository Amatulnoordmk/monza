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
<style type="text/css">
	td {
		padding: 0 15px;
		text-align: center;
	}

</style>
<div class="container">
	<h3>Kategori</h3>
	<table style="margin-left:auto;margin-right:auto;">
		<tr>
			<td class="ml-2"><a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Elektronik')?>"><img
						src="<?=base_url();?>assets/user/images/icon/electronic.png" alt="elektronik"
						style="height:75px"></a></td>
			<td class="ml-2"><a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Pakaian')?>"><img
						src="<?=base_url();?>assets/user/images/icon/pakaian.png" alt="pakaian" style="height:75px"></a>
			</td>
			<td class="ml-2"><a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Buku')?>"><img
						src="<?=base_url();?>assets/user/images/icon/buku.png" alt="buku" style="height:75px"></a></td>
			<td class="ml-2"><a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'RumahTangga')?>"><img
						src="<?=base_url();?>assets/user/images/icon/rumah.png" alt="rumah" style="height:75px"></a>
			</td>
			<td class="ml-2"><a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Sekolah')?>"><img
						src="<?=base_url();?>assets/user/images/icon/sekolah.png" alt="sekolah" style="height:75px"></a>
			</td>
			<td class="ml-2"><a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Hobi')?>"><img
						src="<?=base_url();?>assets/user/images/icon/olahraga.png" alt="olahraga"
						style="height:75px"></a>
			</td>
			<td class="ml-2"><a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Lainnya')?>"><img
						src="<?=base_url();?>assets/user/images/icon/lainlain.png" alt="lainlain"
						style="height:75px"></a>
			</td>
		</tr>
		<tr>
			<td class="ml-2">Elektronik</td>
			<td class="ml-2">Pakaian</td>
			<td class="ml-2">Buku & Majalah</td>
			<td class="ml-2">Rumah Tangga</td>
			<td class="ml-2">Peralatan Sekolah</td>
			<td class="ml-2">Hobi & Olahraga</td>
			<td class="ml-2">Lainnya</td>
		</tr>
	</table>
	<!-- <a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Elektronik')?>"><img
			src="<?=base_url();?>assets/user/images/icon/electronic.png" alt="elektronik" style="height:75px"></a>
	<a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Pakaian')?>"><img
			src="<?=base_url();?>assets/user/images/icon/pakaian.png" alt="pakaian" style="height:75px"></a>
	<a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Buku')?>"><img
			src="<?=base_url();?>assets/user/images/icon/buku.png" alt="buku" style="height:75px"></a>
	<a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'RumahTangga')?>"><img
			src="<?=base_url();?>assets/user/images/icon/rumah.png" alt="rumah" style="height:75px"></a>
	<a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Sekolah')?>"><img
			src="<?=base_url();?>assets/user/images/icon/sekolah.png" alt="sekolah" style="height:75px"></a>
	<a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Hobi')?>"><img
			src="<?=base_url();?>assets/user/images/icon/olahraga.png" alt="olahraga" style="height:75px"></a>
	<a href="<?= base_url('User/kategori_all/'.$jenis_produk = 'Lainnya')?>"><img
			src="<?=base_url();?>assets/user/images/icon/lainlain.png" alt="lainlain" style="height:75px"></a> -->

</div>
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
							<img src="<?=base_url();?>assets/user/images/Produk/<?= $produk->foto_produk ?>" alt="">
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
