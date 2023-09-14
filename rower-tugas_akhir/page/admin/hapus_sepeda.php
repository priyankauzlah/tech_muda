<?php
include"../../koneksi_uzlah.php";
$bk=$_GET['id'];
mysqli_query($koneksi_uzlah,"DELETE FROM sepeda WHERE id_sepeda='$bk'");
header("location:index.php?page=sepeda");
 ?>