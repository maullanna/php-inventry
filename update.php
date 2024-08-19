<?php
// Koneksi ke database
include 'function.php'; // Sesuaikan dengan file koneksi database Anda

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil dan sanitasi data dari form modal
    $idbarang = mysqli_real_escape_string($koneksi, $_POST['idBarang']);
    $brand = mysqli_real_escape_string($koneksi, $_POST['brand']);
    $tipe = mysqli_real_escape_string($koneksi, $_POST['type']);
    $model = mysqli_real_escape_string($koneksi, $_POST['model']);
    $user = mysqli_real_escape_string($koneksi, $_POST['user']);
    $bulan_pembelian = mysqli_real_escape_string($koneksi, $_POST['bulanPembelian']);
    $tahun_pembelian = mysqli_real_escape_string($koneksi, $_POST['tahunPembelian']);
    $data_transfer = mysqli_real_escape_string($koneksi, $_POST['dataTransfer']);
    $remark = mysqli_real_escape_string($koneksi, $_POST['remark']);
    $barang_condition = mysqli_real_escape_string($koneksi, $_POST['condition']);

    // Query untuk update data
    $query = "UPDATE barang SET 
                brand = '$brand', 
                tipe = '$tipe', 
                model = '$model', 
                user = '$user', 
                bulan_pembelian = '$bulan_pembelian', 
                tahun_pembelian = '$tahun_pembelian', 
                data_transfer = '$data_transfer', 
                remark = '$remark', 
                barang_condition = '$barang_condition'
              WHERE idbarang = '$idbarang'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect ke halaman utama dengan pesan sukses
        header("Location: tables.php?status=success");
        exit;
    } else {
        // Jika gagal, redirect ke halaman utama dengan pesan error
        header("Location: tables.php?status=error&message=" . mysqli_error($koneksi));
        exit;
    }
} else {
    // Jika akses langsung ke halaman ini tanpa submit form, redirect ke halaman utama
    header("Location: tables.php");
    exit;
}
?>
