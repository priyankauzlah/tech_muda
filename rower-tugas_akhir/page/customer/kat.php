<?php
include"../../koneksi_uzlah.php";
$kat = mysqli_query($koneksi_uzlah,"SELECT * from kategori");
while($get_data=mysqli_fetch_assoc($kat)){

	?><li style="background:#007DBC;color:#fff;"><a href="index.php?page=detail&id=<?=$get_data['id_ketegori']?>" style="background:#007DBC;color:#fff;">
		<?php echo $get_data['kategori']?>
	</a></li>
	<?php
	}
?>
