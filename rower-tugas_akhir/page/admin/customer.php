<?php
include"../../koneksi_uzlah.php";
$q = mysqli_query($koneksi_uzlah,"SELECT * FROM customer");
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#007DBC;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
<b>CUSTOMER'S DATA</b>
</div>
<table class="table table-bordered">
		<th style=" background: #E6E6FA;"><center>Customer's Name</center></th>
 		<th style=" background: #E6E6FA; "><center>Username</center></th>
 		<th style=" background: #E6E6FA; "><center>Password</center></th>
 		<th style=" background: #E6E6FA; "><center>Action</center></th>
	<?php while($c=mysqli_fetch_assoc($q)){?>
	<tr>
		<td><?php echo $c['nama']; ?></td>
 		<td><?php echo $c['username']; ?></td>
 		<td><?php echo $c['password']; ?></td>
 		<td><center><a href="hapus_cus.php?id=<?php echo $c['id_pembeli']; ?> "><span class="glyphicon glyphicon-trash"></span></a></center></td>
	</tr>
	<?php } ?>
</table>