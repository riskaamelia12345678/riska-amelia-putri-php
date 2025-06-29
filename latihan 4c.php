<?php
// Array awal negara ASEAN dan ibu kota
$asean = ["Indonesia:D.K.I.Jakarta","Singapura:Singapura","Malaysia:Kuala lumpur","Brunei:Bandar Seri Begawan","Thailand:Bangkok",
"Laos:vientiane","Filipina:Manila","Myanmar:Naypiyadaw"];

echo "<b>Daftar Negara Asean dan ibu kota :</b><br>";
echo "<ul>";
foreach($asean as $negara){
    echo "<li>$negara</li>";
}
