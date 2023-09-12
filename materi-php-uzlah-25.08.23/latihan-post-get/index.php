<head>
    <title>Form Input Biodata</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>
                <center>
                    <h2>Form Pemesanan</h2>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <form method="POST" action="hasil.php" name="frmpost">
                    <table>
                    <tr>
                            <td><label for="tanggal">Tanggal Booking</label></td>
                            <td>:</td>
                            <td>
                                <input type="date" id="booking" name="booking"/>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nama">Nama Customer</label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="nama" id="nama" /></td>
                        </tr>
                        <tr>
                            <td><label for="no">No Identitas</label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="no" id="no" /></td>
                        </tr>
                        <tr>
                            <td><label for="tipe">Tipe Kamar</label></td>
                            <td>:</td>
                            <td><select name="tipe">
                                <option name="-">-</option>
                                <option name="deluxe">Deluxe</option>
                                <option name="superior">Superior</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Durasi Menginap</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="durasi"> Malam
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="save" value="Simpan" />
                                <input type="reset" name="cancel" value="Batalkan" />
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>