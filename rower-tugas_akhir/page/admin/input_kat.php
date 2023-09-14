<form method="post" class="form-group">
	<div class="col-md-8" style="margin-bottom:20px;">
	<input type="text" name="kategori" placeholder="New Category" style="width:600px;" class="form-control">
	</div>
	<div class="col-md-1">
	<input type="submit" name="simpan" value="Add" class="btn btn-primary">
	</div>
</form>
<?php
include"../../koneksi_uzlah.php";
@$sim = $_POST['simpan'];
if($sim)
{
	$kat = $_POST['kategori'];
	mysqli_query($koneksi_uzlah,"INSERT into kategori set kategori='$kat'");
	header("location:index.php?page=kategori");
}
?>