<?php
include 'function.php'; // Sambungkan ke database

if (isset($_POST['update'])) {
    // Ambil data dari form
    $dari_idbarang = $_POST['dari_idbarang'];
    $nama_penerima = $_POST['nama_penerima'];
    $tanggal = $_POST['tanggal'];
    $pengirim = $_POST['pengirim'];
    $nama_vendor = $_POST['nama_vendor'];
    $master_barang = $_POST['master_barang'];
    $tahun_pembelian = $_POST['tahun_pembelian'];

    // Update query
    $query = "UPDATE table_header SET 
                nama_penerima = '$nama_penerima',
                tanggal = '$tanggal',
                pengirim = '$pengirim',
                nama_vendor = '$nama_vendor',
                master_barang = '$master_barang',
                tahun_pembelian = '$tahun_pembelian'
              WHERE dari_idbarang = '$dari_idbarang'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                window.location.href = 'tables.php';
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>
