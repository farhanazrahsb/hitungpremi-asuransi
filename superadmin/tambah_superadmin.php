<?php
include "session_superadmin.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="img/png" href="../images/icon.png">
    <title>PT Asuransi Jasindo | Super Admin</title>
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
                <a class="navbar-brand" href="beranda.php">Jasindo</a>  
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
                  $query = mysql_query ("SELECT * FROM superadmin where username='$username'") or die (mysql_error());
                  while ($var=mysql_fetch_array($query)) {
                ?>
                        <li class="text-center">
                    <img src="gambar/<?php echo $var['gambar'];?>" width='150' class="user-image img-responsive"/>
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
                    <a href="#"><i class="fa fa-users"></i> Admin<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <li>
                    <a href="tambah_admin.php">Tambah Admin</a>
                    </li>
                    <li>
                    <a href="admin.php">Admin</a>
                    </li>
                    </ul>
                </li> 
                <li>
                    <a href="#" class="active-menu"><i class="fa fa-user"></i> Super Admin<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <li>
                    <a href="tambah_superadmin.php" class="active-menu">Tambah Super Admin</a>
                    </li>
                    <li>
                    <a href="superadmin.php">Super Admin</a>
                    </li>
                    </ul>
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
                     <h2>Tambah Super Admin</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Isi Data Diri Super Admin :
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="post" enctype="multipart/form-data" role="form">
                                        <div class="form-group">
                                        <label>NIP</label>
                                        <input name="nip" class="form-control" placeholder="NIP" />
                                        </div>
                                        <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" />
                                        </div>
                                        <div class="form-group">
                                        <label>Handphone</label>
                                        <input type="text" name="no_hp" class="form-control" placeholder="Handphone" />
                                        </div>
                                        <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" />
                                        </div>
                                        <div class="form-group">
                                        <label>Username</label>
                                        <input type="username" name="username" class="form-control" placeholder="Username" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" />
                                        </div>
                                        <div class="form-group">
                                        <label>Nama Bank</label>
                                        <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank" />
                                        </div>
                                        <div class="form-group">
                                        <label>Nama Rekening</label>
                                        <input type="text" name="nama_rek" class="form-control" placeholder="Nama Rekening" />
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Rekening</label>
                                        <input type="text" name="no_rek" class="form-control" placeholder="Nomor Rekening" />
                                        </div>
                                        <div class="form-group">
                                        <label>Foto Profile (3 x 4)*</label>
                                        <input type="file" name="gambar" class="form-control" />
                                        </div>
                                        <button type="submit" name="save" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </form>
                                    <?php
                                    include '../koneksi/koneksi.php';

                                    if (isset($_POST['save']))
                                    {
                                    $nama= $_FILES['gambar']['name'];
                                    $lokasi= $_FILES['gambar']['tmp_name'];
                                    move_uploaded_file($lokasi, "gambar/".$nama);
                                    $query = mysql_query("INSERT INTO superadmin (nip, nama, no_hp, email, username, password, nama_bank, nama_rek, no_rek, gambar) VALUES ('$_POST[nip]', '$_POST[nama]', '$_POST[no_hp]', '$_POST[email]', '$_POST[username]', '$_POST[password]', '$_POST[nama_bank]', '$_POST[nama_rek]', '$_POST[no_rek]', '$nama')");

                                    if ($query){
                                    echo "<script>alert('Berhasil Menginput')</script>";
                                    echo "<meta http-equiv='refresh' content='1 url=tambah_superadmin.php'>";
                                    }else{
                                    echo "<script>alert('Gagal Menginput')</script>";
                                    echo "<meta http-equiv='refresh' content='1 url=tambah_superadmin.php'>";
                                    }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
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
