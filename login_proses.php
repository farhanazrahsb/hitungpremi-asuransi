<?php
require('koneksi/koneksi.php');
session_start();
if (isset($_POST['username'])){
$username=$_POST['username'];
$password=$_POST['password'];
 
// untuk keamanan
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
$sql="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
 
if($count==1){
	$_SESSION['username'] = $username;
echo "<script>alert('Selamat Datang $username')</script>";
echo "<script>window.location = 'user/beranda.php';</script>";
}
else {
echo "<script>alert('Login Gagal, Silahkan Login Kembali')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
}
?>