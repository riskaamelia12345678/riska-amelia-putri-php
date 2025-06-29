<?php
$jumlah = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah = isset($_POST['angka']) ? intval($_POST['angka']) : 0;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5d</title>
</head>
<body>
    <form method="post" action="">
        Masukan angka : 
        <input type="number" name="angka" value="<?php echo htmlspecialchars($jumlah); ?>" min="1" required>
        <input type="submit" value="Tampilkan!">
    </form>
    <br>
    <?php
    if ($jumlah) {
        for ($i = $jumlah; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j . " ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>