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
                    <a href="order_kebakaran.php">Order Kebakaran</a>
                    </li>
                    <li>
                    <a class="active-menu" href="order_kendaraan.php">Order Kendaraan</a>
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
                     <h2>Data Polis Kendaraan</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a class="btn btn-danger" onclick="self.history.back()"> <span class="fa fa-arrow-left" title="Kembali"></span> Back</a>
                        <?php
                        include ('../koneksi/koneksi.php');

                        $nama= $_GET['nama'];
                        $query = mysql_query ("SELECT DISTINCT nama FROM polis_kend WHERE nama='$nama'");
                        while ($var=mysql_fetch_array($query)) {
                        ?>
                        <b><?php echo $var ['nama']; ?></b>
                        <?php
                        }
                        ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Status Polis</th>
                                            <th>Cetak Polis</th>
                                            <th>ID Order</th>
                                            <th>Tanggal</th>
                                            <th>Alamat</th>
                                            <th>Awal Pertanggungan</th>
                                            <th>Akhir Pertanggungan</th>
                                            <th>Merk Kendaraan</th>
                                            <th>Tipe Kendaraan</th>
                                            <th>Tahun Kendaraan</th>
                                            <th>Nomor Polisi</th>
                                            <th>Nomor Mesin</th>
                                            <th>Nomor Rangka</th>
                                            <th>Penggunaan Kendaraan</th>
                                            <th>Harga Pertanggungan</th>
                                            <th>Kondisi Pertanggungan</th>
                                            <th>Kategori</th>
                                            <th>Wilayah</th>
                                            <th>Rate</th>
                                            <th>Total Premi</th>
                                            <th>Biaya Polis</th>
                                            <th>Biaya Materai</th>
                                            <th>Jangka Waktu</th>
                                            <th>Sub Total</th>
                                            <th>Nama Bank</th>
                                            <th>Nama Rekening</th>
                                            <th>Nomor Rekening</th>
                                            <th>Total Transfer</th>
                                            <th>Status Bayar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      include ('../koneksi/koneksi.php');

                                      $nama= $_GET['nama'];
                                      $query = mysql_query ("SELECT * FROM polis_kend WHERE nama='$nama'");
                                      $no=1;
                                      while ($var=mysql_fetch_array($query)) {
                                        $premi= $var['harga_pertanggungan'] * $var['id_rate'] / 100;
                                        $total = $premi + $var['biaya_polis'] + $var['biaya_materai'];
                                        $kategori=mysql_fetch_array(mysql_query("SELECT kategori FROM kategori WHERE id_kategori='$var[id_kategori]'"));
                                        $wilayah=mysql_fetch_array(mysql_query("SELECT wilayah FROM data_wilayah WHERE id_wilayah='$var[id_wilayah]'"));
                                    ?>
                                    <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $var ['status_polis']; ?></td>
                                    <td><a href="../superadmin/cetak/cetak_polis_kend.php?&id_order=<?php echo $var['id_order']; ?>" target="blank" type="button" class="btn btn-success btn-md" title="Cetak Polis"><i class="fa fa-print"></i></a></td>
                                    <td><?php echo $var ['id_order']; ?></td>
                                    <td><?php echo $var ['tanggal']; ?></td>
                                    <td><?php echo $var ['alamat']; ?></td>
                                    <td><?php echo $var ['awal_pertanggungan']; ?></td>
                                    <td><?php echo $var ['akhir_pertanggungan']; ?></td>
                                    <td><?php echo $var ['merk_kend']; ?></td>
                                    <td><?php echo $var ['tipe_kend']; ?></td>
                                    <td><?php echo $var ['tahun_kend']; ?></td>
                                    <td><?php echo $var ['no_polisi']; ?></td>
                                    <td><?php echo $var ['no_mesin']; ?></td>
                                    <td><?php echo $var ['no_rangka']; ?></td>
                                    <td><?php echo $var ['penggunaan_kend']; ?></td>
                                    <td><?php echo $var ['harga_pertanggungan']; ?></td>
                                    <td><?php echo $var ['kondisi_pertanggungan']; ?></td>
                                    <td><?php echo $kategori ['kategori']; ?></td>
                                    <td><?php echo $wilayah ['wilayah']; ?></td>
                                    <td><?php echo $var ['id_rate']; ?></td>
                                    <td><b><?php echo $premi; ?></b></td>
                                    <td><?php echo $var ['biaya_polis']; ?></td>
                                    <td><?php echo $var ['biaya_materai']; ?></td>
                                    <td><?php echo $var ['jangka_waktu']; ?></td>
                                    <td><b><?php echo $total; ?></b></td>
                                    <td><?php echo $var ['nama_bank']; ?></td>
                                    <td><?php echo $var ['nama_rek']; ?></td>
                                    <td><?php echo $var ['no_rek']; ?></td>
                                    <td><?php echo $var ['total_tf']; ?></td>
                                    <td><?php echo $var ['status_bayar']; ?></td>
                                    <td align="center"><?php echo "<a class='fa fa-trash-o fa-lg' title='Hapus' href='delete_polis_kend.php?no=$var[no]'></a>"; ?></td>
                                    </tr>
                                    <?php
                                    $no++;
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
