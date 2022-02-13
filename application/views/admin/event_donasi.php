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
				<?php foreach ($event as $key): ?>
				<div class="col-12 col-md-6 col-lg-6">
					<div class="card card-primary">
						<div class="card-header">
							<h4><?= substr($key->nama_event, 0, 27) ?>...</h4>
							<div class="card-header-action">
								<?php if($key->status == '0'): ?>
								<a href="<?= base_url('Admin/terima_event/').$key->id_event?>" class="btn btn-success"
									data-toggle="tooltip" title="posting">
									<i class="fas fa-arrow-up"></i>
								</a>
								<?php elseif($key->status == '1'): ?>
								<a href="<?= base_url('Admin/tolak_event/').$key->id_event?>" class="btn btn-danger"
									data-toggle="tooltip" title="turunkan">
									<i class="fas fa-arrow-down"></i>
								</a>
								<?php endif; ?>
								<div class="dropdown">
									<a href="#" data-toggle="dropdown"
										class="btn btn-warning dropdown-toggle">Pilihan</a>
									<div class="dropdown-menu">
										<a data-toggle="modal" data-target="#detailproduk<?= $key->id_event; ?>"
											type="button" class="dropdown-item has-icon" style="cursor: pointer;"><i
												class="fas fa-eye"></i> Detail</a>
										<div class="dropdown-divider"></div>
										<a data-target="#hapusalumni<?= $key->id_event; ?>" data-toggle="modal"
											type="button" class="dropdown-item has-icon text-danger"><i
												class="far fa-trash-alt" style="cursor: pointer;"></i>
											Hapus</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body">
							<?php if($key->status == '1'): ?>
							<h5 class="badge badge-success">disetujui</h5>
							<?php elseif($key->status == '0'): ?>
							<h5 class="badge badge-danger">Menunggu</h5>
							<?php endif; ?>
							<br><br>
							<p>Diselenggarakan oleh <?=$key->nama_penyelenggara?></p>
							<p>Berakhir pada <?=$key->waktu_tenggat?></p>
							<a href="<?= base_url('Admin/download/'.$key->id_event) ?>"
								class="btn btn-primary"><?= $key->proposal_event?></a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>

<!-- modal hapus event -->
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
