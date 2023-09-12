<?php 
$booking = $_POST['booking'];
$nama = $_POST['nama'];
$no = $_POST['no'];
$kamar = $_POST['tipe'];

echo "Tanggal Booking : " . $booking;
echo "<br/>";
echo "Nama Customer : " . $nama;
echo "<br/>";
echo "Tipe Kamar : " . ucfirst($tipe);
echo "<br/>";

?>