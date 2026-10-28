<?php
// membuat array asosiatif
$artikel = [
    "judul" => "Novel Labirin Hati yang Dingin",
    "penulis" => "Dhea Cahyaning Putri",
    "jumlah_halaman" => 200
];
 
// mencetak isi array assosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>Penulis: ".$artikel["penulis"]."</p>";
echo "<p>Jumlah Halaman: ".$artikel["jumlah_halaman"]."</p>";
?>