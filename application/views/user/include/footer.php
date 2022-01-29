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
<!-- <script src="<?=base_url();?>assets/user/js/sweetalert2.all.min.js"></script>
<script src="<?=base_url();?>assets/user/js/sweetalert2.all.js"></script>
<script src="<?=base_url();?>assets/user/js/myscript.js"></script> -->

<script type="text/javascript">
	// Alert ootstrap auto dismiss
	$(document).ready(function () {
		window.setTimeout(function () {
			$(".alert").fadeTo(500, 0).slideUp(500, function () {
				$(this).remove();
			});
		}, 1000);
	});

	// $(document).ready(function () {
	// 	$('.provinsi').change(function () {
	// 		var id = $(this).val();
	// 		$.ajax({
	// 			type: "POST",
	// 			url: "",
	// 			data: {
	// 				id: id,
	// 			},
	// 			dataType: "JSON",
	// 			success: function (response) {
	// 				$('.kota').html(ressponse);
	// 			}
	// 		});
	// 	});
	// });

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
	var Kpass_error = 1;
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
		var email = $('#emailku').val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;

		if (email == "") {
			$('#pesan_emailku').html("Silahkan isi email Anda");
			$('#pesan_emailku').css('color', 'red');
			email_error = 1;
		} else {
			if (filter.test(email) == false) {
				$('#pesan_emailku').html("Email tidak valid");
				$('#pesan_emailku').css('color', 'red');
				email_error = 1;
			} else {
				$.ajax({
					url: "<?= base_url('user/cekEmail') ?>",
					data: 'email=' + email,
					type: 'POST',
					success: function (msg) {
						if (msg) {
							$('#pesan_emailku').html("Email telah terdaftar");
							$('#pesan_emailku').css('color', 'red');
							email_error = 1;
						} else {
							$('#pesan_emailku').html("Email dapat digunakan");
							$('#pesan_emailku').css('color', 'green');
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
		var pass = $('.password').val();

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
				$('#pesan_pass').html("");
				pass_error = 0;
			}
		}
	}

	// Validasi konfirmasi password
	function cekKonfirPass() {
		var Kpass = $('#konfirpass').val();
		var pass = $('.password').val();

		if (Kpass == "") {
			$('#pesan_konfirPass').html("Konfirmasi sandi Anda");
			$('#pesan_konfirPass').css('color', 'red');
			Kpass_error = 1;
		} else {
			if (Kpass.length < 6) {
				$('#pesan_konfirPass').html("Sandi minimal 6 digit");
				$('#pesan_konfirPass').css('color', 'red');
				Kpass_error = 1;
			} else {
				if (Kpass == pass) {
					$('#pesan_konfirPass').html("Sandi sesuai");
					$('#pesan_konfirPass').css('color', 'green');
				} else {
					$('#pesan_konfirPass').html("Sandi tidak sesuai");
					$('#pesan_konfirPass').css('color', 'red');
				}

			}
		}
	}

	// Validasi provinsi
	function cekProvinsi() {
		var prov = $('.provinsi option:selected').attr('value');

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
		var kota = $('.kota option:selected').attr('value');

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
		cekKonfirPass();
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


	// gambar di post produk
	// $(document).ready(function () {
	// 	document.getElementById('pro-image').addEventListener('change', readImage, false);

	// 	$(".preview-images-zone").sortable();

	// 	$(document).on('click', '.image-cancel', function () {
	// 		let no = $(this).data('no');
	// 		$(".preview-image.preview-show-" + no).remove();
	// 	});
	// });

	// var num = 4;

	// function readImage() {
	// 	if (window.File && window.FileList && window.FileReader) {
	// 		var files = event.target.files; //FileList object
	// 		var output = $(".preview-images-zone");

	// 		for (let i = 0; i < files.length; i++) {
	// 			var file = files[i];
	// 			if (!file.type.match('image')) continue;

	// 			var picReader = new FileReader();

	// 			picReader.addEventListener('load', function (event) {
	// 				var picFile = event.target;
	// 				var html = '<div class="preview-image preview-show-' + num + '">' +
	// 					'<div class="image-cancel" data-no="' + num + '">x</div>' +
	// 					'<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result +
	// 					'"></div>' +
	// 					'<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num +
	// 					'" class="btn btn-light btn-edit-image">edit</a></div>' +
	// 					'</div>';

	// 				output.append(html);
	// 				num = num + 1;
	// 			});

	// 			picReader.readAsDataURL(file);
	// 		}
	// 		$("#pro-image").val('');
	// 	} else {
	// 		console.log('Browser not support');
	// 	}
	// }

</script>
</body>

</html>
