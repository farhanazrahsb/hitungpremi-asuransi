<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from polis_kend where no='$no'";
mysql_query($query);
header("location: order_kendaraan.php");
?>