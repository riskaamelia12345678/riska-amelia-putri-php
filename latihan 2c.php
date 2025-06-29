<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Segitiga Ganjil Genap</title>
    <style>
        .ganjil {
            background-color: #003;
            color: #fff;
            width: 30px;
            height: 30px;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            margin: 2px;
        }
        .genap {
            background-color: #999;
            width: 30px;
            height: 30px;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            margin: 2px;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $kelas = ($i % 2 == 1) ? "ganjil" : "genap";
            echo "<div class='$kelas'>$j</div>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>