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
		</div>
	</div>

	<div class="col text-center">
		<div class="section_title new_arrivals_title">
			<h3>Tambah Event yang Akan Diadakan</h3>
		</div>
	</div>

	<form method="post" enctype="multipart/form-data">
		<br><br><br>
		<div class="form-group">
			<label><h5><b>Nama Event<b style="color:red;">*</b></b></h5>
			</label>
			<input type="text" class="form-control" name="nama_event" required>
		</div>

		<div class="form-group">
			<br>
			<label for="jenis_barang"><h5><b>Jenis Barang yang Ingin Dikumpulkan<b style="color:red;">*</b></b></h5></label>
			<select class="form-control" id="jenis_barang">
				<option style="color:black" selected disabled required>Piih Jenis Barang</option>
				<option>Pakaian</option>
				<option>Buku</option>
				<option>Tas</option>
				<option>Barang Elektronik</option>
				<option>Lainnya</option>
			</select>
		</div>
		<div class="form-group">
			<br>
			<label><h5><b>Stok yang Dibutuhkan<b style="color:red;">*</b></b></h5></label>
				<input type="number" class="form-control" name="stok_produk" required>
		</div>

		<div class="form-group">
			<br>
			<label><h5><b>Tenggat Waktu Event<b style="color:red;">*</b></b></h5></label>
				<input type="date" class="form-control" name="deadline_event" required>
		</div>

		<div class="form-group">
			<br>
			<label><h5><b>Proposal Acara<b style="color:red;">*</b></b></h5></label>
			<input type="file" class="form-control" name="proposal" required>
		</div>

		<div class="form-group">
			<br>
			<label><h5><b>Nama Penyelenggara<b style="color:red;">*</b></b></h5>
			</label>
			<input type="text" class="form-control" name="nama_penyelenggara" required>
		</div>

		<div class="form-group">
			<br>
			<label><h5><b>Foto KTP Penanggungjawab<b style="color:red;">*</b></b></h5></label>
			<input type="file" class="form-control" name="foto_ktp" required>
		</div>

		<div class="form-group">
			<br>
			<label><h5><b>Deskripsi Event<b style="color:red;">*</b></b></h5></label>
			<textarea class="form-control" name="desk_produk" rows="5"
				placeholder="Isilah dengan deskripsi barang seperti warna, lama digunakan, ditujukan kepada siapa, dll" required></textarea>
		</div>
		<br><br><br>
		<button type="submit" id="ajukanevent" class="btn btn-lg btn-block" style="background-color:#f1873b; 
		color:white; cursor: pointer;">Ajukan Permohonan</button>
	</form>



</div>

<!-- Tabs -->
