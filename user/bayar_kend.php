<?php
include '../koneksi/koneksi.php';
include 'session_user.php';
if(isset($_GET['no']))
{
 $sql_query="SELECT * FROM polis_kend WHERE no=".$_GET['no'];
 $result_set=mysql_query($sql_query);
 $row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$id_order      			   = $_POST['id_order'];
$tanggal      			   = $_POST['tanggal'];
$nama           		   = $_POST['nama'];
$nama_bank                 = $_POST['nama_bank'];
$nama_rek                  = $_POST['nama_rek'];
$no_rek                    = $_POST['no_rek'];
$total_tf                  = $_POST['total_tf'];
$status_bayar              = $_POST['status_bayar'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE polis_kend SET id_order='$id_order', tanggal='$tanggal', nama='$nama', nama_bank='$nama_bank', nama_rek='$nama_rek', no_rek='$no_rek', total_tf='$total_tf', status_bayar='$status_bayar' WHERE no=".$_GET['no'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diupdate');
  window.location.href='order.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Data Gagal Diupdate');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: order.php");
}
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
	<h2>Detail Bayar Premi Kendaraan</h2>
	<p><a href="beranda.php">Home »</a> Detail Bayar Premi Kendaraan </p>
</div>
<!--//banner -->

	
<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
		<div class="contact-heading">
			<h3 class="heading">Detail Bayar Premi Kendaraan</h3>
		</div>
		<div class="contact-heading">
		<a class="btn btn-info" onclick="self.history.back()"> <span class="fa fa-arrow-left" title="Kembali"></span></a><br>
		Note :<br>
		Untuk mentransfer biaya premi silahkan melalu nomor rekening berikut :<br>
		<?php
        include ('../koneksi/koneksi.php');
       
        $query = mysql_query ("SELECT * FROM superadmin");
        while ($var=mysql_fetch_array($query)) {
        ?>
		<h5><b><?php echo $var ['nama_bank']; ?> - <?php echo $var ['nama_rek']; ?> - <?php echo $var ['no_rek']; ?></b></h5>	
		<?php
		}
		?>
		</div><br>
		<div class="contact-grids">
			<div class="col-md-6">
				<form method="post" enctype="multipart/form-data" role="form">
				<div class="form-group">
				<label>ID Order</label>
				<input type="text" name="id_order" class="form-control" value="<?php echo $row ['id_order']; ?>" readonly>
				</div>
				<div class="form-group">
				<label>Tanggal</label>
				<input type="text" name="tanggal" class="form-control" value="<?php echo $row ['tanggal']; ?>" readonly>
				</div>
				<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $row ['nama']; ?>" readonly>
				</div>
				<?php
                    include ('../koneksi/koneksi.php');

                    $no=$_GET['no'];
                    $query = mysql_query ("SELECT * FROM polis_kend WHERE no='$no'");
                    while ($var=mysql_fetch_array($query)) {
                    	$premi= $var['harga_pertanggungan'] * $var['id_rate'] / 100;
					    $total = $premi + $var['biaya_polis'] + $var['biaya_materai'];
                ?>
                <div class="form-group">
				<input type="hidden" class="form-control" value="<?php echo $premi; ?>" readonly>
				</div>
				<div class="form-group">
				<label>Sub Total</label>
				<input type="text" class="form-control" value="<?php echo $total; ?>" readonly>
				</div>
				<?php
				}
				?>
				<div class="form-group">
				<label>Nama Bank</label>
				<input type="text" name="nama_bank" class="form-control" value="<?php echo $row ['nama_bank']; ?>">
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
				<label>Nama Rekening</label>
				<input type="text" name="nama_rek" class="form-control" value="<?php echo $row ['nama_rek']; ?>">
				</div>
				<div class="form-group">
                <label>Nomor Rekening</label>
				<input type="text" name="no_rek" class="form-control" value="<?php echo $row ['no_rek']; ?>">
				</div>
				<div class="form-group">
                <label>Total Transfer</label>
				<input type="text" name="total_tf" class="form-control" value="<?php echo $row ['total_tf']; ?>">
				</div>
				<div class="form-group">
				<label>Status Bayar</label>
				<select name="status_bayar" class="form-control">
					<option selected="selected">-- Pilih Status Bayar --</option>
					<option value="Sudah Di Bayar">Sudah Di Bayar</option>
					<option value="Belum Di Bayar">Belum Di Bayar</option>
				</select>
				</div>
				<div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" name="btn-update" value="Save">
                <input type="submit" class="btn btn-default" name="btn-cancel" value="Cancel">
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