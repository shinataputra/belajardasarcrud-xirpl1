<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <!-- koneksi database -->
   <?php
   include "config.php"
   ?>


   <!-- menampilkan data -->
   <?php
   $sql = "SELECT * FROM tbsiswa";
   $result = mysqli_query($conn, $sql);

   // cek apakah ada data
   if (mysqli_num_rows($result) > 0) {
      // jika ada data
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<p>Nama: " . $row["nama"] . "</p>";
         echo "<p>Kelas: " . $row["kelas"] . "</p>";
      }
   } else {
      // jika tidak ada data
      echo "<p>Tidak ada data</p>";
   }
   // tutup koneksi
   mysqli_close($conn);


   ?>
</body>

</html>