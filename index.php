<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pemesanan</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form action="invoice.php" method="GET">
    <h2>Form Pemesanan Komputer</h2>

    <label>Nama:</label><br>
    <input type="text" name="nama" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" required></textarea><br>

    <h2>Perangkat Komponen Komputer</h2>

    <label>Processor:</label><br>
    <input type="text" name="processor" required><br>

   <label>RAM:</label><br>
   <input type="text" name="ram" required><br>

   <label>Storage:</label><br>
   <input type="text" name="storage" required><br>

  <label>VGA:</label><br>
  <input type="text" name="vga" required><br>

  <label>PSU:</label><br>
  <input type="text" name="psu" required><br>

    <input type="submit" value="Kirim">
  </form>
</body>
</html>
