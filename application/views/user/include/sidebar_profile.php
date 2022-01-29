<div class="container product_section_container">
	<div class="row">
		<div class="col product_section clearfix">

			<div class="sidebar">
				<div class="sidebar_section">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top"
							src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
							alt="Card image cap">
						<div class="card-body">
							<div class="text-center">
								<h5 class="card-title"><?= $user->nama_lengkap ?></h5>
								<p class="card-text">
									<td><span class="ti-location-pin"></span> <?= $user->provinsi ?></td>
								</p>
								<p class="card-text">
									<td><span class="fa fa-whatsapp"></span> <?= $user->no_telp ?></td>
								</p>
								<button type="submit" class="btn btn-sm btn-block"
									style="background-color:#f1873b; color:white;">Edit
									Profil</button>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
