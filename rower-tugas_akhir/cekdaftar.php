<?php
include"koneksi_uzlah.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$qrycus = mysqli_query($koneksi_uzlah,"SELECT * from customer where username='$username' && password='$password'");
$datacus = mysqli_fetch_assoc($qrycus);
$usercus = $datacus['username'];
$passcus = $datacus['password'];
if($usercus==$username && $passcus==$password)
{
	header("location:daftar.php?pesan=sama");
}
else{
	mysqli_query($koneksi_uzlah,"INSERT into customer set nama='$nama', username='$username', password='$password'");
header("location:logincustomer.php?pesan=berhasil");
}
?>