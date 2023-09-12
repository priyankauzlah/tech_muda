<?php

if (isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tgl'];
    $bulan = $_POST['bln'];
    $tahun = $_POST['thn'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telp'];
    $jeniskelamin = $_POST['jkl'];
    $agama = $_POST['agama'];
    $hobi = $_POST['hoby'];

    echo "<style> #form-output{border-collapse: collapse}
        #form-output td{border: 1px solid black; padding: 5px} </style>

    <table id='form-output'>
        <tr>
            <td>Nama Lengkap</td>
            <td>$nama</td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>$tempat, $tanggal/$bulan/$tahun</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>$alamat</td>
        </tr>
         <tr>
            <td>No. Telp/HP</td>
            <td>$telpon</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>$jeniskelamin</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>$agama</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>";
            foreach($_POST['hoby'] as $hobi){
                echo "$hobi, ";
            }
            echo"
            </td>
        </tr>
    </table>";
}
?>