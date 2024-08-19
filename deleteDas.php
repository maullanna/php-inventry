<?php
// Termasuk file koneksi database
include 'function.php';

// Pastikan ID barang yang akan dihapus tersedia
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan penghapusan data dari database
    $queryDelete = "DELETE FROM barang WHERE idbarang = '$id'";
    $hapus = mysqli_query($koneksi, $queryDelete);

    // Periksa apakah penghapusan berhasil
    if ($hapus) {
        // Arahkan kembali ke halaman utama
        header('Location: index.php');
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Gagal menghapus data.";
    }
} else {
    // Jika tidak ada ID yang diberikan, tampilkan pesan error
    echo "ID tidak tersedia.";
}

if (isset($_GET['add'])) {
    $add = $_GET['add'];

    $queryDelete = "DELETE FROM table_header WHERE dari_idbarang = '$add'";
    $hapus = mysqli_query($koneksi, $queryDelete);

    if ($hapus) {
        header('Location: index.php');
        exit();
    } else {
        echo "Maaf Ada Kesalahan Code";
    }
}

//baru 

// Mengatur header agar mengembalikan data dalam format JSON
header('Content-Type: application/json');

// Mengambil data dari permintaan POST
$input = file_get_contents('php://input');
$data = json_decode($input, true);

$name_category = $data['name_category'] ?? '';
$color = $data['color'] ?? '';

// Validasi data yang diterima
if (empty($name_category) || empty($color)) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

// Menghapus data dari database
$queryDelete = "DELETE FROM category WHERE name_category = ? AND color = ?";
$stmt = $koneksi->prepare($queryDelete);
$stmt->bind_param('ss', $name_category, $color);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Item deleted successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to delete item']);
}

// Menutup statement dan koneksi
$stmt->close();
$koneksi->close();
?>
