<!-- Newsletter -->

<!-- Footer -->

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div
					class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
					<ul class="footer_nav">
						<li><a href="#">Blog</a></li>
						<li><a href="<?=base_url();?>kontak">Hubungi kami</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div
					class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8">
				<div
					class="footer_nav_container d-flex flex-sm-row flex-column justify-content-lg-start justify-content-center">
					<!-- <img src="<?=base_url();?>assets/user/images/logo-nav.png" alt="monza" height="70"> -->
					<i class="fa fa-map-marker" style="font-size:55px; color: #f1873b;" aria-hidden="true"></i>
					<div class="cr ml-3">Jalan Merpati No 541, 209387<br>Medan, Sumatera Utara</div>
				</div>
			</div>
			<!-- <div class="col-lg-12">
				<div class="footer_nav_container d-flex flex-sm-row justify-content-lg-start justify-content-center">
					<i class="fa fa-map-marker" style="font-size:55px; color: #f1873b;" aria-hidden="true"></i>
					<div class="cr ml-3">Jalan Merpati No 541, 209387<br>Medan, Sumatera Utara</div>
				</div>
			</div> -->
		</div>
	</div>
	</div>
</footer>

</div>

<script src="<?=base_url();?>assets/user/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url();?>assets/user/styles/bootstrap4/popper.js"></script>
<script src="<?=base_url();?>assets/user/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/user/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?=base_url();?>assets/user/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=base_url();?>assets/user/plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="<?=base_url();?>assets/user/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="<?=base_url();?>assets/user/js/custom.js"></script>

<script src="<?=base_url();?>assets/user/js/sweetalert2.all.min.js"></script>
<script src="<?=base_url();?>assets/user/js/myscript.js"></script>

<script type="text/javascript">
	// Validasi nomor telepon cuma boleh input angka
	function isNumberKey(evt) {
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}

	// Validasi register
	var error = 1;
	var nama_lengkap_error = 1;
	var notel_error = 1;
	var email_error = 1;
	var username_error = 1;
	var pass_error = 1;
	var prov_error = 1;
	var kota_error = 1;

	// Validasi nama lengkap
	function cekNamaLengkap() {
		var nama_lengkap = $('#nama_lengkap').val();

		if (nama_lengkap == "") {
			$('#pesan_nama_lengkap').html("Silakan isi Nama Lengkap Anda");
			$('#pesan_nama_lengkap').css('color', 'red');
			nama_lengkap_error = 1;
		} else {
			$('#pesan_nama_lengkap').html("");
			nama_lengkap_error = 0;
		}
	}

	// Validasi nomor telepon
	function cekNo() {
		var nomor = $('#nomor').val();

		if (nomor == "") {
			$('#pesan_notel').html("Silakan isi nomor telepon Anda");
			$('#pesan_notel').css('color', 'red');
			notel_error = 1;
		} else if (nomor.length > 13) {
			$('#pesan_notel').html("Nomor telepon tidak boleh lebih dari 13 digit.");
			$('#pesan_notel').css('color', 'red');
			notel_error = 1;
		} else {
			$.ajax({
				url: "<?= base_url('user/cekNotel') ?>",
				data: 'nomor=' + nomor,
				type: 'POST',
				success: function (msg) {
					if (msg) {
						$('#pesan_notel').html("Nomor telepon telah terdaftar");
						$('#pesan_notel').css('color', 'red');
						notel_error = 1;
					} else {
						$('#pesan_notel').html("Nomor telepon dapat digunakan");
						$('#pesan_notel').css('color', 'green');
						notel_error = 0;
					}
				}
			});
		}
	}

	// Validasi email
	function cekEmail() {
		var email = $('#email').val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;

		if (email == "") {
			$('#pesan_email').html("Silakan isi email Anda");
			$('#pesan_email').css('color', 'red');
			email_error = 1;
		} else {
			if (filter.test(email) == false) {
				$('#pesan_email').html("Email tidak valid");
				$('#pesan_email').css('color', 'red');
				email_error = 1;
			} else {
				$.ajax({
					url: "<?= base_url('user/cekEmail') ?>",
					data: 'email=' + email,
					type: 'POST',
					success: function (msg) {
						if (msg) {
							$('#pesan_email').html("Email telah terdaftar");
							$('#pesan_email').css('color', 'red');
							email_error = 1;
						} else {
							$('#pesan_email').html("Email dapat digunakan");
							$('#pesan_email').css('color', 'green');
							email_error = 0;
						}
					}
				});
			}
		}
	}

	// Validasi username
	function cekUsername() {
		var username = $('#username').val();

		if (username == "") {
			$('#pesan_username').html("Silakan isi username Anda");
			$('#pesan_username').css('color', 'red');
			username_error = 1;
		} else {
			$('#pesan_username').html("");
			username_error = 0;
		}
	}

	// Validasi password
	function cekPass() {
		var pass = $('#password').val();

		if (pass == "") {
			$('#pesan_pass').html("Silakan isi sandi Anda");
			$('#pesan_pass').css('color', 'red');
			pass_error = 1;
		} else {
			if (pass.length < 6) {
				$('#pesan_pass').html("Sandi minimal 6 digit");
				$('#pesan_pass').css('color', 'red');
				pass_error = 1;
			} else {
				$.ajax({
					url: "<?= base_url('user/cekPass') ?>",
					data: 'password=' + pass,
					type: 'POST',
					success: function (msg) {
						if (msg) {
							$('#pesan_pass').html("Sandi sudah digunakan");
							$('#pesan_pass').css('color', 'red');
							pass_error = 1;
						} else {
							$('#pesan_pass').html("Sandi dapat digunakan");
							$('#pesan_pass').css('color', 'green');
							pass_error = 0;
						}
					}
				});
			}
		}
	}

	// Validasi provinsi
	function cekProvinsi() {
		var prov = $('#provinsi option:selected').attr('value');

		if (prov == "") {
			$('#pesan_prov').html("Silakan pilih provinsi tempat tinggal");
			$('#pesan_prov').css('color', 'red');
			prov_error = 1;
		} else {
			$('#pesan_prov').html("");
			prov_error = 0;
		}
	}

	// Validasi kabupaten/kota
	function cekKota() {
		var kota = $('#kota option:selected').attr('value');

		if (kota == "") {
			$('#pesan_kota').html("Silakan pilih kota tempat tinggal");
			$('#pesan_kota').css('color', 'red');
			kota_error = 1;
		} else {
			$('#pesan_kota').html("");
			kota_error = 0;
		}
	}

	$('#signup').click(function () {
		cekNamaLengkap();
		cekNo();
		cekEmail();
		cekUsername();
		cekPass();
		cekProvinsi();
		cekKota();

		if (nama_lengkap_error == 0 && notel_error == 0 && email_error == 0 && username_error == 0 && pass_error ==
			0 && prov_error == 0 && kota_error == 0) {
			error = 0;
		}

		if (error == 1) {
			event.preventDefault();
		}
	})

</script>
</body>

</html>
