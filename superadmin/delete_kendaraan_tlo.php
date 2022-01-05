<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from rate_kendaraan_tlo where no='$no'";
mysql_query($query);
header("location: ratekendaraan_tlo.php");
?>