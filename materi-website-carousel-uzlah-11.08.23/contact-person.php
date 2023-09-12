<head>
    <title>Kontak Person</title>
</head>

<body>
    <table border="1" bordercolor="black">
        <tr>
            <td>
                <form method="POST" action="hasil-contact-person.php" name="fm-input">
                    <table>
                        <tr>
                            <td><label for="nama">Nama</label></td>
                            <td>:</td>
                            <td><input type="text" size="20" name="nama" id="nama" /></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td>:</td>
                            <td><input name="email" id="email"></input></td>
                        </tr>
                        <tr>
                            <td><label for="komentar">Komentar</label></td>
                            <td>:</td>
                            <td><textarea name="komentar" id="komentar" cols="40" rows="3"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Submit" />
                                <input type="reset" name="hapus" value="Hapus" />
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>