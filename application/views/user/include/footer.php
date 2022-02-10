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
