<!-- alert berhasil hapus alumni -->
<?php if($this->session->flashdata('hapus-alumni')): ?>
<script>
	swal("<?= $this->session->flashdata('hapus-alumni') ?>", "", "success", {
		button: "OK",
	});

</script>
<?php endif; ?>

<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Slider</h1>
		</div>

		<div class="section-body">
			<h2 class="section-title">Banner/Slider Terdaftar</h2>
			<form action="<?= base_url('user/upload_slider') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<br>
					<label>
						<h5><b>Upload Banner/Slider </b></h5>
					</label>
					<input type="file" class="form-control" name="slider" style="color: #1e1e27" required>
					<small class="form-text text-danger">Jenis file yang diterima adalah png, jpg, dan jpeg</small>
				</div>
			</form>
			<button type="submit" id="ajukanevent" class="btn btn-success">Upload</button>
			<!-- <label>
				<h5><b>Upload Banner/Slider </b></h5>
			</label>
			<input type="file" class="form-control" name="slider" style="color: #1e1e27" required>
			<small class="form-text text-danger">Jenis file yang diterima adalah png, jpg, dan jpeg</small>

			<a href="<?= base_url('Admin/upload_slider/'); ?>" class="btn btn-success">Upload</a> -->
			<p> </p>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12">
					<div class="card p-3">
						<div class="card-body p-0">
							<div class="table-responsive">
								<table class="table table-striped table-md" id="myAlumni">
									<?php $nomor=1; ?>
									<thead>
										<tr>
											<th>No</th>
											<th>Gambar</th>
											<th>status</th>
											<th>aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($slider as $key): ?>
										<tr>
											<td><?= $nomor++; ?></td>

											<!-- <td>lokasi</td> -->
											<td><img src="<?=base_url();?>assets/user/images/Produk/<?= $key->gambar_slider ?>"
													alt="produk" height="100"></td>
											<td><?= $key->status; ?></td>
											<td>
												<a class="btn btn-icon btn-sm icon-left btn-primary" data-toggle="modal"
													data-target="#detailproduk<?= $key->id_slider; ?>" type="button">
													<i class="fa fa-info-circle" aria-hidden="true"
														style="color:white"></i><span style="color:white">
														Detail</span>
												</a>
												<a data-target="#hapusalumni<?= $key->id_slider; ?>" data-toggle="modal"
													type="button" class="btn btn-icon btn-sm icon-left btn-danger">
													<i class="fas fa-trash" style="color:white"></i><span
														style="color:white">Hapus</span>
												</a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- modal hapus alumni -->
<?php foreach($slider as $key) :?>
<div class="modal fade" id="hapusalumni<?= $key->id_slider; ?>" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
			</div>
			<div class="modal-body text-center">
				<h1 class="text-danger mb-5">Apakah Anda Yakin?</h1>
				<h5>Banner/Slider ini akan terhapus dan tidak dapat dikembalikan</h5>
				<div class="form-group">
					<input type="text" class="form-control" id="recipient-name" name="idproduk" hidden>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
				<a href="<?= base_url('Admin/delete_slider/').$key->id_slider; ?>" class="btn btn-danger">hapus</a>
			</div>

		</div>
	</div>
</div>
<?php endforeach ?>
<!-- end modal -->
<!-- modal Detail -->
<?php foreach($slider as $key) :?>
<div class="modal fade" id="detailproduk<?= $key->id_slider; ?>" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
			</div>
			<div class="modal-body text-center">
				<h1 class="text-primary mb-5">Detail Banner/Slider</h1>
				<table class="table table-striped">
					<tbody>
						<tr>
							<th scope="row">Status</th>
							<td><?= $key->status?></td>
						</tr>
						<tr>
							<th scope="row">Gambar</th>
							<td><img src="<?=base_url();?>assets/user/images/Produk/<?= $key->gambar_slider ?>"
									alt="produk" height="100"></td>
						</tr>
					</tbody>
				</table>
				<div class="form-group">
					<input type="text" class="form-control" id="recipient-name" name="idalumni" hidden>
				</div>
			</div>
			<div class="modal-footer">
				<a href="<?= base_url('Admin/aktif_slider/').$key->id_slider; ?>" class="btn btn-success"
					data-dismiss="modal">Aktifkan</a>
				<!-- <button type="submit" class="btn btn-danger">Hapus</button> -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
				<!-- <button type="submit" class="btn btn-danger">Hapus</button> -->
			</div>
		</div>
	</div>
</div>
<?php endforeach ?>
<!-- end modal -->

<script>
	$(document).ready(function () {
		$('#hapusalumni').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipient = button.data('idalumni') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			// modal.find('.modal-title').text('Hapus ' + recipient)
			modal.find('.modal-body input').val(recipient)
		})

		$('#myAlumni').DataTable();
	});

</script>
