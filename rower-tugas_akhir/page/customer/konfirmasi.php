<div style="margin-top: 30px; width:100%,height:50px;text-align:center;background:#007DBC;color:#fff;line-height:60px;font-size:20px;">
<b>ACCEPTED CONFIRMATION</b>
</div>
<?php
include"../../koneksi_uzlah.php";
$id_pembeli = $_SESSION['id_pembeli'];
$query_checkout = mysqli_query($koneksi_uzlah,"SELECT * from  chekout where id_pembeli='$id_pembeli'");
$data_chekout = mysqli_fetch_assoc($query_checkout);
?>
<h3><b>RECIPIENT :</b></h3>
<table>
	<tr>
		<td><p><b>Name<i class="baseline-near_me"></i></b></p></td>  	<td>: <?php echo $data_chekout['nama']; ?></td>
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
	<td colspan="3">Shipping Cost</td><td>Rp.20,000,00</td>
</tr>
<tr>	
	<td colspan="3">Total Price</td><td>Rp.<?php $t_bayar=$bayar+20000; echo number_format($t_bayar); ?>,00</td>
</tr>
</table>
<p>Please confirm receipt of the goods if you have received the goods, so that you can carry out the transaction again <a href="konfirmasi_terima.php?id=<?php echo $id_pembeli; ?>" class="btn btn-primary">Confirm</a></p>
</div>