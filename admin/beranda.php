<?php
include "session_admin.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="img/png" href="../images/icon.png">
    <title>PT Asuransi Jasindo | Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="beranda.php">Jasindo Admin</a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> Date : <?php echo date("d-M-Y"); ?> | <a href="profile.php" title="Profile" style="color: white;"><i class="fa fa-user fa-lg"></i></a> | <a href="logout.php" onclick="return konfirmasi()" class="btn btn-danger square-btn-adjust">Logout</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <?php
                  include ('../koneksi/koneksi.php');
                  $username=$_SESSION['username'];
                  $query = mysql_query ("SELECT * FROM admin where username='$username'") or die (mysql_error());
                  while ($var=mysql_fetch_array($query)) {
                ?>
				        <li class="text-center">
                    <img src="../superadmin/gambar/<?php echo $var['gambar'];?>" width='150' class="user-image img-responsive"/>
					      </li>
								<?php
                }
                ?>
                <li>
                <a class="active-menu" href="beranda.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                <a href="user.php"><i class="fa fa-male"></i> User</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-paper-plane-o"></i> Order<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <li>
                    <a href="order_kebakaran.php">Order Kebakaran</a>
                    </li>
                    <li>
                    <a href="order_kendaraan.php">Order Kendaraan</a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fire"></i> Rate Kebakaran<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <li>
                    <a href="okupasi.php">Okupasi</a>
                    </li>
                    <li>
                    <a href="kelas.php">Kelas</a>
                    </li>
                    <li>
                    <a href="ratekebakaran.php">Rate</a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-automobile"></i> Rate Kendaraan<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <li>
                    <a href="kategori.php">Kategori</a>
                    </li>
                    <li>
                    <a href="wilayah.php">Wilayah</a>
                    </li>
                    <li>
                    <a href="ratekendaraan.php">Rate All Risk</a>
                    </li>
                    <li>
                    <a href="ratekendaraan_tlo.php">Rate TLO</a>
                    </li>
                    </ul>
                    </li>
                <li>
                    <a href="admin.php"><i class="fa fa-users"></i> Admin</a>
                </li>
                <li>
                    <a href="superadmin.php"><i class="fa fa-user"></i> Super Admin</a>
                </li>
                <li>
                <a href="message.php"><i class="fa fa-comment"></i> Message</a>
                </li> 
                </ul>
                </div>
                </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome <b><?php echo $_SESSION['username'] ?></b>, Nice to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <a href="message.php">
                <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-comment"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">
                    <?php
                    include '../koneksi/koneksi.php';
                             
                    $sql = "SELECT * FROM message";
                    $query = mysql_query($sql);
                    $count = mysql_num_rows($query);
                    if ($count<=0) {
                    echo "0";
                    }else{
                    echo "$count";
                    }  
                    ?> 
                    </p>
                    <p class="text-muted">Messages</p>
                </div>
             </div>
             </div>
             </a>
             <a href="user.php">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-male"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">
                    <?php
                    include '../koneksi/koneksi.php';
                             
                    $sql = "SELECT * FROM user";
                    $query = mysql_query($sql);
                    $count = mysql_num_rows($query);
                    if ($count<=0) {
                    echo "0";
                    }else{
                    echo "$count";
                    } 
                    ?> 
                    </p>
                    <p class="text-muted">Users</p>
                </div>
             </div>
             </div>
             </a>
             <a href="order_kendaraan.php">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-paper-plane-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">
                    <?php
                    include '../koneksi/koneksi.php';
                             
                    $sql = "SELECT * FROM order_kendaraan";
                    $query = mysql_query($sql);
                    $count = mysql_num_rows($query);
                    if ($count<=0) {
                    echo "0";
                    }else{
                    echo "$count";
                    } 
                    ?>
                    </p>
                    <p class="text-muted">Kendaraan</p>
                </div>
             </div>
             </div>
             </a>
             <a href="order_kebakaran.php">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-paper-plane-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">
                    <?php
                    include '../koneksi/koneksi.php';
                             
                    $sql = "SELECT * FROM order_kebakaran";
                    $query = mysql_query($sql);
                    $count = mysql_num_rows($query);
                    if ($count<=0) {
                    echo "0";
                    }else{
                    echo "$count";
                    } 
                    ?> 
                    </p>
                    <p class="text-muted">Kebakaran</p>
                </div>
             </div>
             </div>
             </a>
            </div>
                 <!-- /. ROW  -->
                <hr />                      
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
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
