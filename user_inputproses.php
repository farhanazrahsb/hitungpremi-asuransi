<?php ob_start();
include 'koneksi/koneksi.php';

$id_user        = $_POST['id_user'];
$nama           = $_POST['nama'];
$username		= $_POST['username'];
$password       = $_POST['password'];
$email	        = $_POST['email'];

if (empty($id_user)){
echo "<script>alert('ID user belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{

$query= mysql_query("INSERT INTO user (id_user, nama, username, password, email) VALUES ('$id_user', '$nama', '$username', '$password', '$email')") or die (mysql_error());
if ($query) {
echo "<script>alert('Berhasil')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
}
?>