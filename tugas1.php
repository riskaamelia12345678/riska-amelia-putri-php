<?php

// Fungsi untuk memeriksa apakah bilangan adalah prima
function isPrima($angka) {
    if ($angka <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return false;
        }
    }
    return true;
}

// Perulangan dari 1 sampai 20
for ($i = 1; $i <= 20; $i++) {
    // Menentukan genap atau ganjil
    if ($i % 2 == 0) {
        $tipe = "genap";
    } else {
        $tipe = "ganjil";
    }

    // Cek apakah bilangan prima
    if (isPrima($i)) {
        $tipe .= " dan prima";
    }

    // Cetak hasil
    echo "Angka $i adalah bilangan $tipe.<br>";
}

?>