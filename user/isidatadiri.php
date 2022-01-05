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
	<h2>Isi Data Diri</h2>
	<p><a href="beranda.php">Home »</a> Isi Data Diri </p>
</div>
<!--//banner -->

	
<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
		<div class="contact-heading">
			<h3 class="heading">Isi Data Diri</h3>
		</div>
		<?php
          $username = $_SESSION['username'];
          $query=mysql_query("select * from user where username='".$username."'") or die (mysql_error());
          while($row=mysql_fetch_array($query)){
        ?>
		<div class="contact-grids">
			<div class="col-md-6">
				<form method="post" enctype="multipart/form-data" role="form">
				<div class="form-group">
				<label>ID User</label>
				<input type="text" name="id_user" class="form-control" placeholder="ID User" value="<?php echo $row['id_user']; ?>" readonly>
				</div>
				<div class="form-group">
				<input type="hidden" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>" readonly>
				</div>
				<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>" readonly>
				</div>
				<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>" readonly>
				</div>
				<div class="form-group">
				<label>Handphone *</label>
				<input type="text" name="no_hp" class="form-control" placeholder="Handphone">
				</div>
				<div class="form-group">
				<label>Alamat *</label>
				<textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
				<label>Jenis Pekerjaan/Usaha *</label>
				<input type="text" name="jenis_usaha" class="form-control" placeholder="Jenis Pekerjaan/Usaha">
				</div>
				<div class="form-group">
				<label>Nama Kantor/Usaha *</label>
				<input type="text" name="nama_usaha" class="form-control" placeholder="Nama Kantor/Usaha">
				</div>
				<div class="form-group">
				<label>Jenis Usaha Yang Di Jual Belikan *</label>
				<input type="text" name="usaha_jualbeli" class="form-control" placeholder="Jenis Usaha Yang Di Jual Belikan">
				</div>
				<div class="form-group">
				<label>Alamat Kantor/Usaha *</label>
				<textarea name="alamat_usaha" class="form-control" placeholder="Alamat Kantor/Usaha"></textarea>
				</div>
				<div class="form-group">
				<label>Foto *</label>
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
                $query = mysql_query("INSERT INTO datalengkap_user (id_user, username, nama, email, no_hp, alamat, jenis_usaha, nama_usaha, usaha_jualbeli, alamat_usaha, gambar) VALUES ('$_POST[id_user]', '$_POST[username]', '$_POST[nama]', '$_POST[email]', '$_POST[no_hp]', '$_POST[alamat]', '$_POST[jenis_usaha]', '$_POST[nama_usaha]', '$_POST[usaha_jualbeli]', '$_POST[alamat_usaha]', '$nama')");

                if ($query){
                echo "<script>alert('Berhasil Menginput')</script>";
                echo "<meta http-equiv='refresh' content='1 url=datadiri.php'>";
                }else{
                echo "<script>alert('Gagal Menginput')</script>";
                echo "<meta http-equiv='refresh' content='1 url=isidatadiri.php'>";
                }
                }
                ?>				
			</div>
		</div>
		<?php }; ?> 
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