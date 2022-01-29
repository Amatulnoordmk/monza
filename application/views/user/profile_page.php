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

					<a href="#" class="btn btn-warning"><span class="ti-pencil"></span></a>
					<a href="#" class="btn btn-danger"><span class="ti-trash"></span></a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card" style="width: 15rem;">
				<img src="<?=base_url();?>assets/user/images/add-sign.jpg" class="card-img-top" height="230">
				<div class="card-body">
					<h5 class="card-title">Tambah Barang</h5>
					<p class="card-test">
						<Gratis><span class="product_price"></span>
							<br>

					</p>

					<a href="<?= base_url(); ?>postproduk" class="btn btn-primary">Tambah </a>
				</div>
			</div>
		</div>
	</div>
	<br>
	<h3>List Donasi/Campaign Anda</h3>
	<div class="row">
		<div class="col-sm-3">
			<div class="card" style="width: 15rem;">
				<img src="<?=base_url();?>assets/user/images/single_1.jpg" class="card-img-top" height="200">
				<div class="card-body">
					<h5 class="card-title">Kumpulkan baju bekas anda untuk anak-anak di Panti Asuhan A</h5>
					<p class="card-text"><span class="ti-time"></span>20 Maret 2022
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
					<h5 class="card-title">Kumpulkan baju bekas anda untuk anak-anak di Panti Asuhan A</h5>
					<p class="card-text"><span class="ti-time"></span>20 Maret 2022
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
					<h5 class="card-title">Kumpulkan baju bekas anda untuk anak-anak di Panti Asuhan A</h5>
					<p class="card-text"><span class="ti-time"></span>20 Maret 2022
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
				<img src="<?=base_url();?>assets/user/images/add-sign.jpg" class="card-img-top" height="200">
				<div class="card-body">
					<h5 class="card-title">Tambah Donasi/Campaign</h5>
					<p class="card-test">
						<Gratis><span class="product_price"></span>
							<br>

					</p>

					<a href="<?= base_url(); ?>postevent" class="btn btn-primary">Tambah </a>
				</div>
			</div>
		</div>
	</div>
</div>

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
			</div>
		</div>
	</div>
</div>

<!-- end modal regist -->
