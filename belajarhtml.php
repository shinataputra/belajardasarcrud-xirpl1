<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<!-- menyimpan inputan -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];

  echo "Nama: " . $nama . "<br>";
  echo "Kelas: " . $kelas;
}
?>

<body>


  <!-- form  -->
  <form action="" method="post">
    <input type="text" name="nama" placeholder="Masukkan Nama Anda">
    <input type="text" name="kelas" placeholder="Masukkan Kelas Anda">
    <input type="submit" value="Kirim Data">
  </form>



</body>

</html>