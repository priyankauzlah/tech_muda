<!DOCTYPE html>
<html>
<head>

    <title>Simulasi Kredit</title>
</head>
<body>
<h1>
 <center> SIMULASI KREDIT dgn ANUITAS </h1>
 <hr>
 <p align="left">
 <h3>
 <form action="anuitas.php" method="post">
 <table border="0">
            <tbody>
                <tr>
                    <td bgcolor="#eeeee">Besar Pinjaman :</td>
                    <td align="right" bgcolor="#aaeeaa"><input name="besar_pinjaman" size="50"" type="text" placeholder="masukan angka tanpa titik">
                </td>
                </tr>
                <tr>
                    <td bgcolor="#eeeee">Bunga (%) :</td>
                    <td align="right" bgcolor="#aaeeaa"><input  size="10" type="text" name="bunga" size="50" placeholder="penulisan desimal gunakan tanda titik(.) "></td>
                </tr>
                <tr>
                    <td bgcolor="#eeeee">Lama Pinjaman (bulan) :</td>
                    <td align="right" bgcolor="#aaeeaa"><input name="rate" size="10" type="text"/></td>
                </tr>
            </tbody>
        </table>

    <label>Besar Pinjaman</label> : <input type="text" name="besar_pinjaman" size="50" placeholder="masukan angka tanpa titik">
	<br>
    <label>Bunga (%)</label> : <input type="text" name="bunga" size="50" placeholder="penulisan desimal gunakan tanda titik(.) ">
	<br>
    <label>Lama Pinjaman (bulan)</label> : <input type="text" name="jangka" size="50" placeholder="masukan jangka waktu peminjaman">
	<br>
    <button type="submit">Simulasikan</button>
</form>
 
 
</body>
</html>
