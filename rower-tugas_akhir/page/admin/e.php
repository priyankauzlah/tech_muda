<?php
include"../../koneksi_uzlah.php";
$a=$_POST['id_ketegori'];
$b=$_POST['kategori'];

 mysqli_query($koneksi_uzlah,"UPDATE kategori SET   kategori='$b' WHERE id_ketegori='$a'");
 header("location:index.php?page=kategori");
?>