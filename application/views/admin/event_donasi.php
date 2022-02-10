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
			<h1>Event Donasi</h1>
		</div>

		<div class="section-body">
			<h2 class="section-title">Event Terdaftar</h2>
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
											<th>Nama Donasi</th>
											<th>Penyelenggara</th>
											<th>Deskripsi</th>
											<th>proposal</th>
											<th>Waktu tenggat</th>
											<th>Foto</th>
											<th>status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<!-- <?php foreach ($event as $key): ?> -->
										<tr>
											<td><?= $nomor++; ?></td>
											<td><?= $key->nama_event ?></td>
											<td><?= $key->nama_penyelenggara?></td>
											<td><?= $key->desk_event?></td>
											<td><?= $key->proposal_event?></td>
											<td><?= $key->waktu_tenggat?></td>
											<td><img src="<?=base_url();?>assets/user/images/Event/<?= $key->foto_event ?>"
													alt="produk" height="100">
											</td>
											<td>
												<?php
												$stats = $key->status;
												if($stats == '0')
												{
													echo "<p style='color:red; font-weight:bold;'>" . "Dalam Antrian" . "</p>";
												}elseif($stats=='1'){
													echo "<p style='color:green; font-weight:bold;'>" . "Sudah berjalan" . "</p>";
												}else{
													echo "<p style='color:orange; font-weight:bold;'>" . "Ditolak" . "</p>";
												}
												?>
											</td>
											<td>
												<a class="btn btn-icon btn-sm icon-left btn-primary" data-toggle="modal"
													data-target="#detailproduk<?= $key->id_event; ?>" type="button">
													<i class="fa fa-info-circle" aria-hidden="true"
														style="color:white"></i><span style="color:white"> Detail</span>
												</a>
												<a data-target="#hapusalumni<?= $key->id_event; ?>" data-toggle="modal"
													type="button" class="btn btn-icon btn-sm icon-left btn-danger">
													<i class="fas fa-trash" style="color:white;"></i><span
														style="color:white">Hapus</span>
												</a>
											</td>
										</tr>
										<!-- <?php endforeach; ?> -->
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
<?php foreach($event as $key) :?>
<div class="modal fade" id="hapusalumni<?= $key->id_event; ?>" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
			</div>
			<div class="modal-body text-center">
				<h1 class="text-danger mb-5">Apakah Anda Yakin?</h1>
				<h5>Data event ini akan terhapus dan tidak dapat dikembalikan</h5>
				<div class="form-group">
					<input type="text" class="form-control" id="recipient-name" name="idproduk" hidden>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
				<a href="<?= base_url('Admin/delete_event/').$key->id_event; ?>" class="btn btn-danger">hapus</a>
			</div>

		</div>
	</div>
</div>
<?php endforeach ?>
<!-- end modal -->
<!-- modal Detail -->
<?php foreach($event as $key) :?>
<div class="modal fade" id="detailproduk<?= $key->id_event; ?>" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
			</div>
			<div class="modal-body text-center">
				<h1 class="text-primary mb-5">Detail Event</h1>
				<table class="table table-striped">
					<tbody>
						<tr>
							<th scope="row">Nama Event</th>
							<td><?= $key->nama_event?></td>
						</tr>
						<tr>
							<th scope="row">Deskripsi</th>
							<td><?= $key->desk_event ?></td>
						</tr>
						<tr>
							<th scope="row">Jenis Produk</th>
							<td><?= $key->jenis_produk ?></td>
						</tr>
						<tr>
							<th scope="row">Penyelengara</th>
							<td><?= $key->nama_penyelenggara ?></td>
						</tr>
						<tr>
							<th scope="row">Stok terkumpul</th>
							<td><?= $key->stok_terkumpul ?> dari <?= $key->stok_butuh ?></td>
						</tr>
						<tr>
							<th scope="row">Waktu tenggat</th>
							<td><?= $key->waktu_mulai ?> <br>hingga<br> <?= $key->waktu_tenggat ?></td>
						</tr>
						<tr>
							<td>Foto</td>
							<td><img src="<?=base_url();?>assets/user/images/Event/<?= $key->foto_event ?>" alt="produk"
									height="100"></td>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="form-group">
					<input type="text" class="form-control" id="recipient-name" name="idalumni" hidden>
				</div>
			</div>
			<div class="modal-footer">
				<?php if ($key->status == '0'): ?>
				<button type="button" class="btn btn-secondary" data-dismiss='modal'>Tutup</button>
				<a href="<?= base_url('Admin/terima_event/').$key->id_event?>" class="btn btn-success">Terima</a>
				<a href="<?= base_url('Admin/tolak_event/').$key->id_event?>" class="btn btn-danger">Tolak</a>
				<?php elseif ($key->status == '1'): ?>
				<button type="button" class="btn btn-secondary" data-dismiss='modal'>Tutup</button>
				<?php elseif ($key->status == '2'): ?>
				<button type="button" class="btn btn-secondary" data-dismiss='modal'>Tutup</button>
				<?php endif; ?>
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
