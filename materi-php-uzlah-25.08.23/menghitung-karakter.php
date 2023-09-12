<?php
$kalimat= "Belajar pemrograman web 2";

// jumlah alphabet
echo strlen($kalimat);
echo "<hr>";

//jumlah kata
echo str_word_count($kalimat);
echo "<hr>";

//mereplace string
echo str_replace("Belajar", "Tutorial", $kalimat);
echo "<hr>";

//mengubah karakter menjadi huruf kecil semua
echo strtolower($kalimat);
echo "<hr>";

//mengubah karakter menjadi huruf kapital semua
echo strtoupper($kalimat);
echo "<hr>";
?>