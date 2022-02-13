<div class="container product_section_container">
	<div class="row">
		<div class="col product_section clearfix">

			<!-- Breadcrumbs -->

			<div class="breadcrumbs d-flex flex-row align-items-center">
				<ul>
					<li>Beranda</li>
					<li class="active"><i class="fa fa-angle-right" aria-hidden="true"></i>Barang Gratis</li>
				</ul>
			</div>

			<!-- Sidebar -->

			<div class="sidebar">
				<div class="sidebar_section">
					<div class="sidebar_title">
						<h5>Kategori produk</h5>
					</div>
					<ul class="sidebar_categories">
						<li
							class="<?php if(current_url() == base_url('User/kategori/'.$jenis_produk = 'Elektronik')){?>active<?php } ?>">
							<a href="<?= base_url('User/kategori/'.$jenis_produk = 'Elektronik')?>">Elektronik</a></li>
						<li
							class="<?php if(current_url() == base_url('User/kategori/'.$jenis_produk = 'Pakaian')){?>active<?php } ?>">
							<a href="<?= base_url('User/kategori/'.$jenis_produk = 'Pakaian')?>">Pakaian</a>
						</li>
						<li
							class="<?php if(current_url() == base_url('User/kategori/'.$jenis_produk = 'RumahTangga')){?>active<?php } ?>">
							<a href="<?= base_url('User/kategori/'.$jenis_produk = 'RumahTangga')?>">Rumah tangga</a>
						</li>
						<li
							class="<?php if(current_url() == base_url('User/kategori/'.$jenis_produk = 'Buku')){?>active<?php } ?>">
							<a href="<?= base_url('User/kategori/'.$jenis_produk = 'Buku')?>">Buku & Majalah</a></li>
						<li
							class="<?php if(current_url() == base_url('User/kategori/'.$jenis_produk = 'Sekolah')){?>active<?php } ?>">
							<a href="<?= base_url('User/kategori/'.$jenis_produk = 'Sekolah')?>">Perlengkapan
								Sekolah</a></li>
						<li
							class="<?php if(current_url() == base_url('User/kategori/'.$jenis_produk = 'Hobi')){?>active<?php } ?>">
							<a href="<?= base_url('User/kategori/'.$jenis_produk = 'Hobi')?>">Hobi & Olahraga</a>
						</li>
						<li
							class="<?php if(current_url() == base_url('User/kategori/'.$jenis_produk = 'Lainnya')){?>active<?php } ?>">
							<a href="<?= base_url('User/kategori/'.$jenis_produk = 'Lainnya')?>">Lainnya</a></li>
					</ul>
				</div>

				<!-- Price Range Filtering -->
				<!-- <div class="sidebar_section">
					<div class="sidebar_title">
						<h5>Filter by Price</h5>
					</div>
					<p>
						<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
					</p>
					<div id="slider-range"></div>
					<div class="filter_button"><span>filter</span></div>
				</div> -->

				<!-- Sizes -->
				<!-- <div class="sidebar_section">
					<div class="sidebar_title">
						<h5>Sizes</h5>
					</div>
					<ul class="checkboxes">
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>S</span></li>
						<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>M</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>L</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XL</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XXL</span></li>
					</ul>
				</div> -->

				<!-- Color -->
				<!-- <div class="sidebar_section">
					<div class="sidebar_title">
						<h5>Color</h5>
					</div>
					<ul class="checkboxes">
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Black</span></li>
						<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Pink</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
						<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Orange</span></li>
					</ul>
					<div class="show_more">
						<span><span>+</span>Show More</span>
					</div>
				</div> -->

			</div>
			<script>
				$(document).ready(function () {
					function filter_data(page) {
						$('$filter_data').html("<div id='loading'></div>");
						var action = 'fetch_data';
						var jenis_produk = get_filter('jenis_produk')
					}

					function get_filter(class_name) {
						var filter = [];
						$('.' + )
					}
				});

			</script>
