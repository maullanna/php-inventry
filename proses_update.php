<?php
include 'function.php';

if(isset($_POST['submit'])) {
    // Mendapatkan data dari formulir
    $id = $_POST['idbarang'];
    $brand = $_POST['brand'];
    $tipe = $_POST['tipe'];
    $model = $_POST['model'];
    $user = $_POST['user'];
    $bulan_pembelian = $_POST['bulan_pembelian'];
    $tahun_pembelian = $_POST['tahun_pembelian'];
    $data_transfer = $_POST['data_transfer'];
    $remark = $_POST['remark'];
    $barang_condition = $_POST['barang_condition'];

    // Query untuk mengupdate data barang
    $query = "UPDATE barang SET brand='$brand', tipe='$tipe', model='$model', user='$user' bulan_pembelian='$bulan_pembelian', tahun_pembelian='$tahun_pembelian', data_transfer='$data_transfer', remark='$remark', barang_condition='$barang_condition' WHERE idbarang='$id'";

    // Jalankan query
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dijalankan
    if ($result) {
        // Redirect kembali ke halaman tabel setelah proses update selesai
        header("location: tables.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}
?>
