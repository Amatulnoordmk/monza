<div class="container single_product_container">
	<div class="row">
		<div class="col">
			<button onclick="history.back()" class="btn"
				style="color: #f1873b; background-color: white; cursor: pointer;"><i
					class="fa fa-arrow-left"></i>&nbsp&nbspKembali</button>
		</div>
	</div>

	<!-- Form Content -->
	<div class="tab-content" id="myTabContent">
		<div class="col text-center">
			<div class="section_title new_arrivals_title">
				<h3>Edit Event</h3>
			</div>
		</div>

		<form action="<?= base_url();?>user/editEvent/<?=$event->id_event?>" method="post"
			enctype="multipart/form-data">
			<br><br><br>
			<div class="form-group">
				<label>
					<h5><b>Nama Event</h5>
				</label>
				<input type="text" class="form-control" name="nama_event" style="color: #1e1e27"
					value="<?= $event->nama_event?>" required>
			</div>

			<div class="form-group">
				<br>
				<label>
					<h5><b>Gambar informasi event</h5>
				</label>
				<input type="file" class="form-control" name="foto_event" style="color: #1e1e27">
				<small class="form-text text-danger">Jenis file yang diterima adalah png, jpg, dan jpeg</small>
			</div>


			<div class="form-group">
				<label for="jenis_barang">
					<h5><b>Jenis Barang yang Ingin Dikumpulkan</h5>
				</label>
				<select class="form-control" name="jenis_barang" style="color: #1e1e27">
					<option style="color:black" value="" selected disabled required><?=$event->jenis_produk?></option>
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
					<h5><b>Stok yang Sudah Terkumpul</b></h5>
				</label>
				<div class="input-group">
					<div class=" input-group-prepend">
						<button class="btn" type="button" id="sum-button"
							style="color: white; background-color: #f1873b; cursor: pointer;">+</button>
					</div>
					<input type="text" class="form-control" id="input-stok" name="stok_terkumpul"
						value="<?=$event->stok_terkumpul?>" style="color: #1e1e27"
						onkeypress="return isNumberKey(event)">
				</div>
			</div>

			<div class="form-group">
				<br>
				<label>
					<h5><b>Stok yang Dibutuhkan</h5>
				</label>
				<input type="text" class="form-control" name="stok_produk" value="<?=$event->stok_butuh?>"
					style="color: #1e1e27" onkeypress="return isNumberKey(event)">
			</div>

			<div class="form-group">
				<br>
				<label>
					<h5><b>Tenggat Waktu Event</h5>
				</label>
				<input type="date" class="form-control" name="deadline_event" value="<?=$event->waktu_tenggat?>"
					style="color: #1e1e27">
			</div>

			<div class="form-group">
				<br>
				<label>
					<h5><b>Nama Penyelenggara</h5>
				</label>
				<input type="text" class="form-control" name="nama_penyelenggara" style="color: #1e1e27"
					value="<?=$event->nama_penyelenggara?>">
			</div>

			<div class="form-group">
				<br>
				<label>
					<h5><b>Deskripsi Event</h5>
				</label>
				<textarea class="form-control" name="desk_event" style="color: #1e1e27" rows="5"
					placeholder="<?=$event->desk_event?>"></textarea>
			</div>
			<br><br><br>
			<button type="submit" id="ajukanevent" class="btn btn-lg btn-block" style="background-color:#f1873b; 
		color:white; cursor: pointer;">Simpan</button>
		</form>
	</div>
