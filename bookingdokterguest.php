
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Pegia.com</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Infirmary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //js -->
<style>
	.logo{
	width: 190px;
	height: 55px;
	align="left";
	}
	
</style>

<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

<!--start-date-piker-->
	<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
<!--/End-date-piker-->
	<script src="js/responsiveslides.min.js"></script>
			<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!-- header -->
<div class="header wow zoomIn">
	<div class="container">
		<div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+6281 2773 8907</li>
				<li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>peduli.gizi@gmail.co.id</a></li>
			</ul>
		</div>
		<div class="header_right">
			<div class="login">
				<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Login</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Signup</a></li>
					<li>
						<div class="search-bar">
							<div class="search">		
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
							</div>
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								<div id="small-dialog" class="mfp-hide">
									<div class="search-top">
										<div class="login_pop">
											<form action="#" method="post">
												<input type="submit" value="">
												<input type="text" name="Type something..." value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
											</form>
										</div>				
									</div>
									<script>
												$(document).ready(function() {
												$('.popup-with-zoom-anim').magnificPopup({
													type: 'inline',
													fixedContentPos: false,
													fixedBgPos: true,
													overflowY: 'auto',
													closeBtnInside: true,
													preloader: false,
													midClick: true,
													removalDelay: 300,
													mainClass: 'my-mfp-zoom-in'
												});
																												
												});
									</script>				
								</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<div class="header-bottom "style="background-color: #F7F7F7">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo grid">
						<div class="grid__item color-3">
							<h1><a class="link link--nukun" href="index.php"><img class="logo" src="logowarna.png"></a></h1>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--horatio">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="index.php" class="menu__link">Home</a></li>  
							<li class="menu__item"><a href="CiriBalitaSehat.html" class="menu__link">Balita Sehat</a></li>
							<li class="menu__item"><a href="ArtikelHome.php" class="menu__link">Artikel</a></li> 
							<li class="menu__item  menu__item--current"><a href="bookingdokterguest.php" class="menu__link">Konsultasi</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<div class="content">
	<div class="container">
		<div class="col-md-4 content_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
			<div class="welcome">
				<h3>Anda Dapat Meminta Konsultasi Kepada Dokter Secara Langsung</h3>
				<ul>
					<li><a href="#">Mengecek Secara Langsung Gizi Anak Anda</a></li>
					<li><a href="#">Mendapat Tips Kesehatan Gizi Anak</a></li>
					<li><a href="#">Memberikan Hasil Konsultasi Cepat Tepat</a></li>
					<li><a href="#">Dokter akan menghubungi anda</a></li>
					<li><a href="#">Dll.....</a></li>
				</ul>
			</div>
		</div>
		<div id="book" class="col-md-4 content_middle wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s">
			<h3>Buat Jadwal Konsultasi</h3>
			<form action="booking.php" method="post">
				<input type="text" placeholder='Nama'name="nama" value="" onfocus="this.value='';" onblur="if(this.value=='') {this.value='';}" required=""style="color: black">
				<input type="text" placeholder='Nomor Telephone'name="no_telp" value="" onfocus="this.value='';" onblur="if(this.value=='') {this.value='';}" required=""style="color: black">
				<input class="date" placeholder='Booking Tanggal Berapa' name="tanggal" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">
				<select id="country" class="frm-field required sect"name="dokter"onblur="if(this.value=='') {this.value='';}" required=""style="color: black">
					<option value="">Pilih Ahli Gizi</option>
					<option value="Dr.David Nobel">Dr.David Nobel</option> 
					<option value="Dr.Ruins Leon">Dr.Ruins Leon</option>					
					<option value="Dr.Tatang Supratman">Dr.Tatang Supratman</option>
					<option value="Dr.Boyke">Dr.Boyke</option>											
				</select>
			</form>
							<input type="submit" value="Book Now"data-toggle="modal" data-target="#myModal4">
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //content -->
<!-- team -->
<div class="ind-team"style="background-color: #F7F7F7">
	<div class="container"style="color: #017CC3">
		<h1 style="text-align: center;">What Mom Should Do</h1>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/pic4.png" alt=" "/>
			</div>
		</div>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/pic5.png" alt=" "/>
			</div>
		</div>
		<div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<div class="team-img">
				<img class="img-responsive" src="images/pic6.png" alt=" "/>
			</div>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!-- team -->
