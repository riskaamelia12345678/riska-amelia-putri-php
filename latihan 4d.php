<?php
// Membuat array multidimensi: [ [nama kota, makanan khas, harga], ... ]
$kotaMakanan = array(
    array("Jakarta", "Soto Betawi", 25000),
    array("Bandung", "Batagor", 15000),
    array("Surabaya", "Rujak Cingur", 20000),
    array("Yogyakarta", "Gudeg", 18000),
    array("Medan", "Bika Ambon", 22000)
);

// Menampilkan isi array dalam bentuk tabel HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>No</th><th>Nama Kota</th><th>Makanan Khas</th><th>Harga (Rp)</th></tr>";

$no = 1;
foreach ($kotaMakanan as $item) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . $item[0] . "</td>";
    echo "<td>" . $item[1] . "</td>";
    echo "<td>" . number_format($item[2], 0, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</table>";
?>