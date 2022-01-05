<?php
include "koneksi/koneksi.php";

$kategori = $_GET['kategori'];
$wilayah = mysql_query("SELECT id_kategori,id_wilayah,wilayah FROM data_wilayah WHERE id_kategori='$kategori' order by id_kategori asc");
echo "<option>-- Pilih Plat Wilayah Kendaraan --</option>";
while($k = mysql_fetch_array($wilayah)){
echo "<option value=\"".$k['id_wilayah']."\">".$k['wilayah']."</option>\n";
}
?>