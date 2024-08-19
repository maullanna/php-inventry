<?php 
include 'function.php';
 
// Mengambil data barang dengan kode paling besar
$query = mysqli_query($koneksi, "SELECT max(idbarang) as kodeTerbesar FROM barang");
$data = mysqli_fetch_array($query);
$kodeBarangTerbesar = $data['kodeTerbesar'];

//  Jika tidak ada data sebelumnya, atur nomor urut pertama menjadi 433 ya
if (!$kodeBarangTerbesar) { 
    $kodeBarang = 'HRZ433';
} else {
    // Mengambil angka dari kode barang terbesar, menggunakan fungsi substr
    // dan diubah ke integer dengan (int)
    $urutan = (int) substr($kodeBarangTerbesar, 3);

    // Membentuk kode barang baru dengan menambahkan 1 ke nomor urut
    $kodeBarang = 'HRZ' . ($urutan + 1);
}
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
    <link rel="stylesheet" href="css/input.css">
    <link rel="shortcut icon" href="img/sc-inventry.png" type="image/x-icon">
    <style>

        /* Loading Screen CSS */
#loadingScreen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.8);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 180px; /* Adjust as needed */
}

.box {
  width: 30px;
  height: 30px;
  background-color: #1c9fff;
  border-radius: 50%;
  animation: bounce 1.5s infinite;
}

.box:nth-child(2) {
  animation-delay: 0.3s;
}

.box:nth-child(3) {
  animation-delay: 0.6s;
}

.box:nth-child(4) {
  animation-delay: 0.9s;
}

.box:nth-child(5) {
  animation-delay: 1.2s;
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-20px);
  }
}

       
        .form-control {
            margin-left:5px;
            padding: 20px;
            text-align: left;
            margin-bottom: 5px;
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

    <!-- Sidebar end -->

    <!-- Section Input -->
    <section class="section-content">
        <h1 style="position: absolute; top: 10%; left: 20%; color: #12156C;">Tambah Barang</h1>

        <!-- Section Form Input -->
        <div class="box-input">
            <h1 style="text-decoration: underline; margin-left: 2rem; margin-top: 2rem; color: #12156C;">Deskripsi Barang</h1>
            <div class="form" id="myForm">
                <form  method="post" action="simpan.php">
                     <div class="from-group">
                    <label for="">ID Barang<span style="margin-right:95px"></span>:</label><input type="text" name="idbarang" value="<?php echo $kodeBarang ?>" required="required" class="form-control" readonly>
                    </div>
                    <div class="from-group">
                    <label for="">Brand  <span style="margin-right:121px"></span>:</label><input type="text" name="brand" required="required" class="form-control" >
                    </div>
                    <div class="from-group">
                    <label for="">Type  <span style="margin-right:133px"></span>:</label><input type="text" name="tipe" required="required" class="form-control" >
                    </div>
                    <div class="from-group">
                    <label for="">Model  <span style="margin-right:122px"></span>:</label><input type="text" name="model" required="required" class="form-control" >
                    </div>
                    <div class="from-group">
                    <label for="">User  <span style="margin-right:134px"></span>:</label><input type="text" name="user" required="required" class="form-control" >
                    </div>
                    <div class="from-group">
                    <label for="">Bulan Pembelian  <span style="margin-right:32px"></span>:</label><input type="number" required="required" name="bulan_pembelian" class="form-control" >
                    </div>
                    <div class="from-group">
                    <label for="">Tahun Pembelian  <span style="margin-right:28px"></span>:</label><input type="number" required="required" name="tahun_pembelian" class="form-control" >
                    </div>
                    <div class="from-group">
                    <label for="">Data Transfer  <span style="margin-right:55px"></span>:</label><input type="date" name="data_transfer" required="required" class="form-control" >
                    </div>
                    <div class="from-group">
                    <label for="">Remark  <span style="margin-right:107px"></span>:</label><input type="text" name="remark" required="required" class="form-control" >
                    </div>
                    <div class="from-group">
                    <label for="">Condition  <span style="margin-right:88px"></span>:</label><input type="text" name="barang_condition" required="required" class="form-control" >
                    </div>
    
                    <br>

                    <button type="submit" class="btn btn-primary" value="Simpan" name="addnewbarang" id="add" style=" margin-left:700px" >Tambahkan</button>

                </form>
            </div>
        </div>
    </section>
   
    <footer class="footer">
        <p>Copyright 2024 by Arthemis Team</p>
    </footer>
    <!-- Loading Screen HTML -->
<div id="loadingScreen" style="display: none;">
  <div class="container">
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
  const loadingScreen = document.getElementById('loadingScreen');

  // Show loading screen when opening links with target="_blank"
  document.querySelectorAll('li.list-menu.active[onclick="location.href=\'tables.php\';"]').forEach(link => {    link.addEventListener('click', () => {
      loadingScreen.style.display = 'flex';
    });
  });

  // Hide loading screen when the new page has loaded
  window.addEventListener('load', () => {
    loadingScreen.style.display = 'none';
  });
});

</script>

</body>



</html>