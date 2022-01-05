<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from kategori where no='$no'";
mysql_query($query);
header("location: kategori.php");
?>