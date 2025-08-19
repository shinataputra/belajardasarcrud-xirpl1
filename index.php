<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<!-- koneksi database -->
<?php
include 'config.php';
?>

<!-- proses input data -->
<?php
include 'prosesinput.php';
?>

<body>
  <!-- form  -->
  <form action="" method="post">
    <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
    <input type="text" name="kelas" placeholder="Masukkan Kelas Anda" required>
    <input type="submit" value="Kirim Data">
  </form>
</body>

</html>