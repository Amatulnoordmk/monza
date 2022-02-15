<div class="container product_section_container">
	<div class="row">
		<div class="col product_section clearfix">

			<!-- Breadcrumbs -->

			<div class="breadcrumbs d-flex flex-row align-items-center">
				<ul>
					<li>Beranda</li>
					<li class="active"><i class="fa fa-angle-right" aria-hidden="true"></i>Donasi</li>
				</ul>
				<div class="col-sm-12 col-md-10 col-lg-10">
					<a href="<?= base_url('postevent/'.$this->session->userdata('id_user')); ?>"
						class="btn btn-outline-warning float-right" style="color:#f1873b;" type="button">Tambahkan
						Donasi</a>
				</div>
			</div>

			<!-- Main Content -->

			<div class="container-fluid">

				<!-- Products -->

				<div class="products_iso">
					<div class="row">
						<div class="col">

							<!-- Product Sorting -->

							<div class="product_sorting_container product_sorting_container_top">
								<ul class="product_sorting">
									<!-- <li>
										<span class="type_sorting_text">Urutkan</span>
										<i class="fa fa-angle-down"></i>
										<ul class="sorting_type">
											<li class="type_sorting_btn"
												data-isotope-option='{ "sortBy": "original-order" }'>
												<span>Urutkan</span></li>
											<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
												<span>Waktu</span></li>
										</ul>
									</li> -->
									<!-- <li>
							<span>Show</span>
							<span class="num_sorting_text">6</span>
							<i class="fa fa-angle-down"></i>
							<ul class="sorting_num">
								<li class="num_sorting_btn"><span>6</span></li>
								<li class="num_sorting_btn"><span>12</span></li>
								<li class="num_sorting_btn"><span>24</span></li>
							</ul>
						</li> -->
								</ul>
								<!-- <div class="pages d-flex flex-row align-items-center">
						<div class="page_current">
							<span>1</span>
							<ul class="page_selection">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
							</ul>
						</div>
						<div class="page_total"><span>of</span> 3</div>
						<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right"
									aria-hidden="true"></i></a></div>
					</div> -->

							</div>

							<!-- Donasi grid -->

							<div class="row mt-4">
								<?php foreach ($event as $event):
									date_default_timezone_set('Asia/Jakarta');
								?>
								<div class="col-md-4">
									<div class="card" style="width: 20rem;">
										<img class="card-img-top"
											src="<?=base_url();?>assets/user/images/Event/<?= $event->foto_event ?>"
											alt="Card image cap">
										<div class="card-body">
											<?php
												$originalDate = $event->waktu_tenggat;
												$newDate = date("d-m-Y", strtotime($originalDate));
											?>
											<p style="color: #f1873b"><i class="fa fa-clock-o"></i> Berakhir pada
												<?= $newDate ?>
											</p>
											<h5 class="card-title text-center">
												<?= substr($event->desk_event, 0, 70) ?>....
											</h5>
											<center>
												<p class="card-text" style="color: #f1873b">
													<?= $event->stok_terkumpul ?>
													dari <?= $event->stok_butuh ?> terkumpul</p>
												<a href="<?=base_url();?>detailevent/<?= $event->id_event ?>"
													class="btn"
													style="background-color: #f1873b; color: white;">Lihat</a>
											</center>
										</div>
									</div>
								</div>
								<?php endforeach ?>
							</div>


							<!-- Product Sorting -->

							<!-- <div class="product_sorting_container product_sorting_container_bottom clearfix">
					<ul class="product_sorting">
						<li>
							<span>Show:</span>
							<span class="num_sorting_text">04</span>
							<i class="fa fa-angle-down"></i>
							<ul class="sorting_num">
								<li class="num_sorting_btn"><span>01</span></li>
								<li class="num_sorting_btn"><span>02</span></li>
								<li class="num_sorting_btn"><span>03</span></li>
								<li class="num_sorting_btn"><span>04</span></li>
							</ul>
						</li>
					</ul>
					<span class="showing_results">Showing 1–3 of 12 results</span>
					<div class="pages d-flex flex-row align-items-center">
						<div class="page_current">
							<span>1</span>
							<ul class="page_selection">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
							</ul>
						</div>
						<div class="page_total"><span>of</span> 3</div>
						<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right"
									aria-hidden="true"></i></a></div>
					</div>

				</div> -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
