<!DOCTYPE html>
<html>
<head>
    <title>Penemu Terkenal di Dunia</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        img {
            width: 100px;
        }
    </style>
</head>
<body>

<h2>Penemu Terkenal di Dunia</h2>

<?php
$penemu = [
    [
        "nama" => "Thomas Edison",
        "penemuan" => "Bola lampu",
        "asal" => "Amerika Serikat",
        "tahun" => 1879,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/9/9d/Thomas_Edison2.jpg"
    ],
    [
        "nama" => "Alexander Graham Bell",
        "penemuan" => "Telepon",
        "asal" => "Skotlandia",
        "tahun" => 1876,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/e/e4/Alexander_Graham_Bell.jpg"
    ],
    [
        "nama" => "Nikola Tesla",
        "penemuan" => "Arus bolak-balik",
        "asal" => "Serbia",
        "tahun" => 1888,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/d/d4/N.Tesla.JPG"
    ],
    [
        "nama" => "James Watt",
        "penemuan" => "Mesin uap modern",
        "asal" => "Skotlandia",
        "tahun" => 1765,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/5/5e/James_Watt_by_Henry_Howard.jpg"
    ],
    [
        "nama" => "Galileo Galilei",
        "penemuan" => "Teleskop astronomi",
        "asal" => "Italia",
        "tahun" => 1609,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/3/3f/Galileo.arp.300pix.jpg"
    ],
    [
        "nama" => "Guglielmo Marconi",
        "penemuan" => "Radio",
        "asal" => "Italia",
        "tahun" => 1895,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/e/e4/Guglielmo_Marconi.jpg"
    ],
    [
        "nama" => "Wright bersaudara",
        "penemuan" => "Pesawat terbang",
        "asal" => "Amerika Serikat",
        "tahun" => 1903,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/6/65/Wrightflyer.jpg"
    ],
    [
        "nama" => "Tim Berners-Lee",
        "penemuan" => "World Wide Web",
        "asal" => "Inggris",
        "tahun" => 1989,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/b/bf/Tim_Berners-Lee_May_2012.jpg"
    ],
    [
        "nama" => "Marie Curie",
        "penemuan" => "Radioaktivitas",
        "asal" => "Polandia",
        "tahun" => 1898,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/6/69/Marie_Curie_c1920.jpg"
    ],
    [
        "nama" => "Johannes Gutenberg",
        "penemuan" => "Mesin cetak",
        "asal" => "Jerman",
        "tahun" => 1440,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/d/d3/Gutenberg.jpg"
    ]
];

echo "<table>
        <tr>
            <th>Nama</th>
            <th>Penemuan</th>
            <th>Asal</th>
            <th>Tahun</th>
            <th>Gambar</th>
        </tr>";

foreach ($penemu as $p) {
    echo "<tr>
            <td>{$p['nama']}</td>
            <td>{$p['penemuan']}</td>
            <td>{$p['asal']}</td>
            <td>{$p['tahun']}</td>
            <td><img src='{$p['gambar']}' alt='{$p['nama']}'></td>
        </tr>";
}

echo "</table>";
?>

</body>
</html>