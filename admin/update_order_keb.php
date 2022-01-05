<?php
include "session_admin.php";
include "../koneksi/koneksi.php";
if(isset($_GET['no']))
{
 $sql_query="SELECT * FROM order_kebakaran WHERE no=".$_GET['no'];
 $result_set=mysql_query($sql_query);
 $row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$id_order             = $_POST['id_order'];
$tanggal              = $_POST['tanggal'];
$nama                 = $_POST['nama'];
$email                = $_POST['email'];
$alamat               = $_POST['alamat'];
$harga_pertanggungan  = $_POST['harga_pertanggungan'];
$jenis_dinding        = $_POST['jenis_dinding'];
$jenis_lantai         = $_POST['jenis_lantai'];
$jenis_tiang          = $_POST['jenis_tiang'];
$banyak_tingkat       = $_POST['banyak_tingkat'];
$jenis_penerangan     = $_POST['jenis_penerangan'];
$okupasi_bangunan     = $_POST['okupasi_bangunan'];
$batas_kiri           = $_POST['batas_kiri'];
$batas_kanan          = $_POST['batas_kanan'];
$batas_belakang       = $_POST['batas_belakang'];
$batas_depan          = $_POST['batas_depan'];
$alamat_okupasi       = $_POST['alamat_okupasi'];
$alat_pemadam         = $_POST['alat_pemadam'];
$lokasi_okupasi       = $_POST['lokasi_okupasi'];
$awal_pertanggungan   = $_POST['awal_pertanggungan'];
$akhir_pertanggungan  = $_POST['akhir_pertanggungan'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE order_kebakaran SET id_order='$id_order', tanggal='$tanggal', nama='$nama', email='$email', alamat='$alamat', harga_pertanggungan='$harga_pertanggungan', jenis_dinding='$jenis_dinding', jenis_lantai='$jenis_lantai', jenis_tiang='$jenis_tiang', banyak_tingkat='$banyak_tingkat', jenis_penerangan='$jenis_penerangan', okupasi_bangunan='$okupasi_bangunan', batas_kiri='$batas_kiri', batas_kanan='$batas_kanan', batas_belakang='$batas_belakang', batas_depan='$batas_depan', alamat_okupasi='$alamat_okupasi', alat_pemadam='$alat_pemadam', lokasi_okupasi='$lokasi_okupasi', awal_pertanggungan='$awal_pertanggungan', akhir_pertanggungan='$akhir_pertanggungan' WHERE no=".$_GET['no'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diupdate');
  window.location.href='order_kebakaran.php';
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
 header("Location: order_kebakaran.php");
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
                    <a class="active-menu" href="#"><i class="fa fa-paper-plane-o"></i> Order<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <li>
                    <a class="active-menu" href="order_kebakaran.php">Order Kebakaran</a>
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
                     <h2>Update Order Kebakaran</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Isi Data Order Kebakaran :
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="post" role="form">
                                        <div class="form-group">
                                        <label>ID Order</label>
                                        <input name="id_order" class="form-control" placeholder="ID Order" value="<?php echo $row['id_order']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" name="tanggal" class="form-control" placeholder="Tanggal" value="<?php echo $row['tanggal']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>"><?php echo $row['alamat']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Harga Pertanggungan</label>
                                        <input type="text" name="harga_pertanggungan" class="form-control" placeholder="Harga Pertanggungan" value="<?php echo $row['harga_pertanggungan']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Jenis Dinding</label>
                                        <input type="text" name="jenis_dinding" class="form-control" placeholder="Jenis Dinding" value="<?php echo $row['jenis_dinding']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Jenis Lantai</label>
                                        <input type="text" name="jenis_lantai" class="form-control" placeholder="Jenis Lantai" value="<?php echo $row['jenis_lantai']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Jenis Tiang</label>
                                        <input type="text" name="jenis_tiang" class="form-control" placeholder="Jenis Tiang" value="<?php echo $row['jenis_tiang']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Banyak Tingkat</label>
                                        <input type="text" name="banyak_tingkat" class="form-control" placeholder="Banyak Tingkat" value="<?php echo $row['banyak_tingkat']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Jenis Penerangan</label>
                                        <input type="text" name="jenis_penerangan" class="form-control" placeholder="Jenis Penerangan" value="<?php echo $row['jenis_penerangan']; ?>" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Okupasi Bangunan</label>
                                        <input type="text" name="okupasi_bangunan" class="form-control" placeholder="Okupasi Bangunan" value="<?php echo $row['okupasi_bangunan']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Batas Kiri</label>
                                        <input type="text" name="batas_kiri" class="form-control" placeholder="Batas Kiri" value="<?php echo $row['batas_kiri']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Batas Kanan</label>
                                        <input type="text" name="batas_kanan" class="form-control" placeholder="Batas Kanan" value="<?php echo $row['batas_kanan']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Batas Belakang</label>
                                        <input type="text" name="batas_belakang" class="form-control" placeholder="Batas Belakang" value="<?php echo $row['batas_belakang']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Batas Depan</label>
                                        <input type="text" name="batas_depan" class="form-control" placeholder="Batas Depan" value="<?php echo $row['batas_depan']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Alamat Okupasi</label>
                                        <textarea name="alamat_okupasi" class="form-control" value="<?php echo $row['alamat_okupasi']; ?>"><?php echo $row['alamat_okupasi']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Alat Pemadam</label>
                                        <input type="text" name="alat_pemadam" class="form-control" placeholder="Alat Pemadam" value="<?php echo $row['alat_pemadam']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Lokasi Okupasi</label>
                                        <input type="text" name="lokasi_okupasi" class="form-control" placeholder="Lokasi Okupasi" value="<?php echo $row['lokasi_okupasi']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Awal Pertanggungan</label>
                                        <input type="text" name="awal_pertanggungan" class="form-control" placeholder="Awal Pertanggungan" value="<?php echo $row['awal_pertanggungan']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Akhir Pertanggungan</label>
                                        <input type="text" name="akhir_pertanggungan" class="form-control" placeholder="Akhir Pertanggungan" value="<?php echo $row['akhir_pertanggungan']; ?>" />
                                        </div>
                                        <input type="submit" class="btn btn-primary" name="btn-update" value="Update">
                                        <input type="submit" class="btn btn-default" name="btn-cancel" value="Cancel">
                                    </form>
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
