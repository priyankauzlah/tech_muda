<?php
if (isset($_POST["hasil"])){
    $Nama=$_POST["nama"];
    $Alamat =$_POST["alamat"];
    $File =$_FILES["file"]["name"];
    $tmp_name=$_FILES["file"]["tmp_name"];
    move_uploaded_file($tmp_name,"images/".$File);
?>
<table border="1">
    <tr>
        <th>NAMA </th>
        <th>ALAMAT </th>
        <th>FOTO </th>
    </tr>
    <tr>
        <td> <?php echo $Nama; ?> </td>
        <td> <?php echo $Alamat; ?> </td>
        <td> <img src="images/<?php echo $File; ?>"> </td>
</tr>

<?php } ?>
</table>