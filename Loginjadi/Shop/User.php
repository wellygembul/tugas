<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Halaman User</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/fontawesome.css">
	 <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/fontawesome.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['Level']==""){
		header("location:../Loginjadi/login.php?pesan=gagal");
	}
 
	?>
				
						    <!-- Modal -->
		                <div id="myModal" class="modal fade" role="dialog">
		                  <div class="modal-dialog">
		                    <!-- konten modal-->
		                    <div class="modal-content">
		                      <!-- heading modal -->
		                      <div class="modal-header">
		                        <button type="button" class="close" data-dismiss="modal">&times;</button>
		                        <h4 class="modal-title"><i class="far fa-file-alt"></i> Register</h4>
		                      </div>
		                      <!-- body modal -->
		                      <div class="modal-body">
		                      <form action="Aksi.php" method="post">

				                      <div class="form-group input-group">
						                <span class="input-group-addon"><img src="ikon/user2.png" style="width: 25px; height: 25px;"></span>
						                <input type="text" class="form-control" placeholder="Username">
						              </div>
 									
						              <div class="form-group input-group">
										    <span class="input-group-addon"><img src="ikon/rumah.png" style="width: 25px; height: 25px;"></span>
										    <input type="text" class="form-control" placeholder="Kabupaten/Kota">     
						              </div>
						               <div class="form-group input-group">
						                <span class="input-group-addon"><img src="ikon/phone.png" style="width: 25px; height: 25px;"></span>
						                <input type="text" class="form-control" placeholder="+628*********">
						              </div>
						               <div class="form-group input-group">
						                <span class="input-group-addon"><img src="ikon/email.png" style="width: 25px; height: 25px;"></span>
						                <input type="text" class="form-control" placeholder="User@gmail.co.id">
						              </div>

		                          <button class="btn btn-warning" type="submit" name="submit" style=" color: white;">Save</button> 
		                          <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
		                      </form>
		                      </div>
		                      <!-- footer modal -->
		                      <div class="modal-footer"></div>
		                    </div>
		                  </div>
		                </div>
		         

	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img1/1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/LO.png" alt="logo">
							<img class="logo-alt" src="img/LO.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right" >
					<li><a href="#home">Home</a></li>
					
					<li class="has-dropdown"><a>Category Item</a>
						<ul class="dropdown"style="background-color: #83878e;">
							<li class="has-dropdown"><a href=""><img src="SEPATU/ikon/woman.png" style="width: 35px; height: 35px;"> Fashion Wanita</a>
								<ul class="dropdown" style="background-color: #b2b5ba;">
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/sepatu_wanita.png" style="width: 35px; height: 35px;"> Sepatu Wanita</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/sandal_wanita.png" style="width: 35px; height: 35px;"> Sandal Wanita</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/aksesoris.png" style="width: 35px; height: 35px;"> Aksesoris Wanita</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/baju_wanita.png" style="width: 30px; height: 30px;"> Pakaian Wanita</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/tas.png" style="width: 30px; height: 30px;"> Tas</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/anak_perempuan.png" style="width: 30px; height: 30px;"> Fashion Anak</a></li>	
								</ul>
							</li>
							<li class="has-dropdown"><a href=""><img src="SEPATU/ikon/man.png" style="width: 35px; height: 35px;"> Fashion Pria</a>
								<ul class="dropdown" style="background-color: #b2b5ba;">
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/sepatu_pria.png" style="width: 37px; height: 37px;"> Sepatu Pria</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/sandal_pria.png" style="width: 35px; height: 35px;"> Sandal Pria</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/jaket_pria.png" style="width: 35px; height: 35px;"> Jaket</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/baju_pria.png" style="width: 30px; height: 30px;"> Pakaian Pria</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/tas_pria.png" style="width: 30px; height: 30px;"> Tas</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/anak_laki.png" style="width: 30px; height: 30px;"> Fashion Anak</a></li>
								</ul>
							</li>
							<li class="has-dropdown"><a href=""><img src="SEPATU/MENU/aksesoris.png" style="width: 38px; height: 38px;"> Aksesoris</a>
								<ul class="dropdown" style="background-color:  #b2b5ba;">
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/jam.png" style="width: 37px; height: 37px;"> Jam Tangan Pria</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/jam_w.png" style="width: 35px; height: 35px;"> Jam Tangan Wanita</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/kalung.png" style="width: 35px; height: 35px;"> Perhiasan Wanita</a></li>
									<li style="color: white;"><a href=""><img src="SEPATU/MENU/kacamata.png" style="width: 30px; height: 30px;"> Kacamata Optik</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="#news">News</a></li>
					<li><a href=""><i class="fas fa-cart-plus" style="font-size: 15pt;"></i></a></li>
					<li><a href=""><i class="far fa-comment-dots" style="font-size: 15pt;"></i></a></li>
					<li class="has-dropdown"><a><i class="far fa-user" style="font-size: 15pt;"></i></a>
						<ul class="dropdown">
							<li><a href=""><img src="ikon/per.png" style="width: 25px; height: 25px;">Profile</a></li>
							<li><a href="Admin/member/member.php" data-toggle="modal" data-target="#myModal" ><img src="ikon/form.png" style="width: 25px; height: 25px;"> Register Member</a></li>
							<li><a href=""><img src="ikon/logout.png" style="width: 25px; height: 25px;">  Logout</a></li>
						</ul>
					</li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">Welcome to Happy Shop</h1>
							<p class="white-text">Easy reliable shopping place.<br>
							 Payment can be made at any type of bank.<br> Get Big Bonus by becoming Happy Shop member.
							</p>
							<button class="white-btn">Get Started!</button>
							<button class="main-btn">Learn more</button>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- Portfolio -->
	<div id="about" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">New Product</h2>
				</div>
				<!-- /Section header -->
				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img1/tas1.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Sling Bag Zara Rajut</h3>
						<div class="work-link">
							<a class="lightbox" style="width: 80px; background-color: #e5a716;" href="./img1/tas1.jpg">Detail</a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img1/tas2.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Sling Bag Chanel</h3>
						<div class="work-link">
							<a class="lightbox" style="width: 80px; background-color: #e5a716;" href="./img1/tas2.jpg">Detail</a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img1/tas3.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Timba Rattan</h3>
						<div class="work-link">
							<a class="lightbox" style="width: 80px; background-color: #e5a716;" href="./img1/tas3.jpg">Detail</a>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->


	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Gallery Electronic</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work1.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Mesin</h3>
						<div class="work-link">
							<a class="lightbox" style="width: 80px; background-color: #e5a716;" href="./img/work6.jpg">Detail</a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work2.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Handphone</h3>
						<div class="work-link">
							<a class="lightbox" style="width: 80px; background-color: #e5a716;" href="./img/work6.jpg">Detail</a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work3.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Handphone</h3>
						<div class="work-link">
							<a class="lightbox" style="width: 80px; background-color: #e5a716;" href="./img/work6.jpg">Detail</a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work4.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Camera Instax</h3>
						<div class="work-link">
							<a class="lightbox" style="width: 80px; background-color: #e5a716;" href="./img/work6.jpg">Detail</a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work5.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Camera Kodak</h3>
						<div class="work-link">
							<a class="lightbox" style="width: 80px; background-color: #e5a716;" href="./img/work6.jpg">Detail</a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/work6.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Category</span>
						<h3>Camera Canon</h3>
						<div class="work-link">
							<a class="lightbox" style="width: 80px; background-color: #e5a716;" href="./img/work6.jpg">Detail</a>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-users"></i>
						<h3 class="white-text"><span class="counter">451</span></h3>
						<span class="white-text">Happy clients</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-trophy"></i>
						<h3 class="white-text"><span class="counter">12</span></h3>
						<span class="white-text">Awards won</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-shopping-cart"></i>
						<h3 class="white-text"><span class="counter">154</span>K</h3>
						<span class="white-text">Best Quality</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-shipping-fast"></i>
						<h3 class="white-text"><span class="counter">45</span></h3>
						<span class="white-text">Trusted Services</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->

	<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Cara Medapatkan Gratis Ongkir di Happy Shop</h2>
					</div>
					<p>Happy Shop menyediakan pelayanan yang mudah dan pelayanan yang baik,<br>Salah satunya dengan memberikan layanan Free Ongkir untuk setiap pengiriman barang pelanggan.<br>Layanan ini tidak mempengaruhi kualitas barang yang dibeli, barang Ori produk Happy Shop.<br>Anda dapat mengaktifakan layanan ini dengan :</p>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Mendaftar sebagai member Happy Shop, atau membeli aplikasi Happy Shop pada aplikasi Play Store diponsel anda.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Berbelanja di Happy Shop minimal Rp.100.000 per Items</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Mengikuti info terbaru Happy Shop dan bersedia memberikan bintang di setiap Items, untuk cara ini Happy Shop akan mengundi dan pelanggan yang beruntung akan mendapatkan kartu member Happy Shop</p>
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="ikon/3.png" alt="keranjang belanja" style="width: 80%; height: 80%; text-align: center;">
						<img class="img-responsive" src="ikon/order1.png" alt="pesan barang" style="width: 90%; height: 90%; text-align: center;">
						<img class="img-responsive" src="ikon/pesan.png" alt="barang diskon" style="width: 90%; height: 90%; text-align: center;">
						<img class="img-responsive" src="ikon/chat.png" alt="chat admin" style="width: 90%; height: 90%; text-align: center;">
						<img class="img-responsive" src="ikon/reg.png" alt="registrasi" style="width: 90%; height: 90%; text-align: center;">
						<img class="img-responsive" src="ikon/fast1.png" alt="pengiriman cepat" style="width: 90%; height: 90%; text-align: center;">
						<img class="img-responsive" src="ikon/bag.png" alt="barang belanja" style="width: 90%; height: 90%; text-align: center;">
						<img class="img-responsive" src="ikon/like.png" alt="bintang" style="width: 90%; height: 90%; text-align: center;">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	

	<!-- Testimonial -->
	<div class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img1/2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/kfc.png" alt="">
								<h3 class="white-text">Kentucky Fried Chicken</h3>
								<span>Jl. Raya Jetis Jember</span>
							</div>
							<h4 class="white-text">Paket Ramah Kantong!!!</h4>
							<p class="white-text"><b>Harga Paket Super Besar KFC-</b> Untuk kalian yang ingin merayakan ulang tahun, kesuksesan maupun hanya berkumpul santai, maka datang ke KFC adalah solusi yang terbaik.Menu KFC terbaru saat ini mempunyai banyak pilihanpaket yang ramah dikantong. Sebab ada paket Goceng KFC, Breakfast, Kombo KFC dan lainnya. Semuanya dapat anda nikmati bersama dengan orang yang anda cintai.</p>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/burger.png" alt="" >
								<h3 class="white-text">Burger King</h3>
								<span>Jl.Karimata Jember</span>
							</div>
							<h4 class="white-text">Paket Super Hemat!!!</h4>
							<p class="white-text">Untuk Promo Burger King ini selalu menghadirkan paket makanan yang murah dan terjangkau, bukan hanya paket makanan yang murah, dalam promo burger king terbanu ini juga bervariasi mulai discon harga, paket makanan, dan juga buy 1 get 1 dan masih banyak lagi. Beberapa Promo yang wajib anda jelajahi : Pay Day diskon 50%; Double Deal 2 cuma 20rb, dan masih banyak lagi.</p>
						</div>
						<!-- /testimonial -->

					</div>
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Testimonial -->

	<!-- Team -->
	<div id="jam" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Wristwatch</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/jam3.jpg" alt="">
							<div class="overlay">
							</div>
						</div>
						<div class="team-content">
							<h3>G-Shok</h3>

							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="far fa-star"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
								<p>Original G-Shok, tipe warna lengkap.<br>Harga Rp.90.000</p>
								<div class="button">
									<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
									<a href="" type="button" class="btn btn-info">Detail</a>  
								</div>  
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/jam4.jpg" alt="">
							<div class="overlay">
							</div>
						</div>
						<div class="team-content">
							<h3>Puma</h3>
							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star-half-alt"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
								<p>Original Puma, 3 tipe warna lengkap.<br>Harga Rp.99.000</p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div>  
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/jam7.JPEG" alt="">
							<div class="overlay">
							</div>
						</div>
						<div class="team-content">
							<h3>Baby-G</h3>
							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star-half-alt"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="far fa-star"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
							<p>Baby-G, tipe warna lengkap.<br>Harga Rp.70.000 <a href="">Discount!</a></p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div> 
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->
	<!-- Team -->
	<div id="sepatu" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Mountaineering Boots</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/eiger.jpg" alt="">
							<div class="overlay"></div>
						</div>
						<div class="team-content">
							<h3>Eiger</h3>

							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
								<p>Original Eiger.<br>Harga Rp.599.000</p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div>  
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/rei.jpg" alt="">
							<div class="overlay"></div>
						</div>
						<div class="team-content">
							<h3>Rei</h3>
							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
								<p>Original Rei, tipe warna lengkap.<br>Harga Rp.499.900 <a href="">Discount!</a></p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div>  
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/nike2.jpg" alt="">
							<div class="overlay"></div>
						</div>
						<div class="team-content">
							<h3>Nike</h3>
							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
							<p>Nike, 3 tipe warna cerah tersedia.<br>Harga Rp.420.000 <a href="">Discount!</a></p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div> 
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->

