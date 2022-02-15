<div class="container single_product_container">
	<div class="row">
		<div class="col">
			<!-- Breadcrumbs -->
			<!-- <div class="breadcrumbs d-flex flex-row align-items-center">
				<ul>
					<li><a href="index.html">Beranda</a></li>
					<li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pakaian</a></li>
					<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Pakaian Pria</a></li>
				</ul>
			</div> -->
			<button onclick="history.back()" class="btn"
				style="color: #f1873b; background-color: white; cursor: pointer;"><i
					class="fa fa-arrow-left"></i>&nbsp&nbspKembali</button>
		</div>
	</div>

	<div class="col text-center">
		<div class="section_title new_arrivals_title">
			<h3>Tambah Campaign Donasi yang Ingin Diadakan</h3>
		</div>
	</div>

	<form action="<?= base_url('user/uploadevent/'.$user->id_user) ?>" method="post" enctype="multipart/form-data">
		<br><br><br>
		<div class="form-group">
			<label>
				<h5><b>Nama Campaign Donasi<b style="color:red;">*</b></b></h5>
			</label>
			<input type="text" class="form-control" name="nama_event" style="color: #1e1e27" required>
		</div>

		<div class="form-group">
			<br>
			<label>
				<h5><b>Gambar Campaign Donasi <b style="color:red;">*</b></b></h5>
			</label>
			<input type="file" class="form-control" name="foto_event" style="color: #1e1e27" required>
			<small class="form-text text-danger">Jenis file yang diterima adalah png, jpg, dan jpeg</small>
		</div>


		<div class="form-group">
			<label for="jenis_barang">
				<h5><b>Jenis Donasi yang Ingin Dikumpulkan <b style="color:red;">*</b></b></h5>
			</label>
			<select class="form-control" name="jenis_barang" style="color: #1e1e27" required>
				<option style="color:black" selected disabled required>Piih Jenis Barang</option>
				<option value="Pakaian">Pakaian</option>
				<option value="Elektronik">Elektronik</option>
				<option value="Buku">Buku & Majalah</option>
				<option value="RumahTangga">Rumah tangga</option>
				<option value="Hobi">Hobi & Olahraga</option>
				<option value="Sekolah">Perlengkapan Sekolah</option>
				<option value="Lainnya">Lainnya</option>
			</select>
		</div>
		<div class="form-group">
			<br>
			<label>
				<h5><b>Stok yang Dibutuhkan <b style="color:red;">*</b></b></h5>
			</label>
			<input type="text" class="form-control" name="stok_produk" placeholder="contoh: 23" style="color: #1e1e27"
				onkeypress="return isNumberKey(event)" required>
		</div>

		<div class="form-group">
			<br>
			<label>
				<h5><b>Batas Waktu Pengumpulan Barang <b style="color:red;">*</b></b></h5>
			</label>
			<input type="date" class="form-control" name="deadline_event" style="color: #1e1e27" required>
		</div>

		<div class="form-group">
			<br>
			<label>
				<h5><b>Proposal Acara <b style="color:red;">*</b></b></h5>
			</label>
			<input type="file" class="form-control" name="proposal" style="color: #1e1e27" required>
		</div>

		<div class="form-group">
			<br>
			<label>
				<h5><b>Nama Penyelenggara <b style="color:red;">*</b></b></h5>
			</label>
			<input type="text" class="form-control" name="nama_penyelenggara" style="color: #1e1e27" required>
			<small class="form-text text-danger">Dapat diisi menggunakan nama individu maupun kelompok</small>

		</div>

		<div class="form-group">
			<br>
			<label>
				<h5><b>Foto KTP Penanggungjawab <b style="color:red;">*</b></b></h5>
			</label>
			<input type="file" class="form-control" name="foto_ktp" style="color: #1e1e27" required>
			<small class="form-text text-danger">Jenis file yang diterima adalah png, jpg, dan jpeg</small>
		</div>

		<div class="form-group">
			<br>
			<label>
				<h5><b>Deskripsi Donasi <b style="color:red;">*</b></b></h5>
			</label>
			<textarea class="form-control" name="desk_event" style="color: #1e1e27" rows="5"
				placeholder="Isilah dengan deskripsi barang seperti warna, lama digunakan, ditujukan kepada siapa, dll"
				required></textarea>
		</div>
		<br><br><br>
		<button type="submit" id="ajukanevent" class="btn btn-lg btn-block" style="background-color:#f1873b; 
		color:white; cursor: pointer;">Ajukan Permohonan</button>
	</form>
</div>

</div>

<!-- Tabs -->
