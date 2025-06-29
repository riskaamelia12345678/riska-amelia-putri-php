<!DOCTYPE html>
<html>
<head>
    <title>Latihan5a</title>
</head>
<body>

<?php
if (isset($_GET['angka'])) {
    $angka = intval($_GET['angka']); // Mengambil nilai dari URL dan mengubah ke integer

    // Menampilkan pola angka
    for ($i = $angka; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
} else {
    echo "Silakan masukkan parameter 'angka' di URL. Contoh: Latihan5a.php?angka=10";
}
?>

</body>
</html>