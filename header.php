	<!-- Header Start -->
	<header class="header clearfix">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="back_link">
						<a href="index.php" class="hde151">Halaman Utama</a>
						<a href="index.php" class="hde152">Halaman Utama</a>
					</div>
					<div class="ml_item">
						<div class="main_logo main_logo15" id="logo">
							<a href="index.php"><img src="images/edubilitas/logo-light.svg" alt="Halaman Utama"></a>
							<a href="index.php"><img class="logo-inverse" src="images/edubilitas/logo-dark.svg" alt="Halaman Utama"></a>
						</div>				
					</div>				
					<div class="header_right pr-0">
						<ul>				
							<li class="ui top right">								
								<div id="night-mode" class="opts_account" onclick="changeImage()">
									Mode <img src="images/edubilitas/moon.png" title="Ganti Mode Malam">
								</div>
							</li>
						</ul>
					</div>		
				</div>		
			</div>
		</div>
	</header>
	<!-- Header End -->

	<script>
        function changeImage() {
            var image = document.getElementById('myImage');
            if (image.src.match("images/edubilitas/moon")) {
				image.src = "images/edubilitas/sun.png";
				image.title = "Ganti Mode Siang"
            }
            else {
				image.src = "images/edubilitas/moon.png";
				image.title = "Ganti Mode Malam"
            }
        }
    </script>