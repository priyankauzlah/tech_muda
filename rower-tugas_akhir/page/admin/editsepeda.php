<link href="../../css/bootstrap.min.css" rel="stylesheet">
<?php
include"../../conn.php";
$e=$_GET['id'];
$edit=mysqli_query($conn,"SELECT * FROM sepeda WHERE id_sepeda='$e'");
$sepeda = mysqli_fetch_assoc($edit);
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit SEPEDA
</div>
<form action="e_sepeda.php" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id_sepeda" class="form-control" value =" <?php  echo $sepeda['id_sepeda'];?>">
 		<b>Kategori Sepeda :</b><select name="id_kategori" class="form-control">
 			<?php
 			$d = mysqli_query($conn,"SELECT * from kategori");
 			while($data = mysqli_fetch_assoc($d)){ ?>;
 			<option> <?php echo $data['kategori']; ?> </option>
 			<?php } ?>
 		</select><br>
 		<b>Nama Sepeda :</b> <input type="text" name="nama" class="form-control" value =" <?php  echo $sepeda['nama'];?>" ><br>
 		<b>Deskripsi sepeda :</b><input type="text" name="deskripsi" class="form-control" value =" <?php  echo $sepeda['deskripsi'];?>"><br>
 		<b>Gambar Sepeda : </b><input type="file" name="gambar" class="form-control" value =" <?php  echo $sepeda['gambar'];?>" ><br>
 		<b>Harga Sepeda : </b><input type="text" name="harga" class="form-control" value =" <?php  echo $sepeda['harga'];?>" ><br>
 		<b>Stok Sepeda : </b><input type="text" name="stok" class="form-control" value =" <?php  echo $sepeda['stok'];?>" ><br>
 		<td><input type="submit" class="btn btn-success" value="simpan">
</form>