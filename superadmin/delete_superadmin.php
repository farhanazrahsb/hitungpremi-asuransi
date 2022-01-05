<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from superadmin where no='$no'";
mysql_query($query);
header("location: superadmin.php");
?>