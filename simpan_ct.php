<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'function.php';

$name_category = $_POST['name_category'];
$color = $_POST['color'];


// Query untuk memeriksa apakah nama kategori sudah ada di database
$check_query = "SELECT * FROM category WHERE name_category='$name_category'";
$check_result = mysqli_query($koneksi, $check_query);

// Periksa apakah nama kategori sudah ada
if (mysqli_num_rows($check_result) > 0) {
    // Jika nama kategori sudah ada, tampilkan pesan modal
    echo '<script>
    if (confirm("Data ini sudah ada dalam database. Klik OK untuk kembali ke dashboard.")) {
        window.location.href = "index.php"; // Arahkan ke halaman dashboard
    } else {
        window.location.href = "index.php"; // Arahkan ke halaman dashboard
    }
  </script>';
} else {
    // Jika nama kategori belum ada, lanjutkan dengan menyimpan data ke database
    $query = "INSERT INTO category (name_category, color) VALUES ('$name_category', '$color')";
    
    // Jalankan query
    $result = mysqli_query($koneksi, $query);
    
    // Periksa apakah query berhasil dijalankan
    if ($result) {
        // Jika berhasil, alihkan ke halaman iindeex.php
        header("location: index.php");
    } else {
        // Jika gagal, tampilkan pesan kesalahan
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
