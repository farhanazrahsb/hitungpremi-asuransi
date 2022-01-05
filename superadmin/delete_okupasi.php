<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from okupasi where no='$no'";
mysql_query($query);
header("location: okupasi.php");
?>