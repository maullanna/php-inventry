<?php
include 'function.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dari_idbarang = $_POST['dari_idbarang'];
    $nama_penerima = $_POST['nama_penerima'];
    $tanggal = $_POST['tanggal'];
    $pengirim = $_POST['pengirim'];
    $nama_vendor = $_POST['nama_vendor'];
    $master_barang = $_POST['master_barang'];
    $tahun_pembelian = $_POST['tahun_pembelian'];

    // Insert data into database
    $query = "INSERT INTO table_header (dari_idbarang, nama_penerima, tanggal, pengirim, nama_vendor, master_barang, tahun_pembelian) VALUES ('$dari_idbarang', '$nama_penerima', '$tanggal', '$pengirim', '$nama_vendor', '$master_barang', '$tahun_pembelian')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
       header('location:tables.php');
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}
?>
