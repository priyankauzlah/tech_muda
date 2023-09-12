<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Keredit Sederhana dengan PHP</title>
    <style type="text/css">

    </style>
</head>

<?php
$harga=$_GET['harga'];
$uang_muka=$harga*0.2;
?>

<body>
    <center>
        <h2>FORM SIMULASI Keredit</h2> <br/>
    <form id="form1" name="form1" method="post" action="simulasi_hasil.php">
        <table width="580" border="0" cellspacing="2" cellpadding="2">
            <tr>
                <td>Harga Kendaraan</td>
                <td><input name="harga" type="text" id="harga" value="<?php echo $harga; ?>" size="50"/></td>
            </tr>
            <tr>
                <td>DP Murni</td>
                <td><input name="uang_muka" type="text" id="uang_muka" value="<?php echo $uang_muka; ?>" size="50"/></td>
            </tr>
            <tr>
                <td>Lama Kredit</td>
                <td>
                    <select name="tahun" id="tahun">
                        <option value="0">-- Pilih Tahun --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Kalkulasi"/></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>