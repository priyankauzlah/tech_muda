<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$perkerjaan = $_POST['pekerjaan'];

mysqli_query($koneksi, "Insert into karyawan values('', '$nama', '$alamat', '$perkerjaan')");

header("location:index.php");
?>