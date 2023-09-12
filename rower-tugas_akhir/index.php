<?php
include"config.php";
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

    <nav class="navbar navbar-default navbar-fixed-top" style="background:#d74b35;">
      <div class="container-fluid">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#"><img src="images/logo.png" style="width:150px; margin-top: -7px;"></a>
        </div>
        <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="color:#fff;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
          <li><a href="" style="color:#fff;" ><span class="glyphicon glyphicon-list"> Kategori | </span></a>
<ul>
<li><?php include("kat.php");?></li>

</ul>
</li>
          <li class="a"><a href="cara_pesan.php" style="color:#fff;"><span class="glyphicon glyphicon-question-sign"> CaraBelanja | </span></a></li
          <li class="a"><a href="login.php" style="color:#fff;"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <div class="jumbotron">
      <div class="row">
      <div class="col-md-4" style="margin:30px;">
     <img src="img/buku31.jpg" width="400">   
    </div>
      <div class="col-md-6" style="margin-left:70px; margin-top: 80px;">
        <h2><b>Selamat datang di toko murah kami.<h1 style="color:#007DBC;"><b>ROWER</b></h1></h2>
        <p>di sini anda bisa membeli dan memesan barang-barang dengan mudah, anda tinggal klik, maka barang yang anda beli sampai di tempat rumah anda, tidak perlu lagi jauh-jauh ke toko kami.</p>
      </div>
    </div>
    </div>
<div style="margin-top: -30px; width:100%,height:50px;text-align:center;background:#d74b35;color:#fff;line-height:60px;font-size:20px;">
<b>Pilihan Produk kami sbb:</b>
</div>
    <div class="container">
      <div class="row">
      <?php
      include"conn.php";
      @$idkat = $_GET['id'] ;
      $qrybukukat = mysqli_query($conn,"SELECT * from sepeda where id_ketegori='$idkat'");
      $qrysepeda= mysqli_query($conn,"SELECT * from sepeda");
      if($idkat==0){
      while($sepeda = mysqli_fetch_assoc($qrysepeda)) {
      ?>
      
        <div class="col-md-3" style="margin-top:20px;">
        <div class="sepeda">
        <center><img src="gambar/<?php echo $sepeda['gambar'] ?>" style="margin-top:20px; width:210px;height:190px;"></center>
         <h3 style="text-align:center; color:#f97b61;"><?php echo $sepeda['nama'] ?></h3>
          <center><b>Harga</b> Rp.<?php echo $sepeda['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $sepeda['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail.php?id=<?php echo $sepeda['id_sepeda'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
        <?php } }
        else{ while($sepeda1 = mysqli_fetch_assoc($qrysepedakat)){?>
            <div class="col-md-3" style="margin-top:20px;">
        <div class="sepeda">
        <center><img src="gambar/<?php echo $sepeda1['gambar'] ?>" style="margin-top:20px;width:210px;height:190px;"></center>
        <h3 style="text-align:center; color:#f97b61; "><?php echo $sepeda1['nama'] ?></h3>
          <center><b>Harga</b> Rp.<?php echo $sepeda1['harga']; ?></center> 
          <center><b>Stok</b> (<?php echo $sepeda1['stok']; ?>)</center>
          <center><a class="btn btn-danger" href="detail.php?id=<?php echo $sepeda1['id_sepeda'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>
          <?php }} ?>
      </div>

      <hr>

      
    </div> 
     
    <div class="footer" style="width:100%;height:270px;color:#fff;background:#d74b35;">
      <div class="row" style="background:#7e7c78;">
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#f97b61"><h3><b>Tentang Rower:</b></h3></li>
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
          <li style="color:#f97b61"><h3><b>Alamat Kami:</b></h3></li>
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
          <li style="color:#f97b61"><h3><b>Contact Us</b></h3></li>
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
