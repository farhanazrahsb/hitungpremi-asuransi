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
	<h2>New Order Kendaraan</h2>
	<p><a href="beranda.php">Home ??</a> New Order Kendaraan </p>
</div>
<!--//banner -->

	
<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
	<a class="btn btn-info" onclick="self.history.back()"> <span class="fa fa-arrow-left" title="Kembali"></span> Back</a>
		<div class="contact-heading">
			<h3 class="heading">New Order Kendaraan</h3>
		</div>
		<div class="contact-grids">
			<div class="col-md-6">
				<form method="post" enctype="multipart/form-data" role="form">		
				<?php 
				include '../koneksi/koneksi.php';
				// membuat query max
				  $carikode = mysql_query("select max(id_order) from order_kendaraan") or die (mysql_error());
				  // menjadikannya array
				  $datakode = mysql_fetch_array($carikode);
				  // jika $datakode
				  if ($datakode) {
				   $nilaikode = substr($datakode[0], 1);
				   // menjadikan $nilaikode ( int )
				   $kode = (int) $nilaikode;
				   // setiap $kode di tambah 1
				   $kode = $kode + 1;
				   $kode_otomatis = "O".str_pad($kode, 2, "0", STR_PAD_LEFT);
				  } else {
				   $kode_otomatis = "O01";
				  }

				echo'
				<input type="hidden" name="id_order" class="form-control" value="'.$kode_otomatis.'" readonly>
				';?>
				<input type="hidden" name="tanggal" class="form-control" value="<?php echo date('d-m-Y') ?>" readonly>
				<input type="hidden" name="username" class="form-control" value="<?php echo $_SESSION['username']; ?>" readonly>
				<input type="hidden" name="status" class="form-control" value="Belum Di Proses" readonly>
				<div class="form-group">
				<label>Nama Tertanggung</label>
				<input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
				<label>Alamat Tertanggung</label>
				<textarea name="alamat" class="form-control"></textarea>
				</div>
				<div class="form-group">
				<label>Merk Kendaraan</label>
				<input type="text" name="merk_kend" class="form-control">
				</div>
				<div class="form-group">
				<label>Tipe Kendaraan</label>
				<input type="text" name="tipe_kend" class="form-control">
				</div>
				<div class="form-group">
				<label>Tahun Pembuatan</label>
				<h5 style="color: red;">* Usia Kendaraan Maksimal 5 Tahun Dari Tahun (<?php echo date("Y"); ?>)</h5>
				<input type="text" name="tahun_kend" class="form-control">
				</div>
				<div class="form-group">
				<label>Nomor Polisi</label>
				<input type="text" name="no_polisi" class="form-control">
				</div>
				<div class="form-group">
				<label>Nomor Rangka</label>
				<input type="text" name="no_rangka" class="form-control">
				</div>
				<div class="form-group">
				<label>Nomor Mesin</label>
				<input type="text" name="no_mesin" class="form-control">
				</div>
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
				</div>
				<div class="col-md-6">
				<div class="form-group">
				<label>Tempat Duduk</label>
				<input type="text" name="tempat_ddk" class="form-control">
				</div>
				<label>Daya Angkut</label>
				<div class="input-group w3_w3layouts">
				<input type="text" name="daya_angkut" class="form-control">
				<span class="input-group-addon" id="basic-addon2">Ton</span>
				</div>
				<div class="form-group">
				<label>Kondisi Pertanggungan</label>
				<select name="kondisi_pertanggungan" class="form-control">
					<option selected="selected">-- Kondisi Pertanggungan --</option>
					<option value="All Risk">All Risk</option>
					<option value="TLO">TLO</option>
				</select>
				</div>
				<label>Harga Pertanggungan</label>
				<div class="input-group w3_w3layouts">
				<input type="text" name="harga_pertanggungan" class="form-control">
				<span class="input-group-addon" id="basic-addon2">Juta</span>
				</div>
				<div class="form-group">
				<label>Penggunaan Kendaraan</label>
				<select name="penggunaan_kend" class="form-control">
					<option selected="selected">-- Penggunaan Kendaraan --</option>
					<option value="Pribadi">Pribadi</option>
					<option value="Dinas">Dinas</option>
					<option value="Komersil">Komersil</option>
				</select>
				</div>
				<div class="form-group">
				<label>Awal Pertanggungan</label>
				<input type="date" name="awal_pertanggungan" class="form-control">
				</div>
				<div class="form-group">
				<label>Akhir Pertanggungan</label>
				<input type="date" name="akhir_pertanggungan" class="form-control">
				</div>
				<div class="form-group">
				<label>Alamat Survai</label>
				<textarea name="alamat_kend" class="form-control"></textarea>
				</div>
				<div class="form-group">
				<input type="hidden" name="status_button" class="form-control" value="disabled">
				</div>
				<div class="form-group">
				<label>Upload Gambar</label>
				<input type="file" name="gambar" class="form-control">
				</div>
				<div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-success" name="save" value="Save">
                <input type="reset" class="btn btn-warning" value="Reset">
            	</div>
				</form>
				<?php
                include '../koneksi/koneksi.php';

                if (isset($_POST['save']))
                {
                $nama= $_FILES['gambar']['name'];
                $lokasi= $_FILES['gambar']['tmp_name'];
                move_uploaded_file($lokasi, "gambar/".$nama);
                $query = mysql_query("INSERT INTO order_kendaraan (id_order, tanggal, username, status, nama, email, alamat, merk_kend, tipe_kend, tahun_kend, no_polisi, no_rangka, no_mesin, jenis_kend, tempat_ddk, daya_angkut, kondisi_pertanggungan, harga_pertanggungan, penggunaan_kend, awal_pertanggungan, akhir_pertanggungan, alamat_kend, status_button, gambar) VALUES ('$_POST[id_order]', '$_POST[tanggal]', '$_POST[username]', '$_POST[status]', '$_POST[nama]', '$_POST[email]', '$_POST[alamat]', '$_POST[merk_kend]', '$_POST[tipe_kend]', '$_POST[tahun_kend]', '$_POST[no_polisi]', '$_POST[no_rangka]', '$_POST[no_mesin]', '$_POST[jenis_kend]', '$_POST[tempat_ddk]', '$_POST[daya_angkut]', '$_POST[kondisi_pertanggungan]', '$_POST[harga_pertanggungan]', '$_POST[penggunaan_kend]', '$_POST[awal_pertanggungan]', '$_POST[akhir_pertanggungan]', '$_POST[alamat_kend]', '$_POST[status_button]', '$nama')");

                if ($query){
                echo "<script>alert('Berhasil Menginput')</script>";
                echo "<meta http-equiv='refresh' content='1 url=order.php'>";
                }else{
                echo "<script>alert('Gagal Menginput')</script>";
                echo "<meta http-equiv='refresh' content='1 url=neworder_kendaraan.php'>";
                }
                }
                ?>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->

<!-- footer -->
<div class="footer_w3ls">
	<div class="container">
				<div class="footer_bottom1">
					<p>?? <?php echo date("Y"); ?> <a href="http://jasindo.co.id" target="blank">PT Asuransi Jasindo.</a> All Rights Reserved </p> 
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