<html>
<head>
<title>Hasil Simulasi Kredit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="images/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
$harga=$_POST['harga'];
$uang_muka=$_POST['uang_muka'];
$tahun=$_POST['tahun'];
?>
<center>
Simulasi Kredit Kendaraan<br>
<br>
<table border="1" cellpadding="2" cellspacing="2">
<tr>
<td width="200">Harga Kendaraan</td>
<!-- <?php $hargakoma=number_format($harga); ?> -->
<td width="142" align="right"><?php echo "$hargakoma" ;?></td>
</tr>
<tr>
<td>Uang Muka</td>
<!-- <?php $uang_mukakoma=number_format($uang_muka); ?> -->
<td align="right"><?php echo "$uang_mukakoma"; ?></td>
</tr>
<tr>
<td>Pokok Pinjaman</td>
<?php $pokok_pinjaman=$harga-$uang_muka ;
if ($tahun==1) {
$bunga=$tahun*0.0818 ; }
if ($tahun==2) {
$bunga=$tahun*0.0938 ; }
if ($tahun==3) {
$bunga=$tahun*0.1068 ; }
if ($tahun==1) {
$asuransi=0.0125*$harga; }
if ($tahun==2) {
$asuransi=0.0238*$harga; }
if ($tahun==3) {
$asuransi=0.0238*$harga; }
$asuransikoma=number_format($asuransi);
$jumlah_bunga=$bunga*$pokok_pinjaman ;
$total_pinjaman=$pokok_pinjaman+$jumlah_bunga;
$total_pinjamankoma=number_format($total_pinjaman);
$jangka_kredit=$tahun*12;
$cicilan=$total_pinjaman/$jangka_kredit;
$cicilanbunga=number_format($cicilan);
$pokok_pinjamankoma=number_format($pokok_pinjaman);
if ($tahun==1) {
$biaya_adm=500000; }
if ($tahun==2) {
$biaya_adm=550000; }
if ($tahun==3) {
$biaya_adm=600000; }
$biaya_admkoma=number_format($biaya_adm);
$total_pembayaran_pertama=$uang_muka+$cicilan+$biaya_adm+$asuransi;
$total_pembayaran_pertamakoma=number_format($total_pembayaran_pertama);
?>
<td align="right"><?php echo "$pokok_pinjamankoma"; ?></td>
</tr>
<tr>
<td>Lama Pinjaman</td>
<td align="right"><?php echo "$jangka_kredit"; ?></td>
</tr>
<tr>
<td>Angsuran Pembayaran</td>
<td align="right"><?php echo "$cicilanbunga"; ?></td>
</tr>
<tr>
<td>Asuransi Kendaraan TLO</td>
<td align="right"><?php echo "$asuransikoma"; ?></td>
</tr>
<tr>
<td>Biaya Administrasi</td>
<td align="right"><?php echo "$biaya_admkoma" ; ?></td>
</tr>
<tr>
<td>Total Pembayaran Pertama</td>
<td align="right"><?php echo "$total_pembayaran_pertamakoma"; ?></td>
</tr>
</table>
<br>| <a href="simulasi_form.php">COBA LAGI</a> | <a href="#">PRINT |
</body>
</html> 