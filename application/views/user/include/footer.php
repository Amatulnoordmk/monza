<!-- Newsletter -->

<!-- Footer -->

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div
					class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
					<ul class="footer_nav">
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
<!-- <script src="<?=base_url();?>assets/user/js/sweetalert2.all.min.js"></script>
<script src="<?=base_url();?>assets/user/js/sweetalert2.all.js"></script>
<script src="<?=base_url();?>assets/user/js/myscript.js"></script> -->

<script type="text/javascript">
	// Alert bootstrap auto dismiss
	$(document).ready(function () {
		window.setTimeout(function () {
			$(".alert").fadeTo(500, 0).slideUp(500, function () {
				$(this).remove();
			});
		}, 1000);
	});

	// Validasi cuma boleh input angka
	function isNumberKey(evt) {
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}

	// Hide/show kolom input harga di postProduct_page
	$(document).ready(function () {
		toggleFields
			(); // call this first so we start out with the correct visibility depending on the selected form values
		// this will call our toggleFields function every time the selection value of our other field changes
		$("#katProduk").change(function () {
			toggleFields();
		});

	});
	// this toggles the visibility of other server
	function toggleFields() {
		if ($("#katProduk").val() === "P")
			$("#produkBerbayar").show();
		else
			$("#produkBerbayar").hide();
	}

	// Button tambah stok
	const setup = () => {

		document
			.getElementById("sum-button")
			.addEventListener("click", () => {
				const outputBox = document.getElementById("input-stok");
				outputBox.value = +outputBox.value + 1;
			});
	};

	window.addEventListener('load', setup);

	// Validasi register
	var error = 1;
	var nama_lengkap_error = 1;
	var notel_error = 1;
	var email_error = 1;
	var username_error = 1;
	var pass_error = 1;
	var Kpass_error = 1;
	var prov_error = 1;
	var kota_error = 1;

	// Validasi nama lengkap
	function cekNamaLengkap() {
		var nama_lengkap = $('.nama_lengkapKu').val();

		if (nama_lengkap == "") {
			$('.pesan_nama_lengkapKu').html("Silakan Isi Nama Lengkap Anda");
			$('.pesan_nama_lengkapKu').css('color', 'red');
			nama_lengkap_error = 1;
		} else {
			$('.pesan_nama_lengkapKu').html("");
			nama_lengkap_error = 0;
		}
	}

	// Validasi nomor telepon
	function cekNoTel() {
		var nomor = $('.nomorKu').val();

		if (nomor == "") {
			$('.pesan_noTelKu').html("Silakan Isi Nomor Telepon Anda");
			$('.pesan_noTelKu').css('color', 'red');
			notel_error = 1;
		} else if (nomor.length > 13) {
			$('.pesan_noTelKu').html("Nomor Telepon Tidak Boleh Lebih Dari 13 Digit.");
			$('.pesan_noTelKu').css('color', 'red');
			notel_error = 1;
		} else {
			$.ajax({
				url: "<?= base_url('daftar/cekNoTel'); ?>",
				data: 'nomor=' + nomor,
				type: 'POST',
				success: function (msg) {
					if (msg) {
						$('.pesan_noTelKu').html("Nomor Telepon Telah Terdaftar");
						$('.pesan_noTelKu').css('color', 'red');
						notel_error = 1;
					} else {
						$('.pesan_noTelKu').html("Nomor Telepon Dapat Digunakan");
						$('.pesan_noTelKu').css('color', 'green');
						notel_error = 0;
					}
				}
			});
		}
	}

	// Validasi email
	function cekEmail() {
		var email = $('.emailKu').val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;

		if (email == "") {
			$('.pesan_emailKu').html("Silakan Isi Email Anda");
			$('.pesan_emailKu').css('color', 'red');
			email_error = 1;
		} else {
			if (filter.test(email) == false) {
				$('.pesan_emailKu').html("Email Tidak Valid");
				$('.pesan_emailKu').css('color', 'red');
				email_error = 1;
			} else {
				$.ajax({
					url: "<?= base_url('daftar/cekEmail'); ?>",
					data: 'email=' + email,
					type: 'POST',
					success: function (msg) {
						if (msg) {
							$('.pesan_emailKu').html("Email Telah Terdaftar");
							$('.pesan_emailKu').css('color', 'red');
							email_error = 1;
						} else {
							$('.pesan_emailKu').html("Email Dapat Digunakan");
							$('.pesan_emailKu').css('color', 'green');
							email_error = 0;
						}
					}
				});
			}
		}
	}

	// Validasi username
	function cekUsername() {
		var username = $('.usernameKu').val();

		if (username == "") {
			$('.pesan_usernameKu').html("Silakan Isi Username Anda");
			$('.pesan_usernameKu').css('color', 'red');
			username_error = 1;
		} else {
			$('.pesan_usernameKu').html("");
			username_error = 0;
		}
	}

	// Validasi password
	function cekPass() {
		var pass = $('.passwordKu').val();

		if (pass == "") {
			$('.pesan_passKu').html("Silakan Isi Sandi Anda");
			$('.pesan_passKu').css('color', 'red');
			pass_error = 1;
		} else {
			if (pass.length < 6) {
				$('.pesan_passKu').html("Sandi Minimal 6 Digit");
				$('.pesan_passKu').css('color', 'red');
				pass_error = 1;
			} else {
				$('.pesan_passKu').html("");
				pass_error = 0;
			}
		}
	}

	// Validasi konfirmasi password
	function cekKonfirPass() {
		var Kpass = $('.konfirpassKu').val();
		var pass = $('.passwordKu').val();

		if (Kpass == "") {
			$('.pesan_konfirPassKu').html("Konfirmasi Sandi Anda");
			$('.pesan_konfirPassKu').css('color', 'red');
			Kpass_error = 1;
		} else {
			if (Kpass.length < 6) {
				$('.pesan_konfirPassKu').html("Sandi Minimal 6 Digit");
				$('.pesan_konfirPassKu').css('color', 'red');
				Kpass_error = 1;
			} else {
				if (Kpass == pass) {
					$('.pesan_konfirPassKu').html("Sandi Sesuai");
					$('.pesan_konfirPassKu').css('color', 'green');
					Kpass_error = 0;
				} else {
					$('.pesan_konfirPassKu').html("Sandi Tidak Sesuai");
					$('.pesan_konfirPassKu').css('color', 'red');
					Kpass_error = 1;
				}

			}
		}
	}

	// Validasi provinsi
	function cekProvinsi() {
		var prov = $('.provinsiKu option:selected').attr('value');

		if (prov == "") {
			$('.pesan_provKu').html("Silakan Pilih Provinsi Tempat Tinggal");
			$('.pesan_provKu').css('color', 'red');
			prov_error = 1;
		} else {
			$('.pesan_provKu').html("");
			prov_error = 0;
		}
	}

	// Validasi kabupaten/kota
	function cekKota() {
		var kota = $('.kotaKu option:selected').attr('value');

		if (kota == "") {
			$('.pesan_kotaKu').html("Silakan Pilih Kota Tempat Tinggal");
			$('.pesan_kotaKu').css('color', 'red');
			kota_error = 1;
		} else {
			$('.pesan_kotaKu').html("");
			kota_error = 0;
		}
	}

	$('.btn-validasi').click(function () {
		cekNamaLengkap();
		cekNoTel();
		cekEmail();
		cekUsername();
		cekPass();
		cekKonfirPass();
		cekPass();
		cekProvinsi();
		cekKota();

		if (nama_lengkap_error == 0 && notel_error == 0 && email_error == 0 && username_error == 0 && pass_error ==
			0 && Kpass_error == 0 && prov_error == 0 && kota_error == 0) {
			error = 0;
		}

		if (error == 1) {
			event.preventDefault();
		}
	})

</script>
</body>

</html>
