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

	<!-- Nav -->
	<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#barang" role="tab" aria-controls="home"
				aria-selected="true" style="color: #f1873b;">Barang</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#event" role="tab" aria-controls="profile"
				aria-selected="false" style="color: #f1873b;">Event</a>
		</li>
	</ul>

	<!-- Form Content -->
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="barang" role="tabpanel" aria-labelledby="home-tab">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h3>Tambah Barang yang Ingin Dibagikan</h3>
				</div>
			</div>

			<form action="<?= base_url('user/uploadProduk/'.$user->id_user) ?>" method="post"
				enctype="multipart/form-data">
				<br><br><br>
				<div class="form-group">
					<label>
						<h5><b>Nama Produk <b style="color:red;">*</b></b></h5>
					</label>
					<input type="text" class="form-control" name="nama_produk" style="color: #1e1e27" required>
				</div>

				<div class="form-group">
					<br>
					<label>
						<h5><b>Kategori Produk <b style="color:red;">*</b></b></h5>
					</label>
					<select class="form-control" id="katProduk" name="katProduk" style="color: #1e1e27" required>
						<option selected disabled>Piih kategori</option>
						<option value="F">Gratis</option>
						<option value="P">Berbayar</option>
					</select>
				</div>

				<div class="form-group" id="produkBerbayar">
					<br>
					<label>
						<h5><b>Harga Produk</b></h5>
					</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<button class="btn btn-secondary" type="button" id="button-addon1" disabled>Rp</button>
						</div>
						<input type="number" max="50000" class="form-control" name="harga_produk"
							placeholder="contoh: 43000" style="color: #1e1e27">
					</div>
					<small class="form-text text-danger">Harga maksimum yang dapat diinput adalah Rp50.000</small>
				</div>

				<div class="form-group">
					<br>
					<label>
						<h5><b>Foto Produk <b style="color:red;">*</b></b></h5>
					</label>
					<fieldset class="form-group">
						<!-- <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a> -->
						<input type="file" id="fotoProduk" name="fotoProduk" class="form-control"
							accept="image/png, image/jpg, image/jpeg" style="color: #1e1e27" required>
					</fieldset>
					<small class="form-text text-danger">Jenis file yang diterima adalah png, jpg, dan jpeg</small>
					<!-- <div class="preview-images-zone">
				<div class="preview-image preview-show-1">
					<div class="image-cancel" data-no="1">x</div>
					<div class="image-zone"><img id="pro-img-1"
							src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw==">
					</div>
					<div class="tools-edit-image"><a href="javascript:void(0)" data-no="1"
							class="btn btn-light btn-edit-image">edit</a></div>
				</div>
				<div class="preview-image preview-show-2">
					<div class="image-cancel" data-no="2">x</div>
					<div class="image-zone"><img id="pro-img-2"
							src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>
					<div class="tools-edit-image"><a href="javascript:void(0)" data-no="2"
							class="btn btn-light btn-edit-image">edit</a></div>
				</div>
				<div class="preview-image preview-show-3">
					<div class="image-cancel" data-no="3">x</div>
					<div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>
					<div class="tools-edit-image"><a href="javascript:void(0)" data-no="3"
							class="btn btn-light btn-edit-image">edit</a></div>
				</div>
			</div> -->
				</div>

				<div class="form-group">
					<br>
					<label for="jenis_barang">
						<h5><b>Jenis Barang <b style="color:red;">*</b></b></h5>
					</label>
					<select class="form-control" name="jenis_barang" style="color: #1e1e27">
						<option style="color:black" selected disabled required>Piih Jenis Barang</option>
						<option value="Pakaian">Pakaian</option>
						<option value="Elektronik">Elektronik</option>
						<option value="Buku">Buku & Majalah</option>
						<option value="RumahTangga">Rumah tangga</option>
						<option value="Olahraga">Hobi & Olahraga</option>
						<option value="Sekolah">Perlengkapan Sekolah</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
				<div class="form-group">
					<br>
					<label>
						<h5><b>Deskripsi Produk <b style="color:red;">*</b></b></h5>
					</label>
					<textarea class="form-control" name="desk_produk" style="color: #1e1e27" rows="5"
						placeholder="Isilah dengan deskripsi barang seperti warna, lama digunakan, ditujukan kepada siapa, dll"
						required></textarea>
				</div>
				<br><br><br>
				<button type="submit" id="tambahproduk" class="btn btn-lg btn-block" style="background-color:#f1873b; 
		color:white; cursor: pointer;">Tambah</button>
			</form>
		</div>
		<div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="profile-tab">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h3>Tambah Event yang Ingin Diadakan</h3>
				</div>
			</div>

			<form action="<?= base_url('user/uploadEvent/'.$user->id_user) ?>" method="post"
				enctype="multipart/form-data">
				<br><br><br>
				<div class="form-group">
					<label>
						<h5><b>Nama Event <b style="color:red;">*</b></b></h5>
					</label>
					<input type="text" class="form-control" name="nama_event" style="color: #1e1e27" required>
				</div>

				<div class="form-group">
					<br>
					<label>
						<h5><b>Gambar informasi event <b style="color:red;">*</b></b></h5>
					</label>
					<input type="file" class="form-control" name="foto_event" style="color: #1e1e27" required>
					<small class="form-text text-danger">Jenis file yang diterima adalah png, jpg, dan jpeg</small>
				</div>


				<div class="form-group">
					<label for="jenis_barang">
						<h5><b>Jenis Barang yang Ingin Dikumpulkan <b style="color:red;">*</b></b></h5>
					</label>
					<select class="form-control" name="jenis_barang" style="color: #1e1e27" required>
						<option style="color:black" selected disabled required>Piih Jenis Barang</option>
						<option value="Pakaian">Pakaian</option>
						<option value="Elektronik">Elektronik</option>
						<option value="Buku">Buku & Majalah</option>
						<option value="RumahTangga">Rumah tangga</option>
						<option value="Olahraga">Hobi & Olahraga</option>
						<option value="Sekolah">Perlengkapan Sekolah</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
				<div class="form-group">
					<br>
					<label>
						<h5><b>Stok yang Dibutuhkan <b style="color:red;">*</b></b></h5>
					</label>
					<input type="text" class="form-control" name="stok_produk" placeholder="contoh: 23"
						style="color: #1e1e27" onkeypress="return isNumberKey(event)" required>
				</div>

				<div class="form-group">
					<br>
					<label>
						<h5><b>Tenggat Waktu Event <b style="color:red;">*</b></b></h5>
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
						<h5><b>Deskripsi Event <b style="color:red;">*</b></b></h5>
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


</div>

<!-- Tabs -->
