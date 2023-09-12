<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$perkerjaan = $_POST['pekerjaan'];

mysqli_query($koneksi, "Update karyawan set nama='$nama', alamat='$alamat', perkerjaan='$perkerjaan' where id='$id'");

header("location:index.php");
?>