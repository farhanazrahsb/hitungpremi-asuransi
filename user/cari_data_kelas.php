<?php
include "../koneksi/koneksi.php";

$okupasi = $_GET['okupasi'];
$kelas = mysql_query("SELECT id_okupasi,id_kelas,kelas FROM kelas_konstruksi WHERE id_okupasi='$okupasi' order by id_okupasi asc");
echo "<option>-- Pilih Kelas Konstruksi --</option>";
while($k = mysql_fetch_array($kelas)){
echo "<option value=\"".$k['id_kelas']."\">".$k['kelas']."</option>\n";
}
?>