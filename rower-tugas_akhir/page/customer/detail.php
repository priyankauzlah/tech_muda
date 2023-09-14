<?php
include"../../koneksi_uzlah.php";
@$kd = $_GET['id'];
$qry = mysqli_query($koneksi_uzlah,"SELECT * from sepeda where id_sepeda='$kd'");
$data = mysqli_fetch_assoc($qry);
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

    <title>Detail - Rower.com</title>
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
<li><a href="index.php?pesan=sudah konfirmasi" style="background:#007DBC;"><span class="glyphicon glyphicon-check" style="background:#007DBC;color:#fff;"> CONFIRM | </span></a></li><?php
          }else{
          ?>
          <li><a href="cara_pesan.php?page=konfirmasi" style="background:#007DBC;"><span class="glyphicon glyphicon-check" style="background:#007DBC;color:#fff;"> CONFIRM | </span></a></li>
 <?php }} ?>


  <li  style="background:#007DBC;"><a href="#"><span class="glyphicon glyphicon-user" style="background:#007DBC;color:#fff;"> <?php echo $nama; ?></span></a>
       <ul>
         <li  style="background:#007DBC;"><a href="../admin/outpage.php"><span class="glyphicon glyphicon-log-out"> EXIT</span></a></li>
       </ul>
 </li>
          <div class="clear"></div>
          </div>
      </div>
    </nav>
     <?php
@$aksi = $_GET['aksi'];
$tanggal = date("d-m-Y");
if($aksi=="checkout")
{?>
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
  <div style="margin-top: 30px; width:100%,height:50px;text-align:center;background:#007DBC;color:#fff;line-height:60px;font-size:20px;">
<b>CHECKOUT</b>
</div><br>
<form action="proses_chekout.php" method="post">
<label>Recipient Name</label>
<input type="text" name="nama" placeholder="Enter your name" class="form-control">
<label>Address</label>
<input type="text" name="alamat" placeholder="Enter your full address" class="form-control"><br>
<label>Phone Number</label>
<input type="text" name="nomor_tlp" placeholder="Enter your phone number" class="form-control"><br>
<label>Date</label>
<input type="text" name="tanggal"  class="form-control" value="<?php echo $tanggal; ?>" readonly>
<input type="submit" class="btn btn-primary" value="DONE">
</form> 
 <?php }else{
    @$page = $_GET['page'];
    if($page=="keranjang"){
      include("keranjang.php");
    }
    else if($page==""){
    ?>
    <div class="jumbotron">
      <div class="row">
      <div class="col-md-3" style="margin-left: 200px;">
     <img src="../../gambar/<?php echo $data['gambar']; ?>" style="width:450px; height:350px;">   
    </div>
      <div class="col-md-6" style="margin-left:160px ; margin-top:10px;">
        <table>
          <tr>
            <h3><td><b>Name</b></td>   <td>: <?php echo $data['nama']; ?></td></h3>
          </tr>

          <tr>
            <h3><td><b>Description</b></td>    <td>: <?php echo $data['deskripsi']; ?></td></h3>
          </tr>

          <tr>
            <h3><td><b>Price</b></td>   <td>: <?php echo $data['harga']; ?></td></h3>
          </tr>

          <tr>
            <h3><td><b>Stock</b></td>    <td>: <?php echo $data['stok']; ?></td></h3>
          </tr>
        </table><br><br>
        <form action="tambah_keranjang.php" method="post">

              <input type="number" name='qty' value="0" min="0" max="<?php echo $data['stok']; ?>">
              <input type="hidden" name='harga' value="<?php echo $data['harga'];?>">
              <input type="hidden" name='id_sepeda' value="<?php echo $data['id_sepeda'];?>">
              <?php if($data['stok']==0){ ?>
                 <a href="#" class="btn btn-danger">UNAVAILABLE</a>
                <?php }
                else{?>
         <button type="submit" class="btn btn-success">BUY</button>
         <?php } ?>
         </form>
        </div>
    </div>
    </div>
<?php } ?>
    <div style="margin-top: -30px; width:100%,height:50px;text-align:center;background:#007DBC;color:#fff;line-height:60px;font-size:20px;">
<b>EXPLORE MORE</b>
</div>
<div class="container">
     <div class="row">
      <?php
      $qrysepeda= mysqli_query($koneksi_uzlah,"SELECT * from sepeda");
      while($sepeda = mysqli_fetch_assoc($qrysepeda)) {
      ?>

      <div class="col-md-3" style="margin-top:20px;">
        <div class="sepeda">
        <center><img src="../../gambar/<?php echo $sepeda['gambar'] ?>" style="margin-top:20px; width:200px;height:190px;"></center>
         <h3 style="text-align:center; color:#007DBC;"><?php echo $sepeda['nama'] ?></h3>
          <center><b></b>Rp.<?php echo $sepeda['harga']; ?></center> 
          <center><b>Stock Available :</b> <?php echo $sepeda['stok']; ?> </center>
          <center><a class="btn btn-primary" href="detail.php?id=<?php echo $sepeda['id_sepeda'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
         </div>
        </div>

        <?php } }?>
      </div>

      <hr>

      
    </div> 

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
          <li style="color:#FFFFFF"><h3><b>CONTACT</b></h3></li>
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
