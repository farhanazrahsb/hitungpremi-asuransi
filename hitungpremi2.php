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
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:contactcenter@asuransijasindo.co.id"> contactcenter@asuransijasindo.co.id</a></li>
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
							<li class="active"><a href="kebakaran.php">Kebakaran</a></li>
							<li><a href="contact.php">Contact</a></li>
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
	<h2>Kebakaran</h2>
	<p><a href="index.php">Home »</a> Kebakaran </p>
</div>
<!--//banner -->

	
<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
		<div class="contact-heading">
			<h3 class="heading">Hitung Premi Kebakaran</h3>
		</div>
		<div class="contact-grids">
			<div class="bs-docs-example"><a class="btn btn-info" onclick="self.history.back()"> <span class="fa fa-arrow-left" title="Kembali"></span></a>
			<b>1 Unit Okupasi</b><br><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                        	<tr>
	                        	<th colspan="9"><a class="login" href="#" data-toggle="modal" data-target="#myModal1">Order</a></th>
	                        </tr>
                            <tr>
                                <th>Okupasi Bangungan</th>
                                <th>Kelas Konstruksi</th>
                                <th>Rate Premi (%)</th>
                                <th>Jangka Waktu (Tahun)</th>
                                <th>Harga</th>
                                <th>Premi</th>
                                <th>Biaya Polis</th>
                                <th>Bea Materai</th>
                                <th>Total Tagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include ('koneksi/koneksi.php');

                        $id_okupasi   = $_GET['id_okupasi'];
                        $id_kelas     = $_GET['id_kelas'];
                        $id_rate      = $_GET['id_rate'];
                        $jangka_waktu = $_GET['jangka_waktu'];
                        $harga        = $_GET['harga'];

                        $premi = $harga * $id_rate * $jangka_waktu / 1000;
                        $total = $premi + 20000 + 12000;
                        
                        $query = mysql_query("SELECT * FROM kelas_konstruksi WHERE id_kelas = '$_GET[id_kelas]'");
                        while ($var=mysql_fetch_array($query)) {
                        	$okupasi=mysql_fetch_array(mysql_query("SELECT keterangan FROM okupasi WHERE id_okupasi='$var[id_okupasi]'"));
                        	$kelas=mysql_fetch_array(mysql_query("SELECT kelas FROM kelas_konstruksi WHERE id_kelas='$var[id_kelas]'"));
                       	?>	
                       		<tr>	
                                <td><?php echo $okupasi ['keterangan']; ?></td>
                                <td><?php echo $kelas ['kelas']; ?></td>
                                <td><?php echo "$id_rate"; ?></td>
                                <td><?php echo "$jangka_waktu"; ?></td>
                                <td><?php echo "$harga"; ?></td>
                                <td><?php echo "$premi"; ?></td>
                                <td>20000</td>
                                <td>12000</td>
                                <td><b><?php echo "$total"; ?></b></td>
                            </tr>
                        <?php
                        } 
                        ?>
                        </tbody>
                        <tfoot>
                        	<tr>
                        		<td colspan="8" align="right"><b>Sub Total</b></td>
                        		<td><b><?php echo "$total"; ?></b></td>
                        	</tr>
                        </tfoot>
                    </table>
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