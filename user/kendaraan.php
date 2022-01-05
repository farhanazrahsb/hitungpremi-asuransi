<?php
include '../koneksi/koneksi.php';
include 'session_user.php';
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="img/png" href="../images/icon.png">
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
	
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet">
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
					<ul class="nav navbar-nav">
					<li class="dropdown">
					<a class="login" href="#" data-toggle="dropdown" style="height: 35px; padding-top: 7px;"><?php echo $_SESSION['username'] ?><span class="caret"></span></a>
				      <ul class="dropdown-menu">
				        <li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
				        <li><a href="order.php"><i class="fa fa-book" aria-hidden="true"></i> Order</a></li>
				        <li><a href="logout.php" onclick="return konfirmasi()"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
				      </ul>
				    </li>
				    </ul>
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
						<a class="navbar-brand" href="beranda.php">
							<img src="../images/logo.png" width="150" height="60">
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
							<li><a href="beranda.php">Home</a></li>
							<li class="active"><a href="kendaraan.php">Kendaraan</a></li>
							<li><a href="kebakaran.php">Kebakaran</a></li>
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
	<h2>Kendaraan</h2>
	<p><a href="beranda.php">Home »</a> Kendaraan </p>
</div>
<!--//banner -->

	
<!-- contact -->
<section class="contact" id="contact">
<div class="container">
		<div class="contact-heading">
		Note :<br>
		<h5><b> Pertanggungan All risk (Coprehensive) merupakan pengcoveran seluruh casco akibat kecelakaan maupun kehilangan </b></h5>
		<h5><b> Pertanggungan TLO ( Total Loss Only ) merupakan pengcoveran hanya untuk kehilangan casco </b></h5>
		</div><br>
		<h3 class="heading">
		<a href="kendaraan_allrisk.php"><button type="submit" class="btn btn-success btn-lg">Kendaraan All Risk</button></a>
		<a href="kendaraan_tlo.php"><button type="submit" class="btn btn-success btn-lg">Kendaraan TLO</button></a>
		</h3>
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
						<h3 class="agileinfo_sign">LogIn To Your Account</h3>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->

	
	
	<!-- js -->
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>
	
	<!-- stats -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- owl carousel -->
	<script src="../js/owl.carousel.js"></script>
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
<script src="../js/responsiveslides.min.js"></script>
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
	<script defer src="../js/jquery.flexslider.js"></script>
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
	<script src="../js/move-top.js"></script>
	<script src="../js/easing.js"></script>
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
	<script src="../js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->

	<script type="text/javascript" language="JavaScript">
     function konfirmasi()
     {
     tanya = confirm("Anda Yakin Untuk Keluar ?");
     if (tanya == true) return true;
     else return false;
     }
	</script>

	<script type="text/javascript">
    $(function(){
    $('#id_kategori').change(function(){               
    $('#id_wilayah').load('cari_data_wilayah.php?kategori=' + $(this).val(),function(responseTxt,statusTxt,xhr)
    {
    if(statusTxt=="success")
    $('.loading').remove();
    });
    return false;
    });
    });
    </script>

    <script type="text/javascript">
    $(function(){
    $('#id_wilayah').change(function(){               
    $('#id_rate').load('cari_data_rate.php?wilayah=' + $(this).val(),function(responseTxt,statusTxt,xhr)
    {
    if(statusTxt=="success")
    $('.loading').remove();
    });
    return false;
    });
    });
    </script>

</body>
</html>