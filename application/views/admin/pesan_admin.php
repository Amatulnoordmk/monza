<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/pesan.css">


<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Pesan</h1>
		</div>

		<div class="section-body">
			<h2 class="section-title">Pesan dari Pengguna</h2>
			<div class="container">
				<div class="row clearfix">
					<div class="col-lg-12">
						<div class="card chat-app">
							<div id="plist" class="people-list">
								<div class="input-group">
									<!-- <div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-search"></i></span>
									</div> -->
									<!-- <input type="text" class="form-control" placeholder="Search..."> -->
								</div>
								<ul class="list-unstyled chat-list mt-2 mb-0">
									<?php foreach ($username as $u): ?>
									<a href="<?= base_url('admin/pesanAdminSelect/'.$u->id_pengirim)?>">
										<li class="clearfix">
											<!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar"> -->
											<div class="about">
												<div class="name"><?= $u->nama_pengirim?></div>
											</div>
										</li>
									</a>
									<?php endforeach; ?>
								</ul>
							</div>
							<div class="chat">

								<div class="chat-history">
									<div class="chat">
										<div class="chat-header clearfix">
										</div>
										<div class="chat-history">
										</div>
										<div class="chat-message clearfix">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
