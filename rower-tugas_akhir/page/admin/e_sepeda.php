<?php
include"../../koneksi_uzlah.php";
	$id_sepeda = $_POST['id_sepeda'];
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$kategori= $_POST['id_kategori'];
	$qryid = mysqli_query($koneksi_uzlah,"SELECT * FROM kategori where kategori='$kategori'");
	$data = mysqli_fetch_assoc($qryid);
	$id_kategori = $data['id_kategori'];

@$message		= '';
$valid_file		= true;
$max_size		= 1024000;

mysqli_query($koneksi_uzlah,"UPDATE sepeda set id_ketegori='$id_kategori', nama='$nama', gambar='$nama_file_baru',deskripsi='$deskripsi',harga='$harga', stok='$stok' where id_sepeda='$id_sepeda'");

header("location:index.php?page=sepeda");

if($_FILES['gambar']['name']){
	
	if(!$_FILES['gambar']['error']){

		$new_file_name = strtolower($_FILES['gambar']['tmp_name']); 
		if($_FILES['gambar']['size'] > $max_size)
			$valid_file	= false;
			$message	= 'Maaf, file terlalu besar. Max: 1MB';
		}
	
		$image_path = pathinfo($_FILES['gambar']['name'],PATHINFO_EXTENSION); 
		$extension = strtolower($image_path); 

		if ($image_path == null || $image_path == "") {
			$valid_file = false;
			$message	= "Gambar harus di tambahkan.";
		}

		if($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif" ) {
			$valid_file = false;
			$message	= "Maaf, file yang diijinkan hanya format JPG, JPEG, PNG & GIF. #".$extension;
		}
	
		if($valid_file == true)
		{
		
			$rename_nama_file	= date('YmdHis');
			$nama_file_baru		= $rename_nama_file.'.'.$extension;
			
			mysqli_query($koneksi_uzlah,"UPDATE sepeda set nama='$nama',id_ketegori='$id_kategori',deskripsi='$deskripsi',harga='$harga', gambar='$nama_file_baru', stok='$stok' where id_sepeda='$id_sepeda'");
		
			move_uploaded_file($_FILES['gambar']['tmp_name'], '../../gambar/'.$nama_file_baru);
			header("location:index.php?page=sepeda");
		}
	}
	
	else
	{

		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['gambar']['error'];
	}
?>