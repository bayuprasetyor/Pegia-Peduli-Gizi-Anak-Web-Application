
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Peduli Gizi Anak</title>
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
<?php
$koneksi     = mysqli_connect("localhost", "root", "", "submitsatu");
$komposisi       = mysqli_query($koneksi, "SELECT komposisi FROM submitdua order by no asc");
$penghasilan = mysqli_query($koneksi, "SELECT persentase FROM submitdua order by no asc");
?>
<script src="Chart.bundle.js"></script>

<style>
.chart{
                width: 40%;
                margin: 15px auto;
            }

	.logo{
	padding-bottom: 8px;
	width: 190px;
	height: 55px;
	align="left";
	}
.img6 {
    border-radius: 30px 0 30px 0;
    -moz-border-radius: 30px 0 30px 0;
    -webkit-border-radius: 30px 0 30px 0;
    -o-border-radius: 30px 0 30px 0;
    transition: all 0.5s;
    -moz-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    color: #01A4E4;
}

.img6:hover {
    box-shadow: 1px 1px 10px 3px;
    border-radius:0;
    -moz-border-radius:0;
    -webkit-border-radius:0;
    -o-border-radius:0;
}
h1 {
	font-family: sans-serif;
	font-weight: bold;
	font-size: 60px;
}
h2 {
	font-family: sans-serif;
	font-weight: bold;
	font-size: 40px;
}

.demo-table {
			border-collapse: collapse;
			font-size: 13px;
			align="left";
		}
		.demo-table th, 
		.demo-table td {
			padding: 7px 45px;
		}
		.demo-table .title {
			caption-side: bottom;
			margin-top: 20px;
		}
		.demo-table thead th:last-child,
		.demo-table tfoot th:last-child,
		.demo-table tbody td:last-child {
			border: 0;
		}

		/* Table Header */
		.demo-table thead th {
			border-right: 1px solid b;
			text-transform: uppercase;
		}

		/* Table Body */
		.demo-table tbody td {
			color: #353535;
			border-right: 1px solid #c7ecc7;
		}
		.demo-table tbody tr:nth-child(odd) td {
			background-color: #f4fff7;
		}
		.demo-table tbody tr:nth-child(even) td {
			background-color: #dbffe5;
		}
		.demo-table tbody td:nth-child(4),
		.demo-table tbody td:first-child,
		.demo-table tbody td:last-child {
			text-align: center;
		}
		.demo-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
			transition: all .2s;
		}

		/* Table Footer */
		.demo-table tfoot th {
			border-right: 1px solid #c7ecc7;
		}
		.demo-table tfoot th:first-child {
			text-align: right;
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
												
								</div>
						
					
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
							<li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>  
							<li class="menu__item"><a href="CiriBalitaSehat.html" class="menu__link">Balita Sehat</a></li>
							<li class="menu__item"><a href="ArtikelHome.php" class="menu__link">Artikel</a></li> 
							<li class="menu__item"><a href="bookingdokterguest.php" class="menu__link">Konsultasi</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>

<!-- banner -->
<div class="container main-container">
<h1 style="color:#01A4E4">Hasil</h1>
<br>          
    <div class="row">
    	<div class="col-md-4">
      		<div class="box">
        		<div class="box-content">
					<p style="color:black"><b>Umur</b> : 7-12 bulan</p>
          			<p style="color:black">Anak Anda tergolong Kategori : <b>Cukup</b></p>
          			<br>
          				<div class="row mb30">
           					<div class="col-sm-12">
								<p style="color:black"><b>Rekomendasi Ahli Gizi</b></p>
	            				<p style="color:black">Dari hasil perhitungan yang dilakukan maka didapatkan hasil bahwa anak anda butuh asupan gizi yang cukup dan pastinya tepat. Berikut ini merupakan saran gizi yang dibutuhkan oleh anak anda</p>
							</div>
						</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 text-left"align="left">
				<div class="chart text-left"align="left">
            		<canvas id="myChart" width="100" height="100"align="left"></canvas>
        		</div>
        </div>
	</div>
</div>	
	
			
	<div class="container main-container text-center" >          
    <div class="row">
        
<script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [<?php while ($b = mysqli_fetch_array($komposisi)) { echo '"' . $b['komposisi'] . '",';}?>],
                    datasets: [{
                            label: '# of Votes',
                            data: [<?php while ($p = mysqli_fetch_array($penghasilan)) { echo '"' . $p['persentase'] . '",';}?>],
                             backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
               
            });
        </script>
		<br>
		<br>
		<table class="demo-table">
		<caption class="title">Tabel Kecukupan Gizi Balita</caption>
		<p style="color:black"><b>Berikan Anak anda asupan makanan</b></p>
		<thead>
			<tr>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Waktu</td>
				<td>06.00</td>
				<td>09.00</td>
				<td>12.00</td>
				<td>15.00</td>
				<td>18.00</td>
				<td>21.00</td>
				<td>Tengah malam</td>
				
			</tr>
			<tr>
				<td>Susu/Makanan</td>
				<td>Bubur Susu</td>
				<td>Buah + Biskuit</td>
				<td>Bubur / Tim Saring</td>
				<td>Buah + Biskuit</td>
				<td>Bubur Susu</td>
				<td>ASI/SUSU</td>
				<td>ASI/SUSU</td>
			</tr>
			
		</tfoot>
	
	</table>
	</div>
	</div>
<!-- //banner -->

<!-- team -->
<div class="ind-team" style="background-color: #F7F7F7">
	<div class="container" style="color: #017CC3">
		<h1 style="text-align: center;">What Mom Should Do</h1>
		<h2 style="color: transparent;">harus</h2>
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
										<form action="#" method="post">
											<div class="sign-up">
												<h4>Tinggi :</h4>
												<input type="text" name="Type here" value="Isi Disini" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Berat :</h4>
												<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
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
										<form action="#" method="post">
											<div class="sign-up">
												<h4>Tinggi :</h4>
												<input type="text" name="Type here" value="Isi Disini" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Berat :</h4>
												<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
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
										<form action="#" method="post">
											<div class="sign-up">
												<h4>Tinggi :</h4>
												<input type="text" name="Type here" value="Isi Disini" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Berat :</h4>
												<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
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
										<form action="#" method="post">
											<div class="sign-up">
												<h4>Tinggi :</h4>
												<input type="text" name="Type here" value="Isi Disini" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Berat :</h4>
												<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
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

