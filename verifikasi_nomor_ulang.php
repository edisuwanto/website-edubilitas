<!DOCTYPE html>
<html lang="en">

	<?php include 'head.php'; ?>

<body>

	<!-- Signup Start -->
	<div class="sign_in_up_bg">
		<div class="container">
			<div class="row justify-content-lg-center justify-content-md-center">
				<div class="col-lg-12">
					<div class="main_logo25" id="logo">
						<a href="index.php"><img src="images/edubilitas/logo-light.svg" alt=""></a>
						<a href="index.php"><img class="logo-inverse" src="images/edubilitas/logo-dark.svg" alt=""></a>
					</div>
				</div>							
				<div class="col-lg-6 col-md-8">
					<div class="sign_form">
						<h2>Kode OTP yang Anda masukkan salah.</h2>
						<p>Periksa kembali kode OTP Anda.</p>
						<form action="otp_cek.php" method="post">
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh95">
									<input class="prompt srch_explore" type="number" name="otp" maxlength="6" placeholder="6 digit OTP">
									<input type="hidden" name="last_id" value=<?php echo $_GET["id"];?>>									
									<i class="uil uil-key-skeleton-alt icon icon2"></i>
								</div>
							</div>
							<button class="login-btn" type="submit">Verikasi</button>
						</form>
					</div>
					<div class="sign_footer">© 2020 <strong>Edubilitas</strong>. All Rights Reserved.</div>
				</div>					
			</div>				
		</div>				
	</div>
	<!-- Signup End -->	

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/custom.js"></script>	
	<script src="js/night-mode.js"></script>	
	
</body>
</html>