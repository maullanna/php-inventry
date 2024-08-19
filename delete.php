<?php
// Termasuk file koneksi database
include 'function.php';

// Pastikan ID barang yang akan dihapus tersedia
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan penghapusan data dari database
    $queryDelete = "DELETE FROM barang WHERE idbarang = '$id'";
    $hapus = mysqli_query($koneksi, $queryDelete);

    // Periksa apakah penghapusan berhasil
    if($hapus) {
       
     

        // Arahkan kembali ke halaman utama
        header('Location: tables.php');
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

    $queryDelete ="DELETE FROM table_header WHERE dari_idbarang = '$add'";
    $hapus = mysqli_query($koneksi, $queryDelete);

    if($hapus) {
        header('Location: tables.php');
        exit();

    }else {
        echo "Maaf Ada Kesalahan Code";
    }
}


// baru 
if (isset($_GET['name_category']) && isset($_GET['color'])) {
    $name_category = $_GET['name_category'];
    $color = $_GET['color'];

    // Query untuk menghapus data dari database
    $queryDelete = "DELETE FROM category WHERE name_category = ? AND color = ?";
    $stmt = $koneksi->prepare($queryDelete);
    $stmt->bind_param('ss', $name_category, $color);

    if ($stmt->execute()) {
        echo "Item deleted successfully";
        header('Location: index.php'); // Arahkan kembali ke halaman index.php setelah penghapusan
        exit();
    } else {
        echo "Failed to delete item.";
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$koneksi->close();

?>
