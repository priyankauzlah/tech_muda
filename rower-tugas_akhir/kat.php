<?php
include"koneksi_uzlah.php";
$kat = mysqli_query($koneksi_uzlah,"SELECT * from kategori");
while($data_kat = mysqli_fetch_assoc($kat)){
?>
<li  style="background:#007DBC;color:#fff;"><a href="index.php?id=<?php echo $data_kat['id_ketegori'] ?>"><?php echo $data_kat['kategori']; ?></a></li>
<?php } ?>