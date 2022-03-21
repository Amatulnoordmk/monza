<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/pesan.css">

<div class="container single_product_container">
	<!-- Alert berhasil Hapus-->
	<?php if($this->session->flashdata('hapus-produk')): ?>
	<div class="alert alert-success" role="alert">
		<h6><?= $this->session->flashdata('hapus-produk') ?></h6>
	</div>
	<?php elseif($this->session->flashdata('hapus-event')): ?>
	<div class="alert alert-success" role="alert">
		<h6><?= $this->session->flashdata('hapus-event') ?></h6>
	</div>
	<?php elseif ($this->session->flashdata('gagalUpload')): ?>
	<div class="alert alert-danger" id="alertgagal" role="alert">
		<?= $this->session->flashdata('gagalUpload') ?>
	</div>
	<?php endif; ?>
	<!-- end alert -->

	<div class="col text-center">
		<div class="section_title new_arrivals_title">
			<h3>Profil Anda</h3>
		</div>
	</div>
	<br><br><br>

	<div class="row">
		<div class="col-sm-12 col-md-4 col-md-4">
			<!-- Profil -->
			<div class="card">
				<img class="card-img-top" src="<?=base_url();?>assets/user/images/user.png" alt="Foto profil">
				<div class="card-body">
					<div class="text-center">
						<h5 class="card-title"><?= $user->nama_lengkap ?></h5>
						<p class="card-text">
							<td><span class="ti-location-pin"></span> <?= $user->provinsi?>, <?= $user->kota  ?></td>
						</p>
						<p class="card-text">
							<td><span class="fa fa-whatsapp"></span> <?= $user->no_telp ?></td>
						</p>
						<a href="#modaleditprofil" data-toggle="modal" type="button" class="btn btn-sm btn-block"
							style="background-color:#f1873b; color:white;">Edit Profil</a>
					</div>
				</div>
			</div>

			<!-- Chat ke Admin -->
			<div class="card" style="overflow: auto; height: 40;">
				<div class="chat">
					<div class="chat-header clearfix">
						<div class="row">
							<div class="col">
								<!-- <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar"> -->
								<span class="align-self-center">Admin</span>
							</div>
						</div>
					</div>
					<div class="chat-history">
						<ul class="m-b-0">
							<?php foreach($pesan as $p): ?>
							<?php if($p->id_pengirim == 2): ?>
							<li class="clearfix">
								<div class="message-data">
									<span class="message-data-time">
										<?php
										$old_date_timestamp = strtotime($p->waktu_kirim);
										$new_date = date('d-m-Y H:i:s', $old_date_timestamp);
										echo $new_date;	
										?>
									</span>
								</div>
								<div class="message my-message"><?= $p->pesan ?></div>
							</li>
							<?php else: ?>
							<li class="clearfix">
								<div class="message-data text-right">
									<span class="message-data-time">
										<?php
										$old_date_timestamp = strtotime($p->waktu_kirim);
										$new_date = date('d-m-Y H:i:s', $old_date_timestamp);
										echo $new_date;	
										?>
									</span>
									<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
								</div>
								<div class="message other-message float-right"><?= $p->pesan?></div>
							</li>
							<?php endif; ?>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="chat-message clearfix">
						<form method="POST" action="<?= base_url('user/kirimPesan/'.$user->id_user)?>"
							enctype="multipart/form-data">
							<div class="form-group mb-0">
								<div class="input-group">
									<div class="input-group-prepend">
										<button class="btn" style="background-color: #f1873b; color:white;"
											type="submit">
											<i class="fa fa-send"></i>
										</button>
									</div>
									<input type="text" class="form-control" name="pesan"
										placeholder="Tulis pesan disini..." autocomplete="off">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Tampilan Produk dan Event -->
		<div class="col-sm-12 col-md-8 col-lg-8">
			<!-- <a href="<?=base_url('postproduk/'.$user->id_user)?>" class="btn btn-outline-warning float-right"
				style="color:#f1873b;" type="button">Bagikan</a> -->

			<!-- Nav -->
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#tabBarang" role="tab"
						aria-controls="home" aria-selected="true" style="color: #f1873b;">Barang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabEvent" role="tab"
						aria-controls="profile" aria-selected="false" style="color: #f1873b;">Donasi</a>
				</li>
			</ul>

			<div class="tab-content mt-3" id="myTabContent">
				<div class="tab-pane fade show active" id="tabBarang" role="tabpanel" aria-labelledby="home-tab">
					<!-- <div class="product_sorting_container product_sorting_container_top">
						<ul class="product_sorting">
							<li>
								<span class="type_sorting_text">Filter</span>
								<i class="fa fa-angle-down"></i>
								<ul class="sorting_type">
									<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>
										<span>Gratis</span></li>
									<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
										<span>Termurah</span></li>
								</ul>
							</li>
						</ul>
					</div> -->
					<!-- Tampilan Produk yang Di posting -->
					<div class="row">
						<!-- Product 1 -->
						<?php foreach($produk as $pro) : ?>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<a href="<?= base_url(); ?>editproduk/<?= $pro->id_produk ?>">
								<div class="product-itm">
									<div class="product_image">
										<img src="<?=base_url();?>assets/user/images/Produk/thumb/<?= $pro->foto_produk ?>"
											alt="produk">
									</div>
									<div class="favorite favorite_left"></div>
									<div class="product_bubble d-flex flex-column align-items-center">
										<a role="button" data-toggle="modal"
											data-target="#hapusproduk<?= $pro->id_produk ?>">
											<i class="fa fa-trash" style="font-size:30px;color:red"></i>
										</a>
									</div>
									<div class="product_info">
										<h6 class="product_name"><a href="#"><?= $pro->nama_produk ?></a>
										</h6>
										<?php if ($pro->kategori_produk == 'F'):?>
										<div class="product_price">Gratis</div>
										<p><small><?= $pro->kota ?>, <?= $pro->provinsi ?></small></p>
										<?php elseif ($pro->kategori_produk == 'P'):?>
										<div class="product_price">Rp <?= number_format($pro->harga_produk) ?></div>
										<p><small><?= $pro->kota ?>, <?= $pro->provinsi ?></small></p>
										<?php endif; ?>
									</div>
								</div>
							</a>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<!-- Tampilan Event yang Di posting -->
				<div class="tab-pane fade" id="tabEvent" role="tabpanel" aria-labelledby="profile-tab">
					<div class="row">
						<!-- Product 1 -->
						<?php foreach($event as $ev) : ?>
						<div class="col-md-4">
							<a href="<?= base_url();?>user/editEvent_page/<?=$ev->id_event?>">
								<div class="product-itm">
									<div class="product_image">
										<img src="<?=base_url();?>assets/user/images/Event/<?= $ev->foto_event ?>"
											alt="produk">
									</div>
									<div class="favorite favorite_left"></div>
									<div class="product_bubble d-flex flex-column align-items-center">
										<a role="button" data-toggle="modal"
											data-target="#hapusevent<?= $ev->id_event ?>">
											<i class="fa fa-trash" style="font-size:30px;color:red"></i>
										</a>
									</div>
									<div class="product_info">
										<h6 class="product_name"><a href="#"><?= $ev->nama_event ?></a>
										</h6>
									</div>
								</div>
							</a>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<!-- </div> -->
		</div>
	</div>

	<!-- modal edit profil -->
	<div class="modal fade" id="modaleditprofil">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header center">
					<div class="col-md-4 offset-md-4">
						<center>
							<a href="#"><img src="<?=base_url();?>assets/user/images/logo-log.png" alt=""
									height="65"></a>
							<h4 class="modal-title w-100 font-weight-bold">Edit Profil
							</h4>
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
										value="<?= substr($user->no_telp, 1, 15) ?>" aria-describedby="addon-wrapping"
										aria-describedby="inputGroup-sizing-default"
										onkeypress="return isNumberKey(event)" maxlength="13" style="color: #1e1e27">
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
									<option value="" selected disabled>
										<?= $user->provinsi; ?></option>
									<?php foreach($provinsi as $prov): ?>
									<option value="<?= $prov->id_provinsi; ?>">
										<?= $prov->nama; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-md-6 col-12">
								<label for="kota">Kabupaten/Kota</label>
								<select class="form-control" id="kota" name="kota" style="color: #1e1e27">
									<option value="" selected disabled>
										<?= $user->kota; ?></option>
									<?php foreach($kota as $k): ?>
									<option value="<?= $k->id_kota ?>"><?= $k->nama ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<center>
							<br><button type="submit" class="btn btn-lg btn-block"
								style="background-color:#f1873b; color:white;">Simpan
								Perubahan</button>
						</center>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- modal hapus produk -->
	<?php foreach ($produk as $pro): ?>
	<div class="modal fade" id="hapusproduk<?= $pro->id_produk ?>" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"></h5>
				</div>
				<form action="" method="post">
					<div class="modal-body text-center">
						<h1 class="text-danger mb-5">Apakah Anda Yakin?</h1>
						<h5>Produk yang sudah dihapus tidak akan bisa dipulihkan lagi</h5>
						<div class="form-group">
							<input type="text" class="form-control" name="idproduk" hidden>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
						<a href="<?=base_url();?>user/hapusProduk/<?= $pro->id_produk ?>" type="button"
							class="btn btn-danger" style="color: white;">Hapus</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
	<!-- end modal -->

	<!-- modal hapus event -->
	<?php foreach ($event as $key): ?>
	<div class="modal fade" id="hapusevent<?= $key->id_event; ?>" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"></h5>
				</div>
				<form action="" method="post">
					<div class="modal-body text-center">
						<h1 class="text-danger mb-5">Apakah Anda Yakin?</h1>
						<h5>Event yang sudah dihapus tidak akan bisa dipulihkan lagi</h5>
						<div class="form-group">
							<input type="text" class="form-control" name="idproduk" hidden>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
						<a href="<?=base_url();?>user/hapusEvent/<?=$key->id_event?>" type="button"
							class="btn btn-danger" style="color: white;">Hapus</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
	<!-- end modal -->
