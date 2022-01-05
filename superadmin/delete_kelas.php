<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from kelas_konstruksi where no='$no'";
mysql_query($query);
header("location: kelas.php");
?>