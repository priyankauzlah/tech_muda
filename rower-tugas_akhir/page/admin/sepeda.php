<?php
include"../../koneksi_uzlah.php";
$no = 1;
$qry_sepeda = mysqli_query($koneksi_uzlah,"SELECT * from sepeda");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#007DBC;color:#fff;line-height:60px;font-size:20px;">
<b>Product Data</b>
</div>
<a href="index.php?page=input_sepeda" class="btn btn-primary" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> ADD PRODUCT</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("input_sepeda.php");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>Name</center></th>
	<th style=" background: #E6E6FA;"><center>Image</center></th>
	<th style=" background: #E6E6FA;"><center>Description</center></th>
	<th style=" background: #E6E6FA;"><center>Price</center></th>
	<th style=" background: #E6E6FA;"><center>Stock</center></th>
	<th style=" background: #E6E6FA;"><center>Action</center></th>
	<?php while($data = mysqli_fetch_assoc($qry_sepeda)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['nama'] ?></td>
	 <td><center><img src="../../gambar/<?php echo $data['gambar'] ?>" style="width:100px;"></center></td>
	 <td><?php echo $data['deskripsi'] ?></td>
	 <td>Rp.<?php echo number_format($data['harga']); ?>,-</td>
	 <td><?php echo $data['stok'] ?></td>
	 <td><a href="index.php?page=editsepeda&id=<?php echo $data['id_sepeda']; ?>"><center>| <span class="glyphicon glyphicon-pencil"></span></a> | | <a href="hapus_sepeda.php?id=<?php echo $data['id_sepeda']; ?>"><span class="glyphicon glyphicon-trash"></span> |</center></a></td>
	</tr>
	<?php } ?>
</table>
</div>