<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from polis_keb where no='$no'";
mysql_query($query);
header("location: order_kebakaran.php");
?>