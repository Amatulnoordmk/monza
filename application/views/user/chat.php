<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<?php
$id_user = $_SESSION['id_user'];
// var_dump($_SESSION);die;
// var_dump($_SESSION['id_user']);die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Monza</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?=base_url();?>assets/user/images/logo-log.png" />
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/bootstrap4/bootstrap.min.css">
	<link href="<?=base_url();?>assets/user/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"
		type="text/css">
	<link rel="stylesheet" type="text/css"
		href="<?=base_url();?>assets/user/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css"
		href="<?=base_url();?>assets/user/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/user/plugins/themify-icons/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/responsive.css">
	<link rel="stylesheet" type="text/css"
		href="<?=base_url();?>assets/user/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/contact_responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/single_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/single_responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/categories_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/categories_responsive.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/user/styles/postProduk.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header trans_300">

			<!-- Top Navigation -->

			<!-- Main Navigation -->

			<div class="main_nav_container">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-right">
							<div class="logo_container">
								<a href="<?= base_url(); ?>beranda"><img
										src="<?=base_url();?>assets/user/images/logo-nav.png" alt="monza"
										height="36"></a>
							</div>
							<nav class="navbar">
								<ul class="navbar_menu">
									<li><a href="<?= base_url(); ?>beranda">Beranda</a></li>
									<li><a href="<?= base_url(); ?>produkgratis">Gratis</a></li>
									<li><a href="<?= base_url(); ?>produkmurah">Termurah</a></li>
									<li><a href="<?= base_url(); ?>donasi">Donasi</a></li>
									<li><a
											href="<?= base_url('postproduk/'.$this->session->userdata('id_user')); ?>">tambahkan</a>
									</li>
								</ul>
								<!-- <ul class="navbar_user">
									<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
									</li>
									<li class="dropdown">
										<a href="#" data-toggle="dropdown"
											class="nav-link dropdown-toggle nav-link-sm nav-link-user">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
										<div class="dropdown-menu">
											<a href="" class="dropdown-item">Profil</a>
											<div class="dropdown-divider"></div>
											<a href="" class="dropdown-item text-danger">Keluar</a>
										</div>
									</li>
									</li>
								</ul> -->

								<!-- <ul class="navbar_user navbar-right">
									<li class="nav-item">
										<h6>
											<a href="" class="nav-link nav-link-lg">
												<i class="fa fa-user"></i>
											</a>
										</h6>
									</li>
									<li class="nav-item dropdown"><a href="#" data-toggle="dropdown"
											class="nav-link dropdown-toggle" id="navbarDropdownMenuLink">
											Hai
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a href="" class="dropdown-item">
												Profil
											</a>
											<a href="" class="dropdown-item">
												Keluar
											</a>
										</div>
									</li>
								</ul> -->
								<ul class="navbar-menu">
									<li class="nav-item dropdown dropleft">
										<a class="nav-link dropdown-toggle dropleft" href="#"
											id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false" style="color: #1e1e27">
											<i
												class="fa fa-user"></i>&nbsp&nbspHai,&nbsp<?= $this->session->userdata('username') ?>
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<a class="dropdown-item"
												href="<?= base_url('profil/'.$this->session->userdata('id_user')) ?>">Profil</a>

											<a href="<?=base_url('postproduk/'.$this->session->userdata('id_user')); ?>"
												class="dropdown-item">Tambah
												Barang</a>

											<a href="<?= base_url('postevent/'.$this->session->userdata('id_user')); ?>"
												class="dropdown-item">Ajukan
												Donasi</a>
											<a href="<?= base_url('user/chatadmin'); ?>" class="dropdown-item">Hubungi
												Admin
											</a>
											<a href="<?=base_url('user/logout')?>" class="dropdown-item">Keluar</a>
										</div>
									</li>
								</ul>

								<div class="hamburger_container">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>

		</header>

		<div class="fs_menu_overlay"></div>

		<!-- Hamburger Menu -->

		<div class="hamburger_menu">
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="hamburger_menu_content text-right">
				<ul class="menu_top_nav">
					<li class="menu_item"><a href="<?= base_url(); ?>beranda">Beranda</a></li>
					<li class="menu_item"><a href="<?= base_url(); ?>produkgratis">Gratis</a></li>
					<li class="menu_item"><a href="<?= base_url(); ?>produkmurah">Termurah</a></li>
					<li class="menu_item"><a href="<?= base_url(); ?>donasi">Donasi</a></li>
					<li class="menu_item"><a
							href="<?=base_url('postproduk/'.$this->session->userdata('id_user')); ?>">Tambahkan</a></li>
				</ul>
			</div>
		</div>




		<!--Coded With Love By Mutiullah Samim-->

		<br><br><br><br><br>
		<?php foreach ($data as $data):?>
		<div class="col-md-8 col-xl-6 chat">
			<div class="card">
				<div class="card-header msg_head">
					<div class="d-flex bd-highlight">
						<div class="img_cont">
							<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
								class="rounded-circle user_img">
							<span class="online_icon"></span>
						</div>
						<div class="user_info">
							<span><?= $data->nama_lengkap ?></span>
							<p>xx</p>
						</div>
						<!-- <div class="video_cam">
						<span><i class="fas fa-video"></i></span>
						<span><i class="fas fa-phone"></i></span>
					</div> -->
					</div>
					<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
					<div class="action_menu">
						<ul>
							<li><i class="fas fa-user-circle"></i> View profile</li>
							<li><i class="fas fa-users"></i> Add to close friends</li>
							<li><i class="fas fa-plus"></i> Add to group</li>
							<li><i class="fas fa-ban"></i> Block</li>
						</ul>
					</div>
				</div>
				<div class="card-body msg_card_body" id="letakpesan">
					<div class="d-flex justify-content-start mb-4">
						<div class="img_cont_msg">
							<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
								class="rounded-circle user_img_msg">
						</div>
						<div class="msg_cotainer">
							Hi, how are you samim?
							<span class="msg_time">8:40 AM, Today</span>
						</div>
					</div>
					<div class="d-flex justify-content-end mb-4">
						<div class="msg_cotainer_send">
							Hi Khalid i am good tnx how about you?
							<span class="msg_time_send">8:55 AM, Today</span>
						</div>
					</div>
					<div class="d-flex justify-content-start mb-4">
						<div class="img_cont_msg">
							<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
								class="rounded-circle user_img_msg">
						</div>
						<div class="msg_cotainer">
							I am good too, thank you for your chat template
							<span class="msg_time">9:00 AM, Today</span>
						</div>
					</div>
				</div>



				<div class="card-footer">
					<div class="input-group">
						<div class="input-group-append">
							<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
						</div>
						<textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
						<div class="input-group-append">
							<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach ?>