<!-- Team -->
	<div id="sweeter" class="section md-padding">

		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Sweater</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img1/SW1.jpg" alt="">
							<div class="overlay"></div>
						</div>
						<div class="team-content">
							<h3>Sweater Woll</h3>

							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star-half-alt"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
								<p>Sweater hangat, tipe warna lengkap.<br>Harga Rp.89.000</p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div>  
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img1/SW5.jpg" alt="">
							<div class="overlay"></div>
						</div>
						<div class="team-content">
							<h3>Sweater</h3>
							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
								<p>Ori Import Korea, tipe warna lengkap.<br>Harga Rp.99.900</p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div>  
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img1/SW2.jpg" alt="">
							<div class="overlay"></div>
						</div>
						<div class="team-content">
							<h3>Sweater Bulu</h3>
							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
							<p>Bahan halus dan lembut, Import Cina<br>Harga Rp.110.000 <a href="">Discount!</a></p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div> 
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->
	<!-- Team -->
	<div id="tas" class="section md-padding">

		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Backpack</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/consina.jpg" alt="">
							<div class="overlay"></div>
						</div>
						<div class="team-content">
							<h3>Consina</h3>

							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="far fa-star"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
								<p>Original Consina, tipe warna lengkap.<br>Harga Rp.299.000</p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div>  
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/tosca.jpg" alt="">
							<div class="overlay"></div>
						</div>
						<div class="team-content">
							<h3>Quechua</h3>
							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
								<p>Original Quechua, tipe warna lengkap.<br>Harga Rp.299.900</p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div>  
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/oranye.jpg" alt="">
							<div class="overlay"></div>
						</div>
						<div class="team-content">
							<h3>Eiger</h3>
							<span>
								<i class="fas fa-star" style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>
								<i class="fas fa-star"  style="color: #edae1c; font-size: 13pt;"></i>   
							</span>
							<p>Eiger, 3 tipe warna cerah.<br>Harga Rp.370.000 <a href="">Discount!</a></p>
								<div class="button">
								<a href="" type="button" class="btn btn-warning" style="margin-right: 3px;">Buy</a> 
								<a href="" type="button" class="btn btn-info">Detail</a>  
								</div> 
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->

	<!-- Blog -->
	<div id="news" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Recents news</h2>
				</div>
				<!-- /Section header -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="./img/blog1.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Ruary</li>
								<li><i class="fa fa-clock-o"></i>16 Mei</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul>
							<h3>Lorem ipsum dolor sit amet</h3>
							<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							<a href="blog-single.html">Read more</a>
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="./img/blog2.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Ruary</li>
								<li><i class="fa fa-clock-o"></i>17 Mei</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul>
							<h3>Lorem ipsum dolor sit amet</h3>
							<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							<a href="blog-single.html">Read more</a>
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive"  src="./img/blog3.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Ruary</li>
								<li><i class="fa fa-clock-o"></i>18 Mei</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul>
							<h3>Lorem ipsum dolor sit amet</h3>
							<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							<a href="blog-single.html">Read more</a>
						</div>
					</div>
				</div>
				<!-- /blog -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>(3302) 3435-2325</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>Happy_Shop@gmail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>Jl.Sulawesi Jember Kota</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
				
					<form class="contact-form" >
						<input type="text" class="input" placeholder="Name">
						<input type="email" class="input" placeholder="Email">
						<input type="text" class="input" placeholder="Subject">
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Send message</button>
					</form>
				
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding" style="background-color: #616263;">

		<!-- Container -->
		<div class="container">

			 <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
         <h2 style="color: #cecece;"><img src="img/LO.png" style="width: 115px;">Happy Shop</h2>
          <p style="color: #cccdce;">Layanan berbelanja cepat, mudah, dan terpercaya  <i class="far fa-handshake" style="font-size: 17pt; "></i></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et</p>
          <div>
          	<a href="" class="btn btn-default" style="color: #420d63; margin-right: 5px;"><img src="img/appleicon.png"> App Store</a>
          		<a href="" class="btn btn-default" style="color: #420d63"><img src="img/playicon.png"> Google Play</a>
          </div>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Social media</h5>

            <ul class="list-unstyled">
              <li>
               	<a href="" style="color: #8ab1d8;"><img src="img/Gmail.png" style="width: 45px; height: 45px;"> HappyShop@gmail.co.id</a>
              </li>
              <li>
               	<a href="" style="color: #8ab1d8;"><img src="img/fab.png" style="width: 42px; height: 42px;"> HappyShopping</a>
              </li>
              <li>
             	<a href="" style="color: #8ab1d8;"><img src="img/instagram.png" style="width: 45px; height: 45px;"> Happy_Shop</a>
              </li>
              <li>
               	<a href="" style="color: #8ab1d8;"><img src="img/tweeter.png" style="width: 45px; height: 45px;"> @Happy_Shop</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Layanan Lain</h5>

            <ul class="list-unstyled">
              <li>
                <a style="color:black;"><i class="fas fa-shipping-fast" style="margin-right: 5px;"></i> Free Ongkir.</a>
              </li>
              <li style="margin-top: 10px;">
	             
	                <a href="#" style="color:black;"><i class="fas fa-tags" style="margin-right: 5px;"></i> Discount per items.</a>
              </li>
              <li style="margin-top: 10px;">
	             
	                <a href="#" style="color:black;"><i class="fas fa-cart-plus" style="margin-right: 5px;"></i> Penukaran barang.</a>
              </li>

            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
