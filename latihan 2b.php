<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Segitiga Angka</title>
    <style>
        .kotak {
            border: 1px solid black;
            padding: 10px;
            float: left;
            width: 30px;
            height: 30px;
            text-align: center;
            margin: 2px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
$jumlah_baris = 5;

for ($i = 1; $i <= $jumlah_baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak'>$j</div>";
    }
    echo "<div class='clear'></div>";
}
?>

</body>
</html>