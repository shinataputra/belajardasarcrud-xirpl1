<!-- koneksi database -->
<?php
include 'config.php';
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
        // redirect ke halaman index.php
        header("Location: index.php");
        exit();
    } else {
        echo "Data gagal disimpan: " . mysqli_error($conn, $sql);
    }
}
?>