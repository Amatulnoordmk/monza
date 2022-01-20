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
	<h3>Tambah barang yang dibagikan</h3>
	<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk <b style="color:red;">*</b></label>
		<input type="text" class="form-control" name="nama_produk">
	</div>
	<div class= "form-group">
		<label>Barang ini gratis <b style="color:red;">*</b></label>
		<div class="radio">
  			<label><input type="radio" name="optradio" >Ya</label>
		</div>
		<div class="radio">
  			<label><input type="radio" name="optradio">Tidak</label>
		</div>
	</div>
	<div class="form-group">
		<label>Harga (Max Rp 50.000)</label> 
		<input type="number" class="form-control" name="harga_produk" max="50000">
	</div>
	<div class="form-group">
		<label>Foto Produk <b style="color:red;">*</b></label>
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-group">
		<label for="kategori_produk">Kategori</label>
    	<select class="form-control" id="katerogri_produk" >
      		<option selected disabled>Piih kategori</option>
      		<option>Pakaian</option>
      		<option>Elektronik</option>
      		<option>Hobi & Olahraga</option>
      		<option>Perlengkapan Sekolah</option>
    	</select>
	</div>
	<div class="form-group">
		<label>Deskripsi Produk <b style="color:red;">*</b></label>
		<textarea class="form-control" name="desk_produk" rows="5" placeholder="Isilah dengan deskripsi barang seperti warna, lama digunakan, ditujukan kepada siapa, dll"></textarea>
	</div>
	<button class="btn btn-primary " name="save">Tambah</button>
</form>
	
				

</div>

<!-- Tabs -->


