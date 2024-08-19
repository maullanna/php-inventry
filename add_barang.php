<?php 
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&family=PT+Serif&family=Playfair+Display:wght@400;500&family=Young+Serif&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/barang.css">
    <link rel="shortcut icon" href="img/sc-inventry.png" type="image/x-icon">
    <style>

input {
  width: 15rem;
  height: 1.5rem;
  border-radius: 5px;
  border: 1px solid black;
  font-size: large;
  box-shadow: 0 10px 10px rgba(110, 110, 110, 0.671);
}
    </style>
</head>
<body>
    <!-- Header start -->
    <header>
        <div class="logo">
            <img src="img/sc-inventry.png" alt="logo">
            <h1>INVENTRY</h1>
        </div>
        <div class="user">
            <img src="img/user-img.png" alt="user-img">
            <p id="username"></p>
        </div>
    </header>

    <!-- Header End -->
    <!-- Sidebar start -->
    <aside>
        <ul class="menu-sidebar">
        <li class="list-menu active" onclick="location.href='tables.php';">
    <img src="img/dasboard-icon.png" alt="icon">
     <span style="margin-top:10px; margin-left:10px;">Dashboard</span>
</li>
            <div class="line"></div>
            <li class="list-menu">
                <img src="img/minipc-icon.png" alt="icon">
                <a href="minipc.html">Barang Masuk</a>
            </li>
            <div class="line"></div>
            <li class="list-menu">
                <img src="img/smartphone-icon.png" alt="icon">
                <a href="#">Barang Keluar</a>
            </li>
            <div class="line"></div>
            <li class="list-menu">
                <img src="img/laptop-icon.png" alt="icon">
                <a href="#">Master Barang</a>
            </li>
            <div class="line"></div>
            <li class="list-menu">
                <img src="img/aio-icon.png" alt="icon">
                <a href="#">Mini PC</a>
            </li>
            <div class="line"></div>
          
        </ul>
    </aside>
    <!-- Section Input -->
    <section class="section-content">
        <h1 style="position: absolute; top: 10%; left: 20%; color: #12156C;">Tambah Barang</h1>
        <!-- Section Form Input -->
        <div class="box-input">
            <h1 style="text-decoration: underline; margin-left: 2rem; margin-top: 2rem; color: #12156C;">Deskripsi Barang</h1>
            <div class="form" id="myForm">
                <form action="add_barang.php" method="post">
                <div class="form-group">
                    <label for="dari_idbarang">Dari ID Barang <span style="margin-right:100px"></span>: </label>
                    <input type="text" id="dari_idbarang" name="dari_idbarang" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Penerima <span style="margin-right:88px"></span>: </label>
                    <input type="text" id="nama_penerima" name="nama_penerima" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal <span style="margin-right:160px"></span>:</label>
                    <input type="date" id="tanggal" name="tanggal"  class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Pengirim <span style="margin-right:153px"></span>:</label>
                    <input type="text" id="pengirim" name="pengirim" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Vendor <span style="margin-right:106px"></span>:</label>
                    <input type="text" id="nama_vendor" name="nama_vendor" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="master_barang">Master Barang <span style="margin-right:97px"></span>:</label>
                    <input type="text" id="master_barang" name="master_barang" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tahun_pembelian">Tahun Pembelian <span style="margin-right:78px"></span>:</label>
                    <input type="text" id="tahun_pembelian" name="tahun_pembelian" class="form-control" required>
                </div>
                
                <br>

                <button type="submit" class="btn btn-primary" value="Tambahkan" name="addnewbarang" id="add" style=" margin-left:700px">Tambahkan </button>
            </form>
            </div>
        </div>
    </section>
   
    <footer class="footer">
        <p>Copyright 2024 by Arthemis Team</p>
    </footer>
</body>
</div>
</html>

<?php
// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $dari_idbarang = $_POST['dari_idbarang'];
    $nama_penerima = $_POST['nama_penerima'];
    $tanggal = $_POST['tanggal'];
    $pengirim = $_POST['pengirim'];
    $nama_vendor = $_POST['nama_vendor'];
    $master_barang = $_POST['master_barang'];
    $tahun_pembelian = $_POST['tahun_pembelian'];
    if (isset($koneksi)) {
        mysqli_query($koneksi, "INSERT INTO table_header (dari_idbarang, nama_penerima, tanggal, pengirim, nama_vendor, master_barang, tahun_pembelian) VALUES ('$dari_idbarang','$nama_penerima', '$tanggal', '$pengirim', '$nama_vendor', '$master_barang',  '$tahun_pembelian')") or die(mysqli_error($koneksi));
        header ("location:tables.php");
    } else {
        echo "Maaf ada Error";
    }
}
?>
