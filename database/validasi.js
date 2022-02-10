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
		var nama_lengkap = $('.nama_lengkap').val();

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
		var nomor = $('.nomor').val();

		if (nomor == "") {
			$('#pesan_notel').html("Silakan isi nomor telepon Anda");
			$('#pesan_notel').css('color', 'red');
			notel_error = 1;
		} else if (nomor.length > 13) {
			$('#pesan_notel').html("Nomor telepon tidak boleh lebih dari 13 digit.");
			$('#pesan_notel').css('color', 'red');
			notel_error = 1;
		} else {
			$('#pesan_notel').html("");
			notel_error = 0;
			// $.ajax({
			// 	url: "",
			// 	data: 'nomor=' + nomor,
			// 	type: 'POST',
			// 	success: function (msg) {
			// 		if (msg) {
			// 			$('#pesan_notel').html("Nomor telepon telah terdaftar");
			// 			$('#pesan_notel').css('color', 'red');
			// 			notel_error = 1;
			// 		} else {
			// 			$('#pesan_notel').html("Nomor telepon dapat digunakan");
			// 			$('#pesan_notel').css('color', 'green');
			// 			notel_error = 0;
			// 		}
			// 	}
			// });
		}
	}

	// Validasi email
	function cekEmail() {
		var email = $('.emailku').val();
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
				$('#pesan_emailku').html("");
				email_error = 0;
				// $.ajax({
				// 	url: "",
				// 	data: 'email=' + email,
				// 	type: 'POST',
				// 	success: function (msg) {
				// 		if (msg) {
				// 			$('#pesan_emailku').html("Email telah terdaftar");
				// 			$('#pesan_emailku').css('color', 'red');
				// 			email_error = 1;
				// 		} else {
				// 			$('#pesan_emailku').html("Email dapat digunakan");
				// 			$('#pesan_emailku').css('color', 'green');
				// 			email_error = 0;
				// 		}
				// 	}
				// });
			}
		}
	}

	// Validasi username
	function cekUsername() {
		var username = $('.usernameKu').val();

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
		var Kpass = $('.konfirpass').val();
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