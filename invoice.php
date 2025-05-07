<?php
$nama = $_GET['nama'];
$email = $_GET['email'];
$alamat = $_GET['alamat'];
$processor = $_GET['processor'];
$ram = $_GET['ram'];
$storage = $_GET['storage'];
$vga = $_GET['vga'];
$psu = $_GET['psu'];

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Invoice</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1>Invoice - Spasi Komputer</h1>
    <p><strong>Nama:</strong> <?=$nama ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Alamat:</strong> <?= $alamat ?></p>

    <h2>Perangkat Komputer</h2>
    <p><strong>Processor:</strong> <?= $processor ?></p>
    <p><strong>RAM:</strong> <?= $ram?><\/p>
    <p><strong>Storage:</strong> <?= $storage ?></p>
    <p><strong>VGA:</strong> <?= $vga ?></p>
    <p><strong>PSU:</strong> <?= $psu ?></p>

    <a href="form pemesanan.php" class="kembali-btn">← Kembali</a>
  </div>
</body>
</html>
