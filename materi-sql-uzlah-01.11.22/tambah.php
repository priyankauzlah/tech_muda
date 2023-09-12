<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi </title>
</head>
<body>
<h2>CRUD DATA KARYAWAN</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA KARYAWAN</h3>
<form method="post" action="tambah_aksi.php">
<table>
<tr>
<td><label>Nama<label></td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td><label>Alamat<label></td>
<td><input type="text" name="alamat"></td>
</tr>
<tr>
<td>Pekerjaan</td>
<td><input type="text" name="pekerjaan"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
</body>
</html>