<?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $Komentar = $_POST['komentar'];

    echo "<style> #form-output{border-collapse: collapse}
        #form-output td{border: 1px solid black; padding: 5px} </style>

    <table id='form-output'>
        <tr>
            <td>Nama Lengkap</td>
            <td>$nama</td>
        </tr>
            <td>Email</td>
            <td>$email</td>
        </tr>
         <tr>
            <td>Komentar</td>
            <td>$Komentar</td>
        </tr>
    </table>";
    
?>