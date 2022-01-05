<?php
include "../koneksi/koneksi.php";

$wilayah = $_GET['wilayah'];
$rate = mysql_query("SELECT id_wilayah,rate FROM rate_kendaraan_tlo WHERE id_wilayah='$wilayah' order by id_wilayah asc");
echo "<option>-- Pilih Rate Kendaraan --</option>";
while($k = mysql_fetch_array($rate)){
echo "<option value=\"".$k['rate']."\">".$k['rate']."</option>\n";
}
?>