<!-- contact -->
<div class="contact">
	<div class="container">
		
		<div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h3>Contact Us</h3>
			<div class="strip"></div>
			<ul class="con-icons">
				<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+6281 2773 8907</li>
				<li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>peduli.gizi@gmail.co.id</a></li>
			</ul>
			<ul class="fb_icons">
				<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
			</ul>
		</div>
		<div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h2>Information</h2>
			<div class="strip"></div>
			<p class="para">Pegia merupakan sebuah aplikasi berbasis web yang menawarkan pemeriksaan status gizi kepada ibu. Dalam aplikasi ini, ibu dapat mengecek status gizi anak balitanya. Aplikasi ini dibangun dibawah pengawasan bapak Poorwo Soedarwo.</p>
			<p class="copy-right">© 2017 Pegia. All rights reserved</p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form action="login.php" method="post">
											<div class="sign-in">
												<h4>Username :</h4>
												<input type="text" placeholder='Username' name="username" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" placeholder='Password'name="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">
											</div>

											<div class="sign-in">
												<input type="submit" name = "login" value="login" >
											</div>
											<h4>Belum punya akun Pegia? <a href="#" data-toggle="modal" data-target="#myModal5"> Daftar Disini</a> </h4>											
										</form>
									</div>
									
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<!-- login -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form action="register.php" method="post">
											<div class="sign-up">
												<h4>Username :</h4>
												<input type="text" placeholder='username' name="username" id="username"value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">	
											</div>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" placeholder='email' name="email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" placeholder='password' name="password" value="" id="password"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" placeholder='password'value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->

<!-- umur 0-6 bulan-->
			<div class="modal fade" id="umur0-6bulan" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>Isi Form Anak Anda</h3>
										<h4>Umur : 0-6 Bulan</h4>
										<form action="gizi.php" method="post">
											<div class="sign-up">
												<h4>Tinggi :</h4>
												<input type="text" name="tinggi" value="" placeholder='Isi Tinggi'onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Berat :</h4>
												<input type="text" name="berat" value="" placeholder='Isi Berat'onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
											</div>
											<div class="sign-up">
												<input type="submit" value="Submit" >
											</div>
											
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //umur -->
<!-- umur 7-12 bulan-->
			<div class="modal fade" id="umur7-12bulan" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>Isi Form Anak Anda</h3>
										<h4>Umur : 7-12 Bulan</h4>
										<form action="gizi.php" method="post">
											<div class="sign-up">
												<h4>Tinggi :</h4>
												<input type="text" name="tinggi" value="" placeholder='Isi Tinggi'onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Berat :</h4>
												<input type="text" name="berat" value="" placeholder='Isi Berat'onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
											</div>
											<div class="sign-up">
												<input type="submit" value="Submit" >
											</div>
											
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //umur -->
<!-- umur 1-2 tahun-->
			<div class="modal fade" id="umur1-2tahun" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>Isi Form Anak Anda</h3>
										<h4>Umur : 1-2 Tahun</h4>
										<form action="gizi.php" method="post">
											<div class="sign-up">
												<h4>Tinggi :</h4>
												<input type="text" name="tinggi" value="" placeholder='Isi Tinggi'onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Berat :</h4>
												<input type="text" name="berat" value="" placeholder='Isi Berat'onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
											</div>
											<div class="sign-up">
												<input type="submit" value="Submit" >
											</div>
											
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //umur -->
<!-- umur 3-5 tahun-->
			<div class="modal fade" id="umur3-5tahun" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>Isi Form Anak Anda</h3>
										<h4>Umur : 3-5 Tahun</h4>
										<form action="gizi.php" method="post">
											<div class="sign-up">
												<h4>Tinggi :</h4>
												<input type="text" name="tinggi" value="" placeholder='Isi Tinggi'onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Berat :</h4>
												<input type="text" name="berat" value="" placeholder='Isi Berat'onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
											</div>
											<div class="sign-up">
												<input type="submit" value="Submit" >
											</div>
											
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //umur -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>

