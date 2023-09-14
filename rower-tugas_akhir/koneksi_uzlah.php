<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$db_name = 'rower';
$koneksi_uzlah = mysqli_connect($host,$username,$password,$db_name);
if(!$koneksi_uzlah){
	die("Connection Failed = ".mysqli_connect_error());
}
?>