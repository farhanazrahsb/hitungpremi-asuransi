<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from order_kendaraan where no='$no'";
mysql_query($query);
header("location: order.php");
?>