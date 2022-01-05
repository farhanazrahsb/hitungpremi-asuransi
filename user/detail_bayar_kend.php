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
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:contactcenter@asuransijasindo.co.id"> contactcenter@asuransijasindo.co.id</a></li>
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
				        <li class="active"><a href="order.php"><i class="fa fa-book" aria-hidden="true"></i> Order</a></li>
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
							<li><a href="kendaraan.php">Kendaraan</a></li>
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
	<h2>Detail Bayar</h2>
	<p><a href="beranda.php">Home »</a> Detail Bayar </p>
</div>
<!--//banner -->

	
<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
		<div class="contact-heading">
			<h3 class="heading">Detail Bayar</h3>
		</div>
		<div class="contact-grids">
			<div class="col-md-12">
			<a class="btn btn-info" onclick="self.history.back()"> <span class="fa fa-arrow-left" title="Kembali"></span></a><br><br>
				<table class="table table-striped table-bordered table-hover">
                   	<?php
                    include ('../koneksi/koneksi.php');

                    $id_order=$_GET['id_order'];
                    $query = mysql_query ("SELECT * FROM polis_kend WHERE id_order='$id_order'");
                    while ($var=mysql_fetch_array($query)) {
                    	$premi= $var['harga_pertanggungan'] * $var['id_rate'] / 100;
					    $total = $premi + $var['biaya_polis'] + $var['biaya_materai'];
					    
					    $kategori=mysql_fetch_array(mysql_query("SELECT kategori FROM kategori WHERE id_kategori='$var[id_kategori]'"));
					    $wilayah=mysql_fetch_array(mysql_query("SELECT wilayah FROM data_wilayah WHERE id_wilayah='$var[id_wilayah]'"));
                    ?>
                    <tr>
                    <th>ID Order</th>
                    <td><?php echo $var ['id_order']; ?></td>
                    </tr>
                    <tr>
                    <th>Tanggal</th>
                    <td><?php echo $var ['tanggal']; ?></td>
                    </tr>
                    <tr>
                    <th>Nama</th>
                    <td><?php echo $var ['nama']; ?></td>
                    </tr>
                    <tr>
                    <th>Alamat</th>
                    <td><?php echo $var ['alamat']; ?></td>
                    </tr>
                    <tr>
                    <th>Awal Pertanggungan</th>
                    <td><?php echo $var ['awal_pertanggungan']; ?></td>
                    </tr>
                    <tr>
                    <th>Akhir Pertanggungan</th>
                    <td><?php echo $var ['akhir_pertanggungan']; ?></td>
                    </tr>
                    <tr>
                    <th>Merk Kendaraan</th>
                    <td><?php echo $var ['merk_kend']; ?></td>
                    </tr>
                    <tr>
                    <th>Tipe Kendaraan</th>
                    <td><?php echo $var ['tipe_kend']; ?></td>
                    </tr>
                    <tr>
                    <th>Tahun Kendaraan</th>
                    <td><?php echo $var ['tahun_kend']; ?></td>
                    </tr>
                    <tr>
                    <th>Nomor Polisi</th>
                    <td><?php echo $var ['no_polisi']; ?></td>
                    </tr>
                    <tr>
                    <th>Nomor Rangka</th>
                    <td><?php echo $var ['no_rangka']; ?></td>
                    </tr>
                    <tr>
                    <th>Nomor Mesin</th>
                    <td><?php echo $var ['no_mesin']; ?></td>
                    </tr>
					<tr>
                    <th>Penggunaan Kendaraan</th>
                    <td><?php echo $var ['penggunaan_kend']; ?></td>
                    </tr>
                    <tr>
                    <th>Harga Pertanggungan</th>
                    <td><b><?php echo $var ['harga_pertanggungan']; ?></b></td>
                    </tr>
                    <tr>
                    <th>Kondisi Pertanggungan</th>
                    <td><?php echo $var ['kondisi_pertanggungan']; ?></td>
                    </tr>
                    <tr>
                    <th>Jangka Waktu</th>
                    <td><?php echo $var ['jangka_waktu']; ?></td>
                    </tr>
                    <tr>
                    <th>Kategori</th>
                    <td><b><?php echo $kategori ['kategori']; ?></b></td>
                    </tr>
                    <tr>
                    <th>Wilayah</th>
                    <td><b><?php echo $wilayah ['wilayah']; ?></b></td>
                    </tr>
                    <tr>
                    <th>Rate</th>
                    <td><b><?php echo $var ['id_rate']; ?></b></td>
                    </tr>
                    <tr>
                    <th>Premi</th>
                    <td><b><?php echo $premi; ?></b></td>
                    </tr>
                    <tr>
                    <th>Biaya Polis</th>
                    <td><b><?php echo $var ['biaya_polis']; ?></b></td>
                    </tr>
                    <tr>
                    <th>Biaya Materai</th>
                    <td><b><?php echo $var ['biaya_materai']; ?></b></td>
                    </tr>
                    <tr>
                    <th>Sub Total</th>
                    <td><b><?php echo $total; ?></b></td>
                    </tr>
                    <tr>
                    <th>Status Polis</th>
                    <td><b><?php echo $var ['status_polis']; ?></b></td>
                    </tr>
                    <tr>
                    <th>Nama Bank</th>
                    <td><?php echo $var ['nama_bank']; ?></td>
                    </tr>
                    <tr>
                    <th>Nama Rekening</th>
                    <td><?php echo $var ['nama_rek']; ?></td>
                    </tr>
                    <tr>
                    <th>Nomor Rekening</th>
                    <td><?php echo $var ['no_rek']; ?></td>
                    </tr>
                    <tr>
                    <th>Total Transfer</th>
                    <td><?php echo $var ['total_tf']; ?></td>
                    </tr>
                    <tr>
                    <th>Status Bayar</th>
                    <td><b><?php echo $var ['status_bayar']; ?></b></td>
                    </tr>
                    <tr>
                    <td colspan="2"><a href="bayar_kend.php?&no=<?php echo $var['no']; ?>" class="btn btn-success btn-lg">Bayar</a></td>
                    </tr>
                    <?php
                    }
                    ?>
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

</body>
</html>