</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$(document).ready(function () {
		$('#action_menu_btn').click(function () {
			$('.action_menu').toggle();
		});


		pesan()

		function pesan() {
			var id_lawan = '<?= $data->id_user ?>'
			$.ajax({
				type: "post",
				url: "<?= base_url() ?>Chat/loadChat",
				data: {
					id_user: '<?= $id_user ?>',
					id_lawan: id_lawan
				},
				dataType: "json",
				success: function (r) {
					var html = "";
					var d = r.data;
					id_user = '<?= $id_user ?>';
					d.forEach(d => {
						var today = new Date();
						var dd = String(today.getDate()).padStart(2, '0');
						var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
						var yyyy = today.getFullYear();

						today = dd + '-' + mm + '-' + yyyy;
						// console.log(today);

						var times = new Date(d.waktu)
						var time = times.toLocaleTimeString()
						var tanggal = String(times.getDate()).padStart(2, '0');
						var bulan = String(times.getMonth() + 1).padStart(2, '0');
						var tahun = times.getFullYear()
						var lengkapDB = tanggal + '-' + bulan + '-' + tahun
						// console.log(lengkapDB == today)
						var kapan = "Today"
						var tanggal_bulan = tanggal + "-" + bulan
						if (lengkapDB != today) {
							kapan = tanggal_bulan
						}
						// console.log(kapan)
						if (parseInt(d.id_user) == id_user) {




							html += `<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								${d.isi}
								<span class="msg_time">${kapan}, ${time}</span>
							</div>
						</div>`;

						} else {
							html += `<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
							</div>
							<div class="msg_cotainer">
								${d.isi}								
								<span class="msg_time">${kapan}, ${time}</span>

							</div>
						</div>`;


						}

					});
					// console.log(html)
					$('#letakpesan').html(html);

				}
			});
		}
		setInterval(() => {
			pesan()
		}, 1000);

		$('.send_btn').click(function (e) {
			var pesan = $('.type_msg').val();
			var id_user = '<?= $id_user ?>'
			var id_lawan = '<?= $data->id_user ?>';
			if (pesan != "") {
				$.ajax({
					type: "post",
					url: "<?= base_url() ?>/Chat/KirimPesan",
					data: {
						id_user,
						id_lawan,
						pesan
					},
					dataType: "json",
					success: function (r) {
						if (r.status) {
							$('.search_btn').trigger('click');
							$('.type_msg').val('');
							scrollToBottom()

						}

					}
				});
			}


		});
		scrollToBottom()

		function scrollToBottom() {
			$("#letakpesan").animate({
				scrollTop: 200000000000000000000000000000000
			}, "slow");
		}


		pesan()
		$('.search_btn').click(function (e) {
			pesan()
			// scrollToBottom()
		});
		$('.keluar').click(function (e) {

			Swal.fire({
				title: 'Anda Akan Keluar?',
				text: "Apakah Anda Yakin Akan keluar ? ",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes!'
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						type: "post",
						url: "<?= base_url() ?>/Chat/logout",
						// data: "data",
						dataType: "json",
						success: function (r) {
							// console.log(r)
							// return false
							if (r) {
								Swal.fire(
									'success!',
									r.pesan,
									'success'
								)
								setTimeout(() => {
									location.href =
										'<?= base_url() ?>Chat/login';
								}, 1000);
							} else {
								'error!',
								r.pesan,
								'error'
							}

						}
					});

				}
			})

		});


		orang()

		function orang() {
			$.ajax({
				type: "post",
				url: "<?= base_url() ?>Chat/GetAllOrang",
				data: {
					id_user: '<?= $id_user ?>'
				},
				dataType: "json",
				success: function (r) {
					var html = "";
					var d = r.data;
					id_user = '<?= $id_user ?>';
					d.forEach(d => {
						html += `
						<li class="active coba" data-id=${d.id_user}>
								<div class="d-flex bd-highlight ">
									<div class="img_cont ">
										<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
										<span class="online_icon " ></span>
									</div>
									<div class="user_info ">	
										<span class="">${d.nama}</span>
										<p class="">${d.nama} is online</p>
									</div>
								</div>
							</li>`;

					});
					$('#yangAktif').html(html);
				}
			});
		}
		$('body').on('click', '.coba', function () {
			var id = $(this).attr('data-id');
			window.location.replace("<?= base_url() ?>Chat/" + id);

		});


	});

</script>

</html>
