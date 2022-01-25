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
	// Validasi
	(function() {
          'use strict';
          window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');        
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();

	// Validasi number only
	function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
</script>
</body>

</html>
