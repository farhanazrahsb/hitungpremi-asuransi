<?php
include "session_superadmin.php";
include "chained_kend_allrisk.php";
include "../koneksi/koneksi.php";
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
                    <a href="#"><i class="fa fa-user"></i> Super Admin<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                    <li>
                    <a href="tambah_superadmin.php">Tambah Super Admin</a>
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
                     <h2>Polis Kendaraan All Risk</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Isi Data Polis Kendaraan All Risk :
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php
                                      include ('../koneksi/koneksi.php');

                                      $no = $_GET['no'];
                                      $query = mysql_query ("SELECT * FROM order_kendaraan WHERE no='$no'");
                                      while ($row=mysql_fetch_array($query)) {
                                    ?>
                                    <form method="post" enctype="multipart/form-data" role="form">
                                        <div class="form-group">
                                        <label>No Polis</label>
                                        <input name="id_order" class="form-control" placeholder="ID Order" value="<?php echo $row['id_order']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" name="tanggal" class="form-control" placeholder="Tanggal" value="<?php echo $row['tanggal']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $row['alamat']; ?>" readonly><?php echo $row['alamat']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label>Awal Pertanggungan</label>
                                        <input type="text" name="awal_pertanggungan" class="form-control" placeholder="Awal Pertanggungan" value="<?php echo $row['awal_pertanggungan']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Akhir Pertanggungan</label>
                                        <input type="text" name="akhir_pertanggungan" class="form-control" placeholder="Akhir Pertanggungan" value="<?php echo $row['akhir_pertanggungan']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Merk Kendaraan</label>
                                        <input type="text" name="merk_kend" class="form-control" placeholder="Merk Kendaraan" value="<?php echo $row['merk_kend']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Tipe Kendaraan</label>
                                        <input type="text" name="tipe_kend" class="form-control" placeholder="Tipe Kendaraan" value="<?php echo $row['tipe_kend']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Tahun Kendaraan</label>
                                        <input type="text" name="tahun_kend" class="form-control" placeholder="Tahun Kendaraan" value="<?php echo $row['tahun_kend']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Polisi</label>
                                        <input type="text" name="no_polisi" class="form-control" placeholder="Nomor Polisi" value="<?php echo $row['no_polisi']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Mesin</label>
                                        <input type="text" name="no_mesin" class="form-control" placeholder="Nomor Mesin" value="<?php echo $row['no_mesin']; ?>" readonly />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Nomor Rangka</label>
                                        <input type="text" name="no_rangka" class="form-control" placeholder="Nomor Rangka" value="<?php echo $row['no_rangka']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Penggunaan Kendaraan</label>
                                        <input type="text" name="penggunaan_kend" class="form-control" placeholder="Penggunaan Kendaraan" value="<?php echo $row['penggunaan_kend']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Harga Pertanggungan</label>
                                        <input type="text" name="harga_pertanggungan" class="form-control" placeholder="Harga Pertanggungan" value="<?php echo $row['harga_pertanggungan']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Kondisi Pertanggungan</label>
                                        <input type="text" name="kondisi_pertanggungan" class="form-control" placeholder="Kondisi Pertanggungan" value="<?php echo $row['kondisi_pertanggungan']; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                        <label>Rentan Harga Pertanggungan Kendaraan</label>
                                        <select name="id_kategori" class="form-control" id="id_kategori">
                                            <option selected="selected">-- Pilih Rentan Harga Pertanggungan Kendaraan --</option>
                                            <?php 
                                            include "../koneksi/koneksi.php";
                                            
                                            $query=mysql_query("select * from kategori order by id_kategori asc");
                                            
                                            while($row=mysql_fetch_array($query))
                                            {
                                            ?>
                                            <option value="<?php  echo $row['id_kategori']; ?>"><?php  echo $row['tanggungan_awal']; ?> s/d <?php  echo $row['batas_tanggungan']; ?></option>
                                            <?php 
                                            }
                                            ?>
                                        </select>
                                        </div>      
                                        <div class="form-group">
                                        <label>Plat Wilayah Kendaraan</label>
                                        <select name="id_wilayah" class="form-control" id="id_wilayah">
                                            <option selected="selected">-- Pilih Plat Wilayah Kendaraan --</option>
                                        </select>
                                        </div>      
                                        
                                        <div class="form-group">
                                        <label>Rate Kendaraan</label>
                                        <select name="id_rate" class="form-control" id="id_rate">
                                            <option selected="selected">-- Pilih Rate Kendaraan --</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Biaya Polis</label>
                                        <input type="text" name="biaya_polis" class="form-control" value="20000" readonly>
                                        </div>
                                        <div class="form-group">
                                        <label>Biaya Materai</label>
                                        <input type="text" name="biaya_materai" class="form-control" value="12000" readonly>
                                        </div>
                                        <div class="form-group">
                                        <label>Jangka Waktu Pertanggungan</label>
                                        <input type="number" name="jangka_waktu" class="form-control" value="1" readonly>
                                        </div>
                                        <div class="form-group">
                                        <label>Status Polis</label>
                                        <select name="status_polis" class="form-control">
                                        <option selected="selected">-- Status Polis --</option>
                                        <option value="Belum Di Buat">Belum Di Buat</option>
                                        <option value="Sudah Di Buat">Sudah Di Buat</option>
                                        </select>
                                        </div>
                                        <input type="submit" class="btn btn-success" name="save" value="Save">
                                        <input type="reset" class="btn btn-warning" value="Reset">
                                    </form>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    include '../koneksi/koneksi.php';

                                    if (isset($_POST['save']))
                                    {

                                    $query = mysql_query("INSERT INTO polis_kend (id_order, tanggal, nama, alamat, awal_pertanggungan, akhir_pertanggungan, merk_kend, tipe_kend, tahun_kend, no_polisi, no_mesin, no_rangka, penggunaan_kend, harga_pertanggungan, kondisi_pertanggungan, id_kategori, id_wilayah, id_rate, biaya_polis, biaya_materai, jangka_waktu, status_polis) VALUES ('$_POST[id_order]', '$_POST[tanggal]', '$_POST[nama]', '$_POST[alamat]', '$_POST[awal_pertanggungan]', '$_POST[akhir_pertanggungan]', '$_POST[merk_kend]', '$_POST[tipe_kend]', '$_POST[tahun_kend]', '$_POST[no_polisi]', '$_POST[no_mesin]', '$_POST[no_rangka]', '$_POST[penggunaan_kend]', '$_POST[harga_pertanggungan]', '$_POST[kondisi_pertanggungan]', '$_POST[id_kategori]', '$_POST[id_wilayah]', '$_POST[id_rate]', '$_POST[biaya_polis]', '$_POST[biaya_materai]', '$_POST[jangka_waktu]', '$_POST[status_polis]')");

                                    if ($query){
                                    echo "<script>alert('Berhasil Menginput')</script>";
                                    echo "<meta http-equiv='refresh' content='1 url=order_kendaraan.php'>";
                                    }else{
                                    echo "<script>alert('Gagal Menginput')</script>";
                                    echo "<meta http-equiv='refresh' content='1 url=polis_kend.php'>";
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
