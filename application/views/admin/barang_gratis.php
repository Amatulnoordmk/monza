<!-- Main Content -->
<div class="main-content">
	<!-- Alert berhasil login -->

	<!-- End alert -->
	<section class="section">
		<div class="section-header">
			<h1>Barang Gratis</h1>
		</div>
		<!-- Info -->
		<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Foto</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>x</td>
      <td>x</td>
      <td>x</td>
      <td>x</td>
      <td>x</td>
      <td>
        <a href="#" class="btn-danger btn">Hapus</a>
        <a href="#" class="btn btn-warning">Ubah</a>
      </td>
    </tr>
    
  </tbody>
</table>

		<div class="row">
			<!-- Statistic -->
			<!-- <div class="col-lg-6 col-md-12 col-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Statistics</h4>
					</div>
					<div class="card-body" id="piechart">
						<script type="text/javascript">
							// Load google charts
							google.charts.load('current', {
								'packages': ['corechart']
							});
							google.charts.setOnLoadCallback(drawChart);

							// Draw the chart and set the chart values
							function drawChart() {
								var data = google.visualization.arrayToDataTable([
									['Total', 'Survei'],
									['Sudah mengisi survei', < ? = $sudahIsi ? > ],
									['Belum mengisi survei', < ? = $jlh_alumni - $sudahIsi ? > ]
								]);

								// Optional; add a title and set the width and height of the chart
								var options = {
									//'title': 'My Average Day',
									//'width': 450,
									'height': 350
								};

								// Display the chart inside the <div> element with id="piechart"
								var chart = new google.visualization.PieChart(document.getElementById('piechart'));
								chart.draw(data, options);
							}

						</script>
					</div>
				</div>
			</div> -->

			<!-- Recent activities -->
			<!-- <div class="col-lg-6 col-md-12 col-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Aktivitas Baru</h4>
					</div>
					<div class="card-body">
						<ul class="list-unstyled list-unstyled-border">
							<?php foreach($aktivitas as $act):
                    date_default_timezone_set('Asia/Jakarta');
              ?>
							<li class="media">
								<img class="mr-3 rounded-circle" width="50"
									src="<?=base_url();?>assets/backend/img/avatar-1.png" alt="avatar">
								<div class="media-body">
									<div class="text-small float-right text-primary">
										<?= date('d F Y, H:i:s', strtotime($act->waktu)) ?>
									</div>
									<div class="media-title"><?= $act->nama_depan ?> <?= $act->nama_belakang ?></div>
									<span class="text-muted">
										<?php if($act->aksi == 'loker_delete'): ?>
										<p>Menghapus Lowongan Pekerjaan</p>
										<?php elseif($act->aksi == 'loker_new'): ?>
										<p>Menambahkan <a href="<?= base_url('admin/loker') ?>">Lowongan Pekerjaan</a>.
										</p>
										<?php elseif($act->aksi == 'user_delete'): ?>
										<p>Menghapus User</p>
										<?php elseif($act->aksi == 'testi_update'): ?>
										<p>Mengubah <a href="<?= base_url('admin/testi')?>">Testimoni</a>.</p>
										<?php elseif($act->aksi == 'testi_new'): ?>
										<p>Menambahkan <a href="<?= base_url('admin/testi')?>">Testimoni</a>.</p>
										<?php elseif($act->aksi == 'registrasi'): ?>
										<p>Melakukan <a href="<?=base_url();?>notifikasi">Registrasi</a>.</p>
										<?php elseif($act->aksi == 'do_survei'): ?>
										<p>Telah Mengisi <a href="<?= base_url('admin/report')?>">Survei</a>.</p>
										<?php endif; ?>
									</span>
								</div>
							</li>
							<?php endforeach; ?>
						</ul>
						<div class="text-center pt-1 pb-1">
							<a href="<?= base_url('backend/History');?>" class="btn btn-primary btn-lg btn-round">
								View All
							</a>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</section>
</div>
