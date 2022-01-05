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
	<p><a href="index.php">Home »</a> Kendaraan </p>
</div>
<!--//banner -->

	
<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
		<div class="contact-heading">
			<h3 class="heading">Hitung Premi Kendaraan All Risk</h3>
		</div>
		<div class="contact-heading">
		<a class="btn btn-info" onclick="self.history.back()"> <span class="fa fa-arrow-left" title="Kembali"></span></a><br>
		Note :<br>
		Untuk menentukan wilayah plat kendaraan bermotor sesuaikan dengan ketentuan sebagai berikut :<br>
		<h5><b>- Wilayah 1 meliputi daerah :</b> Sumatera dan Kepulauan di sekitarnya.</h5>
		<h5><b>- Wilayah 2 meliputi daerah :</b> DKI Jakarta, Jawa Barat, dan Banten.</h5>
		<h5><b>- Wilayah 3 meliputi daerah :</b> Selain Wilayah 1 dan Wilayah 2.</h5>
		</div><br>
		<div class="contact-grids">
			<div class="col-md-6">
				<form method="get" action="hitungpremi.php">
				<div class="form-group">
				<label>Jenis Kendaraan</label>
				<select name="jenis_kend" class="form-control">
					<option selected="selected">-- Pilih Jenis Kendaraan --</option>
					<option value="Sedan">Sedan</option>
					<option value="Jeep">Jeep</option>
					<option value="Minibus">Minibus</option>
					<option value="Bus">Bus</option>
					<option value="Truck">Truck</option>
					<option value="Pick-Up">Pick-Up</option>
					<option value="Sepeda Motor">Sepeda Motor</option>
				</select>
				</div>
				<div class="form-group">
				<label>Plat Nomor Kendaraan</label>
				<input type="text" name="plat" class="form-control">
				</div>
				<div class="form-group">
				<label>Tahun Pembuatan Kendaraan</label>
				<h5 style="color: red;">* Usia Kendaraan Maksimal 5 Tahun Dari Tahun (<?php echo date("Y"); ?>)</h5>
				<input type="text" name="tahun" class="form-control">
				</div>
                <label>Jangka Waktu Pertanggungan</label>
				<div class="input-group w3_w3layouts">
				<input type="text" name="jangka_waktu" class="form-control" value="1" readonly="readonly">
				<span class="input-group-addon" id="basic-addon2">Tahun</span>
				</div>
				</div>
				<div class="col-md-6">
				<label>Harga Pertanggungan</label>
				<div class="input-group w3_w3layouts">
				<input type="text" name="harga" class="form-control">
				<span class="input-group-addon" id="basic-addon2">Juta</span>
				</div>
				<label>Rentan Harga Pertanggungan Kendaraan</label>
				<div class="input-group w3_w3layouts">
				<select name="id_kategori" class="form-control" id="id_kategori">
					<option selected="selected">-- Pilih Rentan Harga Pertanggungan Kendaraan --</option>
					<?php 
	                include "koneksi/koneksi.php";
	                
	                $query=mysql_query("select * from kategori order by id_kategori asc");
	                
	                while($row=mysql_fetch_array($query))
	                {
	                ?>
	                <option value="<?php  echo $row['id_kategori']; ?>"><?php  echo $row['tanggungan_awal']; ?> s/d <?php  echo $row['batas_tanggungan']; ?></option>
	                <?php 
	                }
	                ?>
				</select>
				<span class="input-group-addon" id="basic-addon2">Juta</span>
				</div>		
				<div class="form-group">
				<label>Plat Wilayah Kendaraan</label>
				<select name="id_wilayah" class="form-control" id="id_wilayah">
					<option selected="selected">-- Pilih Plat Wilayah Kendaraan --</option>
				</select>
				</div>		
				<label>Rate Kendaraan</label>
				<div class="input-group w3_w3layouts">
				<select name="id_rate" class="form-control" id="id_rate">
					<option selected="selected">-- Pilih Rate Kendaraan --</option>
				</select>
				<span class="input-group-addon" id="basic-addon2">%</span>
				</div>
				<div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-success" value="Hitung">
                <input type="reset" class="btn btn-warning" value="Reset">
            	</div>
            	</div>
				</form>
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