<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="img/png" href="images/icon.png">
	<title>PT Asuransi Jasindo</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Corporation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	
	<link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
		
</head>

<body>
	<!-- header -->
<div class="header">
	<div class="agileits_top_menu">
		<div class="container">
		<div class="w3l_header_left">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> 15000-73</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:contactcenter@asuransijasindo.co.id"> contactcenter@asuransijasindo.co.id</a></li>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Let. Jen MT Haryono Kav. 58 - 60 Jakarta</li>
				</ul>
			</div>
			<div class="w3l_header_right">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" target="blank" href="https://www.facebook.com/JasindoID/?ref=br_rs"><i class="fa fa-facebook"></i></a>
					<a class="twitter" target="blank" href="https://twitter.com/JasindoID?lang=id"><i class="fa fa-twitter"></i></a>
					<a class="login" href="#" data-toggle="modal" data-target="#myModal1">Login</a>
					<a class="login" href="#" data-toggle="modal" data-target="#myModal2">Sign Up</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.php">
							<img src="images/logo.png" width="150" height="60">
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="kendaraan.php">Kendaraan</a></li>
							<li><a href="kebakaran.php">Kebakaran</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
							<li><a href="info.php" title="Info"><i class="fa fa-info-circle"></i></a></li>
						</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
<!-- banner -->
<div class="banner">
	<h2>Contact Us</h2>
	<p><a href="index.php">Home »</a> Contact us </p>
</div>
<!--//banner -->

	
<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
		<div class="contact-heading">
			<h3 class="heading">Contact us</h3>
		</div>
		<div class="contact-grids">
			<div class="col-md-5 contact-form">
			<h4 class="heading">Get In Touch</h4>
				<form method="post" enctype="multipart/form-data" role="form">
						<input type="text" name="nama" placeholder="Full Name" required=""/>
						<input type="email" name="email" placeholder="Your Mail" required=""/>
						<input type="text" name="no_hp" placeholder="Mobile Number" required=""/>
						<textarea name="message" placeholder="Message" required=""></textarea>
						<div class="submit1">
							<input type="submit" value="send" name="save">
						</div>
				</form>
				<?php
                include 'koneksi/koneksi.php';
                if (isset($_POST['save']))
                {
                $query = mysql_query("INSERT INTO message (nama, email, no_hp, message) VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[no_hp]', '$_POST[message]')");

                if ($query){
                echo "<script>alert('Berhasil Menginput')</script>";
                echo "<meta http-equiv='refresh' content='1 url=contact.php'>";
                }else{
                echo "<script>alert('Gagal Menginput')</script>";
                echo "<meta http-equiv='refresh' content='1 url=contact.php'>";
                }
                }
                ?>				
			</div>
			<div class=" col-md-7 map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126916.8883593823!2d106.7749673931873!3d-6.243589712591049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3b910bd2a81%3A0x7ffbff4371c64748!2sKantor+Pusat+PT.Asuransi+JASINDO!5e0!3m2!1sid!2sid!4v1522936992499"></iframe>
				<div class="col-md-4 contact-grid1">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<div class="contact-right">
						<p>Address</p>
						<span>Jl. Let. Jen MT Haryono Kav. 58 - 60 Jakarta</span>
					</div>
				</div>
				<div class="col-md-4 contact-grid1">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<div class="contact-right">
						<p>Phone</p>
						<span>15000-73</span>
					</div>
				</div>
				<div class="col-md-4 contact-grid1">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<div class="contact-right">
						<p>Email</p>
						<a href="mailto:contactcenter@asuransijasindo.co.id">contactcenter@asuransijasindo.co.id</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->

<!-- footer -->
<div class="footer_w3ls">
	<div class="container">
				<div class="footer_bottom1">
					<p>© <?php echo date("Y"); ?> <a href="http://jasindo.co.id" target="blank">PT Asuransi Jasindo.</a> All Rights Reserved </p> 
				</div>
	</div>
</div>
<!-- //footer -->


	<!-- signin Model -->
	<!-- Modal1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="main-mailposi">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
				<div class="modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Login To Your Account</h3>
					<form action="login_proses.php" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="text" placeholder="Username" name="username" required="">
						</div>
						<div class="styled-input">
							<input type="password" placeholder="Password" name="password" required="">
						</div>
						<input type="submit" value="Login">
					</form>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="main-mailposi">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
				<?php 
				include 'koneksi/koneksi.php';
				// membuat query max
				  $carikode = mysql_query("select max(id_user) from user") or die (mysql_error());
				  // menjadikannya array
				  $datakode = mysql_fetch_array($carikode);
				  // jika $datakode
				  if ($datakode) {
				   $nilaikode = substr($datakode[0], 1);
				   // menjadikan $nilaikode ( int )
				   $kode = (int) $nilaikode;
				   // setiap $kode di tambah 1
				   $kode = $kode + 1;
				   $kode_otomatis = "U".str_pad($kode, 2, "0", STR_PAD_LEFT);
				  } else {
				   $kode_otomatis = "U01";
				  }

				echo'
				<div class="modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Sign To Your Account</h3>
					<form action="user_inputproses.php" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="hidden" placeholder="ID User" name="id_user" required="" value="'.$kode_otomatis.'">
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" placeholder="Name" name="nama" required="">
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" placeholder="Username" name="username" required="">
						</div>
						<div class="styled-input">
							<input type="password" placeholder="Password" name="password" required="">
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="email" placeholder="Email" name="email" required="">
						</div>
						<input type="submit" value="Sign Up">
					</form>
					<div class="clearfix"></div>
				</div>';?>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->

	
	
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- owl carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds
				autoPlay: true,
				items: 3,
				itemsDesktop: [991, 2],
				itemsDesktopSmall: [414, 4]

			});
		}); 
	</script>
	<!-- //owl carousel -->
<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>

<!-- Flex slider-script -->
	<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!-- //Flex slider-script -->
<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	<!-- smooth scrolling js -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->

</body>
</html>