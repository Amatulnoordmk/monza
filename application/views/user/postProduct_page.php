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
			<h3>Tambah barang yang dibagikan</h3>
		</div>
	</div>

	<form action="<?= base_url('user/uploadProduk/'.$user->id_user) ?>" method="post" enctype="multipart/form-data">
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
				<input type="text" class="form-control" name="harga_produk" style="color: #1e1e27">
			</div>
		</div>

		<div class="form-group">
			<br>
			<label>
				<h5><b>Foto Produk <b style="color:red;">*</b></b></h5>
			</label>
			<fieldset class="form-group">
				<!-- <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a> -->
				<input type="file" id="fotoProduk" name="fotoProduk" class="form-control" style="color: #1e1e27">
			</fieldset>
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
			<select class="form-control" id="jenis_barang" style="color: #1e1e27">
				<option style="color:black" selected disabled required>Piih Jenis Barang</option>
				<option value="pakaian">Pakaian</option>
				<option value="elektronik">Elektronik</option>
				<option value="hobi">Hobi & Olahraga</option>
				<option value="sekolah">Perlengkapan Sekolah</option>
				<option value="lainnya">Lainnya</option>
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

<!-- Tabs -->
