<?php
include"../../koneksi_uzlah.php";
$qry_kategori = mysqli_query($koneksi_uzlah,"SELECT * from kategori");

	?>
	<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#007DBC;color:#fff;line-height:60px;font-size:20px;">
Adding Product
</div>
<form method="post" class="form-group" action="tambah_sepeda.php" enctype="multipart/form-data" style="margin-top:20px;">
	<select name="kat" class="form-control">
	<?php 
	while($kategori=mysqli_fetch_assoc($qry_kategori)){
	?>
			<option><?php echo $kategori['kategori']; ?></option>
			<?php } ?>
	</select><br>
	<input type="text" name="nama" placeholder="Product Name" class="form-control"><br>
	<input type="file" name="gambar" placeholder="Product Image" class="form-control"><br>
	<input type="text" name="deskripsi" placeholder="Product Description" class="form-control"><br>
	<input type="text" name="harga" placeholder="Product Price" class="form-control"><br>
	<input type="text" name="stok" placeholder="Product Stock" class="form-control"><br>
	<input type="submit" name="simpan" value="ADD" class="btn btn-primary"><br>
	</form>