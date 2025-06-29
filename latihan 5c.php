<?php
// Contoh array data mahasiswa (biasanya diambil dari latihan5b.php)
$mahasiswa = [
    "nama" => "Riska Amelia Putri",
    "email" => "rskaamelia4@gmail.com",
    "jurusan" => "Sistem Informasi, Universitas Islam Negeri Sulthan Thaha Saifuddin Jambi "
];

// Tampilkan data
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil Mahasiswa</title>
    
    <style>
        .profile-box {
            width: 400px;
            margin: 50px auto;
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #eee;
            margin: 0 auto 20px auto;
        }
    </style>
</head>
<body>
    <div class="profile-box">
        <h2>Profil Mahasiswa</h2>
        <div class="profile-img"></div>
        <h3><?php echo $mahasiswa['nama']; ?></h3>
        <p><?php echo $mahasiswa['email']; ?></p>
        <p><?php echo $mahasiswa['jurusan']; ?></p>
        <a href="latihan5b.php">Kembali</a>
    </div>
</body>
</html>