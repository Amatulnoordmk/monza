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
			<h3>Tambah barang yang dibagikan</h3>
		</div>
	</div>

	<form action="<?= base_url('User/postProduk') ?>" method="post" enctype="multipart/form-data">
		<br><br><br>
		<div class="form-group">
			<label>
				<h5><b>Nama Produk <b style="color:red;">*</b></b></h5>
			</label>
			<input type="text" class="form-control" name="nama_produk" required>
		</div>

		<div class="form-group">
			<br>
			<label>
				<h5><b>Kategori Barang<b style="color:red;">*</b></b></h5>
			</label>
			<select class="form-control" id="kategori_produk" required>
				<option selected disabled>Piih kategori</option>
				<option>Gratis</option>
				<option>Berbayar</option>
			</select>
		</div>

		<div class="form-group">
			<br>
			<label><h5><b>Harga Produk</b></h5></label>
			<div class="input-group">
				<div class="input-group-prepend">
					<button class="btn btn-secondary" type="button" id="button-addon1" disabled>Rp</button>
				</div>
				<input type="number" class="form-control" name="harga_produk" required>
			</div>
		</div>

		<div class="form-group">
			<br>
			<label><h5><b>Foto Produk <b style="color:red;">*</b></b></h5></label>
			<input type="file" class="form-control" name="foto" required>
		</div>

		<div class="form-group">
			<br>
			<label for="jenis_barang"><h5><b>Jenis Barang<b style="color:red;">*</b></b></h5></label>
			<select class="form-control" id="jenis_barang">
				<option style="color:black" selected disabled required>Piih Jenis Barang</option>
				<option>Pakaian</option>
				<option>Elektronik</option>
				<option>Hobi & Olahraga</option>
				<option>Perlengkapan Sekolah</option>
				<option>Lainnya</option>
			</select>
		</div>
		<div class="form-group">
			<br>
			<label><h5><b>Deskripsi Produk <b style="color:red;">*</b></b></h5></label>
			<textarea class="form-control" name="desk_produk" rows="5"
				placeholder="Isilah dengan deskripsi barang seperti warna, lama digunakan, ditujukan kepada siapa, dll" required></textarea>
		</div>
		<br><br><br>
		<button type="submit" id="tambahproduk" class="btn btn-lg btn-block" style="background-color:#f1873b; 
		color:white; cursor: pointer;">Tambah</button>
	</form>



</div>

<!-- Tabs -->
