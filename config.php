<!-- koneksi database -->
<?php
$conn = mysqli_connect("localhost", "root", "root", "dbsiswa");
// cek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>