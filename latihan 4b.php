<?php
// Array awal negara ASEAN
$asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

echo "<b>Daftar Negara ASEAN awal :</b><br>";
echo "<ul>";
foreach($asean as $negara){
    echo "<li>$negara</li>";
}
echo "</ul>";

// Menambah 3 negara baru
array_push($asean, "Laos", "Filipina", "Myanmar");

echo "<b>Daftar Negara ASEAN baru :</b><br>";
echo "<ul>";
foreach($asean as $negara){
    echo "<li>$negara</li>";
}
echo "</ul>";
?>