<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<!-- koneksi database -->
<?php
$conn = mysqli_connect("localhost", "root", "", "dbsiswa");
// cek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>



<!-- menyimpan inputan -->
<?php
// get data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];

  // insert data ke database
  $sql = "INSERT INTO tbsiswa (nama, kelas) VALUES ('$nama', '$kelas')";
  $result = mysqli_query($conn, $sql);

  // cek apakah data berhasil disimpan
  if ($result) {
    echo "Data berhasil disimpan";
  } else {
    echo "Data gagal disimpan: " . mysqli_error($conn, $sql);
  }
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