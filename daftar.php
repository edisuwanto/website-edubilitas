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
						<p>Daftar dan Mulai Belajar!</p>
						<form>
							<div class="ui search focus">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="text" name="fullname" value="" id="id_fullname" required="" maxlength="64" placeholder="Nama Lengkap">															
								</div>
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email" required="" maxlength="64" placeholder="Alamat Email">															
								</div>
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Kata Sandi">															
								</div>
							</div>
							<div class="ui form mt-30 checkbox_sign">
								<div class="inline field">
									<div class="ui checkbox mncheck">
										<input type="checkbox" tabindex="0" class="hidden">
										<label>Saya ingin berlangganan berita dan informasi produk</label>
									</div>
								</div>
							</div>
							<button class="login-btn" type="submit">Selanjutnya</button>
						</form>
						<p class="sgntrm145">Dengan mendaftar, Anda menyetujui <a href="">Syarat Penggunaan</a> dan <a href="">Kebijakan Privasi</a>.</p>
						<p class="mb-0 mt-30">Sudah memiliki akun? <a href="masuk.php">Masuk</a></p>
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