<?php
include "../koneksi/koneksi.php";

$kelas = $_GET['kelas'];
$rate = mysql_query("SELECT id_kelas,rate FROM rate_kebakaran WHERE id_kelas='$kelas' order by id_kelas asc");
echo "<option>-- Pilih Rate Kebakaran --</option>";
while($k = mysql_fetch_array($rate)){
echo "<option value=\"".$k['rate']."\">".$k['rate']."</option>\n";
}
?>