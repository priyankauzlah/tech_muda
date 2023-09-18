<div style="margin-top: 30px; width:100%,height:50px;text-align:center;background:#007DBC;color:#fff;line-height:60px;font-size:20px;">
<b>FINISHING ORDER</b>
</div>
<?php
include"../../koneksi_uzlah.php";
$id_pembeli = $_SESSION['id_pembeli'];
$query_checkout = mysqli_query($koneksi_uzlah,"SELECT * from  chekout where id_pembeli='$id_pembeli'");
$data_chekout = mysqli_fetch_assoc($query_checkout);
?>

<div  style="margin:50px;">
<h3><b>RECIPIENT DATA:</b></h3>
<table>
	<tr>
		<td><p><b>Name</b></p></td>  	<td>: <?php echo $data_chekout['nama']; ?></td>
	</tr>

	<tr>
		<td><p><b>Address</b></p></td>	<td>: <?php echo $data_chekout['alamat']; ?></td>
	</tr>

	<tr>
		<td><p><b>Phone Number</b></p></td>	<td>: <?php echo $data_chekout['nomor_tlp']; ?></td>
	</tr>
</table>

<h3><b>ORDER DATA</b></h3>
<?php
$qry = mysqli_query($koneksi_uzlah,"SELECT * from keranjang where id_pembeli='$id_pembeli'");
?>
<div class="jumbotron">
<table class="table table-bordered">
	<th>Name</th><th>Price</th><th>Qty</th><th>Price</th>
	<?php while($keranjang=mysqli_fetch_assoc($qry)){?>
		<tr>
		<td><?php
		$q = mysqli_query($koneksi_uzlah,"SELECT * from sepeda where id_sepeda='$keranjang[id_sepeda]'");
		$d = mysqli_fetch_assoc($q);
		$nama = $d['nama']; echo $nama;
		$qbyar = mysqli_fetch_assoc(mysqli_query($koneksi_uzlah,"SELECT SUM(total_harga) as total_bayar from keranjang where id_pembeli='$id_pembeli'"));
		$bayar = $qbyar['total_bayar'];
		?>
			
		</td>
		<td><?php echo $keranjang['harga'] ?></td>
		<td><?php echo $keranjang['qty']?></td>
		<td><?php echo $keranjang['total_harga']?></td>
		</tr>
<?php } ?>
<tr>
	<td colspan="3">Total</td><td><?php echo $bayar;  ?></td>
</tr>
<tr>
	<td colspan="3">Shipping fee</td><td>Rp.20,000,00</td>
</tr>
<tr>	
	<td colspan="3">Total Price</td><td>Rp.<?php $t_bayar=$bayar+20000; echo number_format($t_bayar); ?>,00</td>
</tr>
</table>
<h4>Next, you need to send the amount specified in the total payment to <b>BCA Bank, account no. 6500303030</b> under the name of <b>Priyanka Uzlah</b>. <br>
After making the payment, you can confirm it to <b><a href="http://wa.me/6285694551660"> Whatsapp:(+62) 85694551660</a></b>. <a href="index.php" class="btn btn-primary">DONE</a></br></br> </h4>
</div>
</div>