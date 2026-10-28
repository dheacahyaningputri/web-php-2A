<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Novel Labirin Hati yang Dingin",
        "penulis" => "Dhea Cahyaning Putri"
    ],
    [
        "judul" => "Novel Labirin Hati yang Dingin",
        "penulis" => "Dhea Cahyaning Putri"
    ],
    [
        "judul" => "Novel Labirin Hati yang Dingin",
        "penulis" => "Dhea Cahyaning Putri"
    ]
];
 
// menampilkan array
foreach($artikel as $item){
    echo "<h2>Buku ".$item["judul"]."</h2>";
    echo "<p>Penulis ".$item["penulis"]."<p>";
    echo "<br>";
}
 
?>