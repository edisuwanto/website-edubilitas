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
						<a href="beranda.php"><img src="images/edubilitas/logo-light.svg" alt=""></a>
						<a href="beranda.php"><img class="logo-inverse" src="images/edubilitas/logo-dark.svg" alt=""></a>
					</div>
				</div>
			
				<div class="col-lg-6 col-md-8">
					<div class="sign_form">
						<h2>Selamat Datang!</h2>
						<p>Masuk ke Akun Anda</p>
						<form action="beranda_user.php" method="post">
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh95">
									<input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email" maxlength="64" placeholder="Alamat Email">															
									<i class="uil uil-envelope icon icon2"></i>
								</div>
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh95">
									<input class="prompt srch_explore" type="password" name="password" value="" id="id_password" maxlength="64" placeholder="Kata Sandi">
									<i class="uil uil-key-skeleton-alt icon icon2"></i>
								</div>
							</div>
							<div class="ui form mt-30 checkbox_sign">
								<div class="inline field">
									<div class="ui checkbox mncheck">
										<input type="checkbox" tabindex="0" class="hidden">
										<label>Ingat Saya</label>
									</div>
								</div>
							</div>
							<button class="login-btn" type="submit">Masuk</button>
						</form>
						<p class="sgntrm145">atau <a href="forgot_password.html">Lupa Kata Sandi</a>.</p>
						<p class="mb-0 mt-30 hvsng145">Belum Punya Akun? <a href="daftar.php">Daftar</a></p>
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