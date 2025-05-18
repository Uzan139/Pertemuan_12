<?php
$nama = isset($_REQUEST['nama']) ? $_REQUEST['nama'] : '';
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
$alamat = isset($_REQUEST['alamat']) ? $_REQUEST['alamat'] : '';
$processor = isset($_REQUEST['processor']) ? $_REQUEST['processor'] : '';
$ram = isset($_REQUEST['ram']) ? $_REQUEST['ram'] : '';
$storage = isset($_REQUEST['storage']) ? $_REQUEST['storage'] : '';
$vga = isset($_REQUEST['vga']) ? $_REQUEST['vga'] : '';
$psu = isset($_REQUEST['psu']) ? $_REQUEST['psu'] : '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'] ?? '';
    $email = $_POST['email'] ?? '';
} else {
    $nama = $_GET['nama'] ?? '';
    $email = $_GET['email'] ?? '';
}
*/
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
    <p><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Alamat:</strong> <?= htmlspecialchars($alamat) ?></p>

    <h2>Perangkat Komputer</h2>
    <p><strong>Processor:</strong> <?= htmlspecialchars($processor) ?></p>
    <p><strong>RAM:</strong> <?= htmlspecialchars($ram) ?></p>
    <p><strong>Storage:</strong> <?= htmlspecialchars($storage) ?></p>
    <p><strong>VGA:</strong> <?= htmlspecialchars($vga) ?></p>
    <p><strong>PSU:</strong> <?= htmlspecialchars($psu) ?></p>

    <a href="form pemesanan.php" class="kembali-btn">← Kembali</a>
  </div>
</body>
</html>
