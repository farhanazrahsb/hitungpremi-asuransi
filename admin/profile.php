<?php
include "../koneksi/koneksi.php";
include "session_admin.php";
if(isset($_GET['no']))
{
 $no = $_GET['no'];
 $sql_query=mysql_query('SELECT * FROM admin WHERE no="'.$no.'"');
 $row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$nip            = $_POST['nip'];
$nama           = $_POST['nama'];
$no_hp          = $_POST['no_hp'];
$email          = $_POST['email'];
$username       = $_POST['username'];
$password       = $_POST['password'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE admin SET nip='$nip', nama='$nama', no_hp='$no_hp', email='$email', username='$username', password='$password' WHERE nip='$nip'";
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diupdate');
  window.location.href='profile.php';
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
 header("Location: beranda.php");
}
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
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a href="beranda.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                <a href="user.php"><i class="fa fa-male"></i> User</a>
                </li>
                <li>
                <a href="order.php"><i class="fa fa-paper-plane-o"></i> Order</a>
                </li>
                <li>
                <a href="ratekebakaran.php"><i class="fa fa-fire"></i> Rate Kebakaran</a>
                </li>
                <li>
                <a href="ratekendaraan.php"><i class="fa fa-automobile"></i> Rate Kendaraan</a>
                </li>
                <li>
                <a href="admin.php"><i class="fa fa-users"></i> Admin</a>
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
                     <h2>Profile Admin</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                <?php
                $username = $_SESSION['username'];
                $query=mysql_query("select * from admin where username='".$username."'") or die (mysql_error());
                while($row=mysql_fetch_array($query)){
                ?>
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Profile Admin
                        </div>
                        <div class="panel-body">
                        <h3>Data Diri <?php echo $row['nama']; ?> :</h3>
                        <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="post" enctype="multipart/form-data" role="form">
                                        <div class="form-group">
                                        <label>NIP</label>
                                        <input name="nip" class="form-control" placeholder="NIP" value="<?php echo $row['nip']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Handphone</label>
                                        <input type="text" name="no_hp" class="form-control" placeholder="Handphone" value="<?php echo $row['no_hp']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Username</label>
                                        <input type="username" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $row['password']; ?>" />
                                        </div>
                                        <button type="submit" name="btn-update" class="btn btn-success">Update</button>
                                        <button type="submit" name="btn-cancel" class="btn btn-danger">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                     <?php
                     }
                     ?>
                </div>
            </div>
            </div>
        </div>         
    </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
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
