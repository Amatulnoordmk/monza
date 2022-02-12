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

	<!-- Form Content -->
	<div class="tab-content" id="myTabContent">
		<div class="col text-center">
			<div class="section_title new_arrivals_title">
				<h3>Edit Barang</h3>
			</div>
		</div>

		<form action="<?= base_url();?>user/editProduk/<?= $produk->id_produk ?>" method="post"
			enctype="multipart/form-data">
			<br><br><br>
			<div class="form-group">
				<label>
					<h5><b>Nama Produk</h5>
				</label>
				<input type="text" class="form-control" name="nama_produk" value="<?= $produk->nama_produk ?>"
					style="color: #1e1e27">
			</div>

			<div class="form-group">
				<br>
				<label>
					<h5><b>Kategori Produk</h5>
				</label>
				<select class="form-control" id="katProduk" name="katProduk" style="color: #1e1e27">
					<?php if ($produk->kategori_produk == 'F'): ?>
					<option value="" selected disabled>Gratis</option>
					<?php elseif ($produk->kategori_produk == 'P'):?>
					<option value="" selected disabled>Berbayar</option>
					<?php endif; ?>
					<option value="F">Gratis</option>
					<option value="P">Berbayar</option>
				</select>
			</div>

			<div class="form-group">
				<br>
				<label>
					<h5><b>Harga Produk</b></h5>
				</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<button class="btn btn-secondary" type="button" id="button-addon1" disabled>Rp</button>
					</div>
					<input type="number" max="50000" class="form-control" name="harga_produk"
						value="<?= $produk->harga_produk ?>" placeholder="contoh: 43000" style="color: #1e1e27">
				</div>
				<small class="form-text text-danger">Harga maksimum yang dapat diinput adalah Rp50.000</small>
			</div>

			<div class="form-group">
				<br>
				<label>
					<h5><b>Foto Produk</h5>
				</label>
				<fieldset class="form-group">
					<!-- <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a> -->
					<input type="file" id="fotoProduk" name="fotoProduk" class="form-control"
						accept="image/png, image/jpg, image/jpeg" style="color: #1e1e27">
				</fieldset>
				<small class="form-text text-danger">Jenis file yang diterima adalah png, jpg, dan jpeg</small>
			</div>

			<div class="form-group">
				<br>
				<label for="jenis_barang">
					<h5><b>Jenis Barang</h5>
				</label>
				<select class="form-control" name="jenis_barang" style="color: #1e1e27">
					<option style="color:black" value="" selected disabled><?= $produk->jenis_produk ?>
					</option>
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
					<h5><b>Deskripsi Produk</h5>
				</label>
				<textarea class="form-control" name="desk_produk" style="color: #1e1e27" rows="5" value=""
					placeholder="<?= $produk->desk_produk ?>"></textarea>
			</div>
			<br><br><br>
			<button type="submit" id="tambahproduk" class="btn btn-lg btn-block" style="background-color:#f1873b; 
		color:white; cursor: pointer;">Simpan</button>
		</form>
	</div>


</div>

<!-- Tabs -->
