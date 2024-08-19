<?php 
include 'function.php';


// Menangkap data dari form
$idbarang = $_POST['idbarang'];
$brand = $_POST['brand'];
$tipe = $_POST['tipe'];
$model = $_POST['model'];
$user = $_POST['user'];
$bulan_pembelian = $_POST['bulan_pembelian'];
$tahun_pembelian = $_POST['tahun_pembelian'];
$data_transfer = $_POST['data_transfer'];
$remark = $_POST['remark'];
$barang_condition = $_POST['barang_condition'];
$name_category = $_POST['name_category']; // Menambahkan penanganan untuk name_category

// Memastikan variabel koneksi digunakan dengan benar
if (isset($koneksi)) {
    // Menginput data ke tabel barang dengan variabel koneksi yang benar
    mysqli_query($koneksi, "INSERT INTO barang (idbarang, brand, tipe, model, user, bulan_pembelian, tahun_pembelian, data_transfer, remark, barang_condition, name_category)
     VALUES ('$idbarang', '$brand', '$tipe', '$model','$user', '$bulan_pembelian', '$tahun_pembelian', '$data_transfer', '$remark', '$barang_condition', '$name_category')") or die(mysqli_error($koneksi));
    
    // Mengalihkan halaman kembali ke tables.php
    header("location:tables.php");
} else {
    echo "Koneksi database tidak berhasil!";
}

//BATAS CATEGORY DAN BARANG DI DATABASE


?>