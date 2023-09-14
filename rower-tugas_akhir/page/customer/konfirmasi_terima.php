<?php
include"../../koneksi_uzlah.php";
$id = $_GET['id'];
mysqli_query($koneksi_uzlah,"UPDATE chekout set status_terima='sudah diterima' where id_pembeli='$id'");
header("location:index.php?pesan=suwon");
?>