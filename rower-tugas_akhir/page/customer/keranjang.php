<?php
include"../../koneksi_uzlah.php";
$id_pembeli = $_SESSION['id_pembeli'];
$qry = mysqli_query($koneksi_uzlah,"SELECT * from keranjang where id_pembeli='$id_pembeli'");
@$aksi = $_GET['aksi'];
if($aksi=="hapus"){
	$id_keranjang = $_GET['id'];
	$query_qty = mysqli_query($koneksi_uzlah,"SELECT * from keranjang where id_keranjang='$id_keranjang'");
	$data_qty = mysqli_fetch_assoc($query_qty);
	$qty = $data_qty['qty'];
	$id_sepeda = $data_qty['id_sepeda'];
	$query_sepeda = mysqli_query($koneksi_uzlah,"SELECT * from sepeda where id_sepeda='$id_sepeda'");
	$data_sepeda = mysqli_fetch_assoc($query_sepeda);
	$stok = $data_sepeda['stok'];
	$stok_ubah = $stok+$qty;
	mysqli_query($koneksi_uzlah,"UPDATE sepeda set stok='$stok_ubah' where id_sepeda='$id_sepeda'");
	mysqli_query($koneksi_uzlah,"DELETE from keranjang where id_keranjang='$id_keranjang'");
	header("location:detail.php?page=keranjang");
}
?>
<div class="jumbotron">
<table class="table table-bordered">
	<th>Judul sepeda</th><th>Harga</th><th>QTY</th><th>Total Harga</th><th>Aksi</th>
	<?php while($keranjang=mysqli_fetch_assoc($qry)){?>
		<tr>
		<td><?php
		$q = mysqli_query($koneksi_uzlah,"SELECT * from sepeda where id_sepeda='$keranjang[id_sepeda]'");
		$d = mysqli_fetch_assoc($q);
		$nama = $d['nama']; echo $nama;
		$qbyar = mysqli_fetch_assoc(mysqli_query($koneksi_uzlah,"SELECT SUM(total_harga) as total_bayar from keranjang where id_pembeli='$id_pembeli'"));
		$bayar = $qbyar['total_bayar'];
		?></td>
		<td><?php echo $keranjang['harga'] ?></td>
		<td><?php echo $keranjang['qty']?></td>
		<td><?php echo $keranjang['total_harga']?></td>
		<td><a href="keranjang.php?aksi=hapus&id=<?php echo $keranjang['id_keranjang']; ?>"><center><span class="glyphicon glyphicon-remove"></span></a>
		</tr>
<?php } ?>
<tr>
	<td colspan="3"><b>Total Bayar</b></td><td><?php echo @$bayar;  ?></td>
	<td><center><a href="detail.php?aksi=checkout" class="btn btn-info">checkout</a></center></td>
</tr>
</table>
</div>