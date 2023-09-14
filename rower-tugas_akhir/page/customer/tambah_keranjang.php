<?php
include"../../koneksi_uzlah.php";
session_start();
$id_pembeli = $_SESSION['id_pembeli'];
$q_aman = mysqli_query($koneksi_uzlah,"SELECT * from chekout where id_pembeli='$id_pembeli'");
$aman = mysqli_num_rows($q_aman);
if($aman==0)

{
$id_sepeda = $_POST['id_sepeda'];
$qty = $_POST['qty'];
$harga = $_POST['harga'];
$total_harga = $qty*$harga;
$qryseoeda = mysqli_query($koneksi_uzlah,"SELECT * from keranjang where id_sepeda='$id_sepeda'");
$q_stok = mysqli_query($koneksi_uzlah,"SELECT * from sepeda where id_sepeda='$id_sepeda'");
$d_stok = mysqli_fetch_assoc($q_stok);
$stok = $d_stok['stok'];
$siso_stok = $stok-$qty;
mysqli_query($koneksi_uzlah,"UPDATE sepeda set stok='$siso_stok' where id_sepeda='$id_sepeda'");
$data = mysqli_fetch_assoc($qrysepeda);
$idbuk = $data['id_sepeda'];
if($id_sepeda==$idbuk)
{
	$q_qty = mysqli_query($koneksi_uzlah,"SELECT * from keranjang where id_sepeda='$id_sepeda'");
	$data_qty = mysqli_fetch_assoc($q_qty);
	$qty1 = $data_qty['qty'];
	$qty2 = $qty1 + $qty;
	$tot = $harga * $qty2;
mysqli_query($koneksi_uzlah,"UPDATE keranjang set id_pembeli='$id_pembeli',id_sepeda='$id_sepeda',qty='$qty2',harga='$harga',total_harga='$tot' where id_sepeda='$id_sepeda'");
header("location:detail.php?page=keranjang");
}

else{
mysqli_query($koneksi_uzlah,"INSERT into keranjang set id_pembeli='$id_pembeli',id_sepeda='$id_sepeda',qty='$qty',harga='$harga',total_harga='$total_harga'");
header("location:detail.php?page=keranjang");
}
}
else if($aman>=1)
{
	header("location:index.php?pesan=blok");
}
?>