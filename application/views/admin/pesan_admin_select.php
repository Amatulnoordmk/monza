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
								<div class="chat-header clearfix">
									<div class="row">
										<div class="col-lg-6">
											<!-- <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
												<img src="https://bootdey.com/img/Content/avatar/avatar2.png"
													alt="avatar">
											</a> -->
											<div class="chat-about">
												<h6 class="m-b-0"><?= $user->nama_pengirim  ?></h6>
											</div>
										</div>
									</div>
								</div>
								<div class="chat-history">
									<ul class="m-b-0">
										<?php foreach ($isiPesan as $ip):?>
										<?php if($ip->id_pengirim == 2): ?>
										<li class="clearfix">
											<div class="message-data text-right">
												<span class="message-data-time">
													<?php
                                                    $old_date_timestamp = strtotime($ip->waktu_kirim);
                                                    $new_date = date('d-m-Y H:i:s', $old_date_timestamp);
                                                    echo $new_date;	
                                                    ?>
												</span>
											</div>
											<div class="message other-message float-right"><?= $ip->pesan ?></div>
										</li>
										<?php else: ?>
										<li class="clearfix">
											<div class="message-data">
												<span class="message-data-time">
													<?php
                                                    $old_date_timestamp = strtotime($ip->waktu_kirim);
                                                    $new_date = date('d-m-Y H:i:s', $old_date_timestamp);
                                                    echo $new_date;	
                                                    ?>
												</span>
												<img src="https://bootdey.com/img/Content/avatar/avatar7.png"
													alt="avatar">
											</div>
											<div class="message my-message"><?= $ip->pesan?></div>
										</li>
										<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								</div>
								<div class="chat-message clearfix">
									<form method="POST" action="<?= base_url('admin/balasPesan/'.$user->id_pengirim)?>"
										enctype="multipart/form-data">
										<div class="form-group mb-0">
											<div class="input-group">
												<div class="input-group-prepend">
													<button class="btn" style="background-color: #f1873b; color:white;"
														type="submit">
														<i class="fas fa-location-arrow"></i>
													</button>
												</div>
												<input type="text" class="form-control" name="pesan"
													placeholder="Tulis pesan disini..." autocomplete="off">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
