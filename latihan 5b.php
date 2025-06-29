<?php
$mahasiswa = [
    ['nama' => 'Riska amelia putri', 'nim' => '701240174', 'jurusan' => 'sistem informasi'],
    ['nama' => 'Enjel safitri', 'nim' => '180000', 'jurusan' => 'sistem informasi'],
    ['nama' => 'Putra ahmad dhani', 'nim' => '190000', 'jurusan' => 'teknik informatika'],
];
?>

<h2>Daftar Mahasiswa</h2>
<ul>
<?php foreach ($mahasiswa as $mhs): ?>
    <?php
        // Encode seluruh data mahasiswa menjadi query string
        $query = http_build_query($mhs);
    ?>
    <li>
        <a href="latihangc.php?<?= $query ?>">
            <?= htmlspecialchars($mhs['nama']) ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>