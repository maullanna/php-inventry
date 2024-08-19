<?php
include 'function.php';

$add = $_GET['add'];
if (isset($_POST['submit'])) {
 $dari_idbarang = $_POST['dari_idbarang'];
 $nama_penerima = $_POST['nama_penerima'];
 $tanggal = $_POST['tanggal'];
 $pengirim = $_POST['pengirim'];
 $nama_vendor = $_POST['nama_vendor'];
 $master_barang = $_POST['master_barang'];
 $tahun_pembelian = $_POST['tahun_pembelian'];

 if (!$koneksi) {
     die("Koneksi gagal: " . mysqli_connect_error());
 }

 $query = "UPDATE table_header SET dari_idbarang= '$dari_idbarang', nama_penerima = '$nama_penerima', tanggal = '$tanggal', nama_vendor = '$nama_vendor', master_barang = '$master_barang', tahun_pembelian = '$tahun_pembelian' WHERE dari_idbarang='$add'";
 
 if(mysqli_query($koneksi, $query)){
     header('location: tables.php');
 } else {
     echo "Error: " . mysqli_error($koneksi);
 }

 mysqli_close($koneksi);
}

$result = mysqli_query($koneksi, "SELECT * FROM table_header WHERE dari_idbarang='$add'");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Barang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&family=PT+Serif&family=Playfair+Display:wght@400;500&family=Young+Serif&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/input.css">
    <link rel="shortcut icon" href="img/sc-inventry.png" type="image/x-icon">
    <style>
        .form-control {
            margin-left: 5px;
            padding: 15px;
            text-align: left;
            margin-bottom: 5px;
        }

        .box-input {
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            max-width: 800px;
        }

        .box-input h1 {
            color: #12156C;
        }

        .btn-primary {
            background-color: #12156C;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0e1156;
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

    <!-- Sidebar start -->
    <aside>
        <ul class="menu-sidebar">
            <li class="list-menu active" onclick="location.href='tables.php';">
                <img src="img/dasboard-icon.png" alt="icon">
                <span>Dashboard</span>
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

    <!-- Section Update -->
    <section class="section-content">
        <h1 style="position: absolute; top: 10%; left: 20%; color: #12156C;">Update Data Barang</h1>

        <div class="box-input">
            <h1>Update Data Barang</h1>
            <form method="post" action="">
                <div class="from-group">
                    <label for="dari_idbarang">Dari ID Barang:</label>
                    <input type="text" id="dari_idbarang" name="dari_idbarang" class="form-control" value="<?php echo $row['dari_idbarang']?>" required>
                </div>

                <div class="from-group">
                    <label for="nama_penerima">Nama Penerima:</label>
                    <input type="text" id="nama_penerima" name="nama_penerima" class="form-control" value="<?php echo $row['nama_penerima']?>" required>
                </div>

                <div class="from-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?php echo $row['tanggal']?>" required>
                </div>

                <div class="from-group">
                    <label for="pengirim">Pengirim:</label>
                    <input type="text" id="pengirim" name="pengirim" class="form-control" value="<?php echo $row['pengirim']?>" required>
                </div>

                <div class="from-group">
                    <label for="nama_vendor">Nama Vendor:</label>
                    <input type="text" id="nama_vendor" name="nama_vendor" class="form-control" value="<?php echo $row['nama_vendor']?>" required>
                </div>

                <div class="from-group">
                    <label for="master_barang">Master Barang:</label>
                    <input type="text" id="master_barang" name="master_barang" class="form-control" value="<?php echo $row['master_barang']?>" required>
                </div>

                <div class="from-group">
                    <label for="tahun_pembelian">Tahun Pembelian:</label>
                    <input type="text" id="tahun_pembelian" name="tahun_pembelian" class="form-control" value="<?php echo $row['tahun_pembelian']?>" required>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </form>
        </div>
    </section>
   
    <footer class="footer">
        <p>Copyright 2024 by Arthemis Team</p>
    </footer>
</body>

</html>
