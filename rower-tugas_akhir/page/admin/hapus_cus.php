<?php
include"../../koneksi_uzlah.php";
$cus=$_GET['id'];
mysqli_query($koneksi_uzlah,"DELETE FROM customer WHERE id_pembeli='$cus'");
header("location:index.php?page=customer");
?>