<head>
    <title>Form Input Biodata</title>
</head>

<body>
    <table border="1" bordercolor="red">
        <tr>
            <td>
                <center>
                    <h2>Form Input Biodata</h2>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <form method="POST" action="hasil.php" name="fm-input">
                    <table>
                        <tr>
                            <td><label for="nama">Nama Lengkap</label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="nama" id="nama" /></td>
                        </tr>
                        <tr>
                            <td><label for="tll">Tempat, Tanggal Lahir</label></td>
                            <td>:</td>
                            <td>
                                <input type="text" size="20" name="tempat" />,
                                <input type="text" size="2" name="tgl" />/
                                <input type="text" size="2" name="bln" />/
                                <input type="text" size="5" name="thn" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="alamat">Alamat</label></td>
                            <td>:</td>
                            <td><textarea name="alamat" id="alamat" cols="40" rows="3"></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="telp">No. Telp/HP</label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="telp" id="telp" /></td>
                        </tr>
                        <tr>
                            <td><label for="jkl">Jenis Kelamin</label></td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jkl" value="Laki-Laki" id="laki" />
                                <label for="laki">LakiLaki</label>
                                <input type="radio" name="jkl" value="Perempuan" id="perempuan" />
                                <label for="perempuan">Perempuan</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="agama">Agama</label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="agama" id="agama" /></td>
                        </tr>
                        <tr>
                            <td><label for="hoby">Hoby</label></td>
                            <td>:</td>
                            <td>
                                <input type="checkbox" name="hoby[]" id="bacabuku" value="Baca Buku" />
                                <label for="bacabuku">Baca Buku</label>
                                <input type="checkbox" name="hoby[]" id="olahraga" value="Olah Raga" />
                                <label for="olahraga">Olah Raga</label>
                                <input type="checkbox" name="hoby[]" id="maingame" value="Main Game" />
                                <label for="maingame">Main Game</label>
                                <input type="checkbox" name="hoby[]" id="hiking" value="hiking" />
                                <label for="hiking">Hiking</label>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Submit" />
                                <input type="reset" name="reset" value="Clear!" />
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>