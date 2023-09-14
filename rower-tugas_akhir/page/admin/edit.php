<?php
include"../../koneksi_uzlah.php";
$a=$_GET['id'];
$kat=mysqli_query($koneksi_uzlah,"SELECT * FROM kategori WHERE id_ketegori='$a'");
$bo = mysqli_fetch_assoc($kat);
?>
<form action="e.php" method="post">
		<div class="col-md-8" style="margin-bottom:20px;">
 		<b>Category Name</b>
 		<input type="hidden" name="id_ketegori" value =" <?php  echo $bo['id_ketegori'];?> ">
 		<input type="text" name="kategori" value ="<?php  echo $bo['kategori'];?>" style="width:600px;" class="form-control">
 		</div>
 		<div class="col-md-1" style="margin-top:20px">
	<input type="submit" name="simpan" value="Save" class="btn btn-primary">
	</div>
</form>