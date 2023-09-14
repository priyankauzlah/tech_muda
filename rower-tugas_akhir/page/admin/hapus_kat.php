<?php
include"../../koneksi_uzlah.php";
$bk=$_GET['id'];
mysqli_query($koneksi_uzlah,"DELETE FROM kategori WHERE id_ketegori='$bk'");
header("location:index.php?page=kategori");
 ?>