<div class="container single_product_container">
	<div class="row">
		<div class="col">

			<!-- Button back -->

			<button onclick="history.back()" class="btn"
				style="color: #f1873b; background-color: white; cursor: pointer;"><i
					class="fa fa-arrow-left"></i>&nbsp&nbspKembali</button>

		</div>
	</div>

	<div class="row">
		<div class="col-lg-7">
			<div class="single_product_pics">
				<div class="row">
					<div class="col-lg-9 image_col order-lg-2 order-1">
						<div class="single_product_image">
							<div class="single_product_image_background"
								style="background-image:url(<?=base_url();?>assets/user/images/Produk/thumb/<?= $produk->foto_produk ?>)">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="product_details">
				<div class="product_details_title">
					<h2><?= $produk->nama_produk ?></h2>
					<?php if ($produk->kategori_produk == 'F'):?>
					<div class="product_price">Gratis</div>
					<?php elseif ($produk->kategori_produk == 'P'): ?>
					<div class="product_price">Rp <?= $produk->harga_produk ?></div>
					<?php endif; ?>
					<p><?= $produk->desk_produk ?></p>
					<p>Lokasi : <span class="product_price"><?= $produk->kota ?>, <?= $produk->provinsi ?></span></p>
					<!-- <p>Maps : <a href="">https://goo.gl/maps/KJamN6MybWV5Q7WZ6</a></p> -->
					<br>
					<h4 style>Diposting Oleh : <?= $produk->nama_lengkap ?></h4>
					<p>No HP : <span><?= $produk->no_telp ?></span></p>
				</div>
				<a href="https://api.whatsapp.com/send?phone=.62<?=$produk->no_telp?>">
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center" style="color:
						#1e1e27;">
						<span class="fa fa-whatsapp"></span>Hubungi via WhatsApp
					</div>
				</a>
				<!-- <div class="original_price">$629.99</div> -->

				<!-- <ul class="star_rating">
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				</ul> -->
				<!-- <div class="product_color">
					<span>Select Color:</span>
					<ul>
						<li style="background: #e54e5d"></li>
						<li style="background: #252525"></li>
						<li style="background: #60b3f3"></li>
					</ul>
				</div>
				<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
					<span>Quantity:</span>
					<div class="quantity_selector">
						<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
						<span id="quantity_value">1</span>
						<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
					</div>
					<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
					<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
				</div> -->
				<br>
				<div class="alert-danger d-flex align-items-center p-3" role="alert">
					<!-- <svg svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg> -->
					<div>
						<b>Pembayaran hanya via COD.</b> Mohon berhati-hati dalam bertransaksi. Monza hanyalah sarana
						publikasi. Segala kegiatan transaksi diluar tanggung jawab Monza.
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- Tabs -->
