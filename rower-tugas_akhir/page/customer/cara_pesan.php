<?php
include"../../config.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../../login.php");
}
$nama = $_SESSION['nama'];
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

    <title>Shopping Step - Rower.com</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background:#007DBC;">
      <div class="container-fluid">
        <div class="navbar-header">
          
        <a class="navbar-brand" href="#"><img src="../../images/logo.png" style="width:150px; margin-top: -7px;"></a>
        </div>
        <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="background:#007DBC;color:#fff;"><span class="glyphicon glyphicon-home"> HOME | </span></a></li>
          <li class="a"><a href="keranjang.php" style="background:#007DBC;color:#fff;"><span class="glyphicon glyphicon-shopping-cart" style="background:#007DBC;"> CART [<?php
          include"../../koneksi_uzlah.php";
          $qcek=mysqli_query($koneksi_uzlah,"SELECT * from keranjang where id_pembeli='$_SESSION[id_pembeli]'");
          $cek=mysqli_num_rows($qcek); 
          $q_cekout= mysqli_query($koneksi_uzlah,"SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]'");
          $cekout = mysqli_num_rows($q_cekout);
          if($cekout>=1)
          {
          echo "0";
          }
          else{
          echo $cek;
          }  ?>] | </span></a></li>
          <li><a href="" style="background:#007DBC;color:#fff;" ><span class="glyphicon glyphicon-list" style="background:#007DBC;"> CATEGORY | </span></a>
<ul>
<li><?php include("../../kat.php");?></li>

</ul>
</li>
         <li class="a"><a href="cara_pesan.php" style="background:#007DBC;color:#fff;"><span class="glyphicon glyphicon-question-sign" style="background:#007DBC;"> SHOPPING STEP | </span></a></li>

         <?php
         include"../../koneksi_uzlah.php";
         $q_cek_cekout = mysqli_query($koneksi_uzlah,"SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]'");
          $cek_cekout = mysqli_num_rows($q_cek_cekout);
          if($cek_cekout>=1){
          $queri_cek = mysqli_query($koneksi_uzlah,"SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]' && status_terima='sudah diterima'");
          $cek = mysqli_num_rows($queri_cek);
          if($cek>=1)
          {?>
          <li style="background:#007DBC;color:#fff;"><a href="index.php?pesan=sudah konfirmasi"><span class="glyphicon glyphicon-check"> CONFIRM | </span></a></li><?php
          }else{
          ?>
          <li style="background:#007DBC;color:#fff;"><a href="cara_pesan.php?page=konfirmasi"><span class="glyphicon glyphicon-check"> CONFIRM | </span></a></li>
          <?php }} ?>

         
           <li style="background:#007DBC;color:#fff;"><a href="#"><span class="glyphicon glyphicon-user"> <?php echo $nama; ?></span></a>
                <ul>
                  <li style="background:#007DBC;color:#fff;"><a href="../admin/outpage.php"><span class="glyphicon glyphicon-log-out"> EXIT</span></a></li>
                </ul>
          </li>
          
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <?php
    @$page= $_GET['page'];
    if($page=="pembelian_selesai")
    {
      include("pembelian_selesai.php");
    }
    else if($page=="konfirmasi")
    {
      include("konfirmasi.php");
    }
    else{
    ?>
     <div class="jumbotron">
      <div class="row">
      <div class="col-md-4" style="margin-left:185px;">
     <img src="../../gambar/DomaneSLR7.png" width="600">   
    </div>
    <div class="col-md-6" style="margin-left:100px; margin-top:160px;">
        <h2><b>WELCOME TO<h1 style="color:#007DBC;"><b>ROWER</b></h1></h2>
        <p><i>Ride the Future: The Ultimate Bicycle Experience</i></p>
      </div>
    </div>
    </div>
    <div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#007DBC;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
    WAYS TO ORDER
</div>
    <div class="row" style="margin:20px;">
		  <p><h3><b>1. Payment must be made within 24 hours after placing the order.<br>
          2. Payment can be made through a bank transfer to our account. Please use Payment Confirmation.<br>
          3. After making the payment, please send the payment confirmation to:<br>
          <br>
          <p style="color:#007DBC;">BCA Bank, Account No: 6500303030, Account Name: PRIYANKA UZLAH.</p><br>
          4. Your ordered book will be delivered within a maximum of 7 days.<br>
          5. We ship products using a postal delivery service.<br><br></b></p>
    <p style="color:#86BDD9;">* The price of the product does not include shipping costs, and the shipping cost will be adjusted based on the delivery destination.</p></h3>
      <hr>
      <?php } ?>  
      
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
          <li><b>Rower</b>is the culmination of TechMuda II bootcamp, presenting a concept of an online bicycle store with a website-based platform offering a wide range of bicycles for sale.</li>
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
          <li style="color:#ffffff"><h3><b>CONTACT</b></h3></li>
          <hr>
         <div class="row">
          <div class="col-md-4">
          <a href="https://github.com/priyankauzlah"><img src="../../images/github.png" style="width:70px;height:70px;"></a>
          </div>
          <div class="col-md-4">
          <a href="https://www.linkedin.com/in/priyankauzlah/"><img src="../../images/linkedin.png" style="width:70px;height:70px;"></a>
          </div>
          <div class="col-md-4">
          <a href="https://instagram.com/prynkauzlah"><img src="../../images/instagram.png" style="width:70px;height:70px;"></a>
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

