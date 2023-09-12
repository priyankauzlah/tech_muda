<?php
include"conn.php";
$id = $_GET['id'];
$qry = mysqli_query($conn,"SELECT * from sepeda where id_sepeda='$id'");
$data = mysqli_fetch_assoc($qry);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Rower.com</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background:#007DBC;">
      <div class="container-fluid">
        <div class="navbar-header">
          
        <a class="navbar-brand" href="#"><img src="images/logo.png" style="width:150px; margin-top: -7px;"></a>
        </div>
        <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li><a href="index.php" style="color:#fff;"><span class="glyphicon glyphicon-home"> HOME | </span></a></li>
          <li class="a"><a href="" style="color:#fff;"><span class="glyphicon glyphicon-shopping-cart"> CART | </span></a></li>
          <li><a href="" style="color:#fff;" ><span class="glyphicon glyphicon-list"> CATEGORY | </span></a>
<ul>
<li><?php include("kat.php");?></li>

</ul>
</li>
          <li class="a"><a href="cara_pesan.php" style="color:#fff;"><span class="glyphicon glyphicon-question-sign"> SHOPPING STEP | </span></a></li>
          <li class="a"><a href="login.php" style="color:#fff;" "></i>><span class="glyphicon glyphicon-log-in"> LOGIN </span></a></li>
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <div class="jumbotron">
      <div class="row">
      <div class="col-md-3" style="margin:30px;">
     <img src="gambar/<?php echo $data['gambar']; ?>" style="width:250px; height:250px;">   
    </div>
      <div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
        <table>
        	<tr>
        		<h3><td><b>Name</b></td>		<td>: <?php echo $data['nama']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Descripion</b></td>		<td>: <?php echo $data['deskripsi']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Price</b></td>		<td>: <?php echo $data['harga']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Stock</b></td>		<td>: <?php echo $data['stok']; ?></td></h3>
        	</tr>
        </table><br><br>
         <input type="number" name='qty' value="0" min="0" max="<?php echo $data['stok']; ?>">
         <a href="login.php?pesan=a" class="btn btn-success">Beli</a>
        </div>
    </div>
    </div>

    <div style="margin-top: -30px; width:100%,height:50px;text-align:center;background:#d74b35;color:#fff;line-height:60px;font-size:20px;">
<b>Explore More:</b>
</div>
<div class="container">
      <div class="row">
      <?php
      include"conn.php";
      $qrysepeda= mysqli_query($conn,"SELECT * from sepeda");
      while($sepeda = mysqli_fetch_assoc($qrysepeda)) {
      ?>

      <div class="col-md-3" style="margin-top:20px;">
        <div class="sepeda">
        <center><img src="gambar/<?php echo $sepeda['gambar'] ?>" style="margin-top:20px; width:210px;height:190px;"></center>
         <h3 style="text-align:center; color:#f97b61;"><?php echo $sepeda['nama'] ?></h3>
          <center><b>Price</b> Rp.<?php echo $sepeda['harga']; ?></center> 
          <center><b>Stock</b> (<?php echo $sepeda['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail.php?id=<?php echo $sepeda['id_sepeda'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>

        <?php } ?>
      </div>

      <hr>

      
    </div> 
   
    <div class="footer" style="width:100%;height:270px;color:#fff;background:#86BDD9;">
      <div class="row" style="background:#007DBC;">
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#FFFFFF"><h3><b>ABOUT</b></h3></li>
        </ul></center>
          <hr>
        <ul>
          <li><b>Rower</b> adalah tugas akhir dari bootcamp TechMuda II. Tugas akhir ini berkonsep sebuah toko sepeda online berbasis website yang menyediakan berbagai jenis sepeda yang dijual.</li>
        </ul>
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#FFFFFF"><h3><b>OUR ADDRESS</b></h3></li>
        </ul></center>
          <hr>
    
          <ul>
          <li>Bintaro, Tangerang Selatan, Indonesia, Asia Tenggara </li>
          <li></li>
        </ul>
      
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <ul>
          <li style="color:#FFFFFF"><h3><b>CONTACT</b></h3></li>
          <hr>
         <div class="row">
          <div class="col-md-4">
          <a href="https://www.facebook.com/anis.rohmadi"><img src="images/fb.png" style="width:70px;height:75px;  "></a>
          </div>
          <div class="col-md-4">
          <a href="https://www.instagram.com/anisrohmadi/"><img src="images/ig.png" style="width:70px;height:75px;"></a>
          </div>
          <div class="col-md-4">
          <a href="https://www.twitter.com/anis_rohmadi"><img src="images/Twitter.png" style="width:70px;height:75px;"></a>
          </div>
         </div>
        </ul>
        </center>
      </div>
      </div>
      </div>
        <div class="copyright" style="line-height:50px;">
        <center>CopyRights &copy; 2023 | Re-Design by Priyanka Uzlah Priambodo </center>
        </div>
      </div>
  </body>
</html>
