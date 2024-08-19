<?php 
include 'function.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minipc</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&family=PT+Serif&family=Playfair+Display:wght@400;500&family=Young+Serif&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/tables.css?v=1.0">
    <link rel="shortcut icon" href="img/sc-inventry.png" type="image/x-icon">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>





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



  /* Mengatur lebar tabel dan sel */
table {
    width: 100%;
}

th, td {
    text-align: center;
    vertical-align: middle;
}

/* Menentukan lebar kolom Opsi */
th:last-child, td:last-child {
    width: 6%; /* Sesuaikan untuk membuat lebih sempit */
    padding: 5px; /* Mengurangi padding */
}

/* Menyesuaikan ukuran ikon */
td:last-child ion-icon {
    font-size: 16px; /* Ukuran ikon lebih kecil */
}

/* Membuat tombol lebih kecil dan kompak */
td:last-child .editBtn, td:last-child a {
    display: inline-block;
    padding: 3px 5px; /* Mengurangi padding tombol */
    font-size: 10px; /* Ukuran font lebih kecil */
    vertical-align: middle;
}

/* Mengurangi margin di sekitar ikon */
td:last-child button, td:last-child a {
    margin: 0; /* Hilangkan margin */
}

 
    .table-header {
        width: 100%;
    }

    .table-header th, .table-header td {
        text-align: center;
        vertical-align: middle;
    }

    /* Menentukan lebar kolom Opsi */
    .table-header .opsi {
        width: 6%; /* Sesuaikan untuk membuat lebih sempit */
        padding: 5px; /* Mengurangi padding */
    }

    /* Menyesuaikan ukuran ikon */
    .table-header .opsi ion-icon {
        font-size: 16px; /* Ukuran ikon lebih kecil */
    }

    /* Membuat tombol lebih kecil dan kompak */
    .table-header .editBtn, .table-header a {
        display: inline-block;
        padding: 3px 5px; /* Mengurangi padding tombol */
        font-size: 10px; /* Ukuran font lebih kecil */
        vertical-align: middle;
        margin-right: 3px; /* Mengurangi margin antar tombol */
    }

    /* Mengurangi margin di sekitar ikon */
    .table-header .opsi button, .table-header .opsi a {
        margin: 0; /* Hilangkan margin */
    }
    table .opsi button, table .opsi a {
 margin: 0;
    }
    
</style>


    
</head>

<body>
    <div class="kotak">
        <!-- Header Start -->
        <header class="kotak1">
            <div class="logo">
                <h1><a href="index.php" class="back-link">&laquo;Back</a></h1>
                <img style="margin-left:20px;" src="img/sc-inventry.png" alt="logo">
                <img src="img/user-img.png" style="margin-left: 240%;" alt="user-img">
                <p id="username"></p>
            </div>
        </header>
        <section class="section-content">

            <div class="tabel">
                <h1 id="Stock" style="margin-left: 3rem; margin-top: 2rem;padding:5px; color: #12156C;">Table Header | Invoice</h1>
                <a href="add_barang.php" target="_blank"><button type="button" id="add" style="width: 100px; margin-bottom:10px;" > Add Inv </button>  </a>


            <table class="table-header" border="1" cellspacing="0" cellpadding="30">
            <thead>
            <tr>
        <th>Dari ID Barang</th>
        <th>Nama Penerima</th>
        <th>Tanggal</th>
        <th>Pengirim</th>
        <th>Nama Vendor</th>
        <th>Master Barang</th>
        <th>Tahun Pembelian</th>
        <th class="opsi">Opsi</th>

    </tr>
    </thead>   
    <tbody>
        <?php
     
       $result = mysqli_query($koneksi, "SELECT * FROM table_header") or die (mysqli_error($koneksi));
        while($row = mysqli_fetch_array($result)) {
        ?>
    <tr>
     <td><?php echo $row['dari_idbarang']; ?></td>
     <td><?php echo $row['nama_penerima']; ?></td>
     <td><?php echo $row['tanggal']; ?></td>
     <td><?php echo $row['pengirim']; ?></td>
     <td><?php echo $row['nama_vendor']; ?></td>
     <td><?php echo $row['master_barang']; ?></td>
     <td><?php echo $row['tahun_pembelian']; ?></td>
     <td class="opsi">
     <button type="button" class="btn btn-primary editBtn" 
    style="background-color:white; color:blue; border:none; display: inline-block; font-size:3px; height:auto;"  
    data-bs-toggle="modal" data-bs-target="#updateModal" 
    data-idbarang="<?php echo $row['dari_idbarang']; ?>"
    data-namapenerima="<?php echo $row['nama_penerima']; ?>"
    data-tanggal="<?php echo $row['tanggal']; ?>"
    data-pengirim="<?php echo $row['pengirim']; ?>"
    data-namavendor="<?php echo $row['nama_vendor']; ?>"
    data-masterbarang="<?php echo $row['master_barang']; ?>"
    data-tahunpembelian="<?php echo $row['tahun_pembelian']; ?>">
    <ion-icon name="create" size="small"></ion-icon>
</button>
 |
  <a href="delete.php?add=<?php echo $row['dari_idbarang']; ?> "onclick="return confirm('Apakah anda yakin?');">
    <ion-icon name="trash" size="small"></ion-icon>
  </a>
</td>


      </tr>
      <?php 
        }
   
      ?>

    </tbody>
</table>

<h1 id="Stock" style="margin-left: 3rem; margin-top: 6rem; padding:5px; color: #12156C; ">Table Stock</h1>
<a href="masuk.php" target="_blank"><button type="button" id="add" style="margin-bottom: 10px;"> Tambah Stock </button></a>
                <!-- Tabel Utama -->
                <table border="1" cellpadding="30" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Barang</th>
                            <th>Brand</th>
                            <th>Type</th>
                            <th>Model</th>
                            <th>User</th>
                            <th>Bulan Pembelian</th>
                            <th>Tahun Pembelian</th>
                            <th>Data Transfer</th>
                            <th>Remark</th>
                            <th>Condition</th>
                            <th class="opsi">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // Fetch and display sorted data
                        $result = mysqli_query($koneksi, "SELECT barang.*, category.name_category FROM barang LEFT JOIN category ON barang.name_category = category.name_category ORDER BY barang.brand ASC, barang.idbarang ASC") or die (mysqli_error($koneksi));
                        while($b = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $b['idbarang']; ?></td>
                            <td><?php echo $b['brand']; ?></td>
                            <td><?php echo $b['tipe']; ?></td>
                            <td><?php echo $b['model']; ?></td>
                            <td><?php echo $b['user']; ?></td>
                            <td><?php echo $b['bulan_pembelian']; ?></td>
                            <td><?php echo $b['tahun_pembelian']; ?></td>
                            <td><?php echo $b['data_transfer']; ?></td>
                            <td><?php echo $b['remark']; ?></td>
                            <td><?php echo $b['barang_condition']; ?></td>
                            <td class="opsi">
  <button type="button" class="btn btn-primary editBtn" 
    style="background-color:white; color:blue; border:none; display: inline-block; font-size:3px; height:auto;"  
    data-bs-toggle="modal" data-bs-target="#editItemModal"
    data-idbarang="<?php echo $b['idbarang']; ?>"
    data-brand="<?php echo $b['brand']; ?>"
    data-type="<?php echo $b['tipe']; ?>"
    data-model="<?php echo $b['model']; ?>"
    data-user="<?php echo $b['user']; ?>"
    data-bulanpembelian="<?php echo $b['bulan_pembelian']; ?>"
    data-tahunpembelian="<?php echo $b['tahun_pembelian']; ?>"
    data-datatransfer="<?php echo $b['data_transfer']; ?>"
    data-remark="<?php echo $b['remark']; ?>"
    data-condition="<?php echo $b['barang_condition']; ?>">
    <ion-icon name="create" size="small"></ion-icon>
  </button>
  |
  <a href="delete.php?id=<?php echo $b['idbarang']; ?>" onclick="return confirm('Apakah anda yakin?');">
    <ion-icon name="trash" size="small"></ion-icon>
  </a>
</td>
                        </tr>
                        <?php 
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <footer class="footer">
        <p>Copyright 2024 by Arthemis Team</p>
    </footer>
    <!-- Sertakan jQuery, misalnya melalui CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Skrip JavaScript untuk menangani tindakan edit dan hapus -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <script>
 
 

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// Close modal if clicked outside of it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  

  // Close modal if clicked outside of it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  
  $(document).on("click", ".editBtn", function() {
    var dariIdBarang = $(this).data('idbarang');
    var namaPenerima = $(this).data('namapenerima');
    var tanggal = $(this).data('tanggal');
    var pengirim = $(this).data('pengirim');
    var namaVendor = $(this).data('namavendor');
    var masterBarang = $(this).data('masterbarang');
    var tahunPembelian = $(this).data('tahunpembelian');

    // Set nilai di dalam modal
    $('#modalDariIdbarang').val(dariIdBarang);
    $('#modalNamaPenerima').val(namaPenerima);
    $('#modalTanggal').val(tanggal);
    $('#modalPengirim').val(pengirim);
    $('#modalNamaVendor').val(namaVendor);
    $('#modalMasterBarang').val(masterBarang);
    $('#modalTahunPembelian').val(tahunPembelian);
    // Tambahkan field lain sesuai kebutuhan
  });

  $(document).on("click", ".editBtn", function() {
    // Ambil data dari atribut data-*
    var idBarang = $(this).data('idbarang');
    var brand = $(this).data('brand');
    var type = $(this).data('type');
    var model = $(this).data('model');
    var user = $(this).data('user');
    var bulanPembelian = $(this).data('bulanpembelian');
    var tahunPembelian = $(this).data('tahunpembelian');
    var dataTransfer = $(this).data('datatransfer');
    var remark = $(this).data('remark');
    var condition = $(this).data('condition');

    // Set nilai ke dalam input modal
    $('#editIdBarang').val(idBarang);
    $('#editBrand').val(brand);
    $('#editType').val(type);
    $('#editModel').val(model);
    $('#editUser').val(user);
    $('#editBulanPembelian').val(bulanPembelian);
    $('#editTahunPembelian').val(tahunPembelian);
    $('#editDataTransfer').val(dataTransfer);
    $('#editRemark').val(remark);
    $('#editCondition').val(condition);

    // Tampilkan modal
    $('#editItemModal').modal('show');
});

document.addEventListener('DOMContentLoaded', () => {
  const loadingScreen = document.getElementById('loadingScreen');

  // Show loading screen when opening links with target="_blank"
  document.querySelectorAll('a[target="_blank"]').forEach(link => {
    link.addEventListener('click', () => {
      loadingScreen.style.display = 'flex';
    });
  });

  // Hide loading screen when the new page has loaded
  window.addEventListener('load', () => {
    loadingScreen.style.display = 'none';
  });
});
  
</script>



<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="updateAdd.php" class="row g-3">
          <input type="hidden" id="modalDariIdbarang" name="dari_idbarang">
          
          <div class="col-md-6">
            <label for="modalNamaPenerima" class="form-label">Nama Penerima</label>
            <input type="text" class="form-control" id="modalNamaPenerima" name="nama_penerima">
          </div>
          
          <div class="col-md-6">
            <label for="modalTanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="modalTanggal" name="tanggal">
          </div>
          
          <div class="col-md-6">
            <label for="modalPengirim" class="form-label">Pengirim</label>
            <input type="text" class="form-control" id="modalPengirim" name="pengirim">
          </div>
          
          <div class="col-md-6">
            <label for="modalNamaVendor" class="form-label">Nama Vendor</label>
            <input type="text" class="form-control" id="modalNamaVendor" name="nama_vendor">
          </div>
          
          <div class="col-md-6">
            <label for="modalMasterBarang" class="form-label">Master Barang</label>
            <input type="text" class="form-control" id="modalMasterBarang" name="master_barang">
          </div>
          
          <div class="col-md-6">
            <label for="modalTahunPembelian" class="form-label">Tahun Pembelian</label>
            <input type="text" class="form-control" id="modalTahunPembelian" name="tahun_pembelian">
          </div>

          <div class="col-12">
            <button type="submit" name="update" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!--modal table detail-->

<!-- Modal Edit -->
<div class="modal fade" id="editItemModal" tabindex="-1" aria-labelledby="editItemModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editItemModalLabel">Edit Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editForm" action="update.php" method="POST">
        <div class="modal-body">
          <!-- ID Barang (hidden) -->
          <input type="hidden" id="editIdBarang" name="idBarang">
          
          <div class="mb-3">
            <label for="editBrand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="editBrand" name="brand">
          </div>
          <div class="mb-3">
            <label for="editType" class="form-label">Type</label>
            <input type="text" class="form-control" id="editType" name="type">
          </div>
          <div class="mb-3">
            <label for="editModel" class="form-label">Model</label>
            <input type="text" class="form-control" id="editModel" name="model">
          </div>
          <div class="mb-3">
            <label for="editUser" class="form-label">User</label>
            <input type="text" class="form-control" id="editUser" name="user">
          </div>
          <div class="mb-3">
            <label for="editBulanPembelian" class="form-label">Bulan Pembelian</label>
            <input type="text" class="form-control" id="editBulanPembelian" name="bulanPembelian">
          </div>
          <div class="mb-3">
            <label for="editTahunPembelian" class="form-label">Tahun Pembelian</label>
            <input type="text" class="form-control" id="editTahunPembelian" name="tahunPembelian">
          </div>
          <div class="mb-3">
            <label for="editDataTransfer" class="form-label">Data Transfer</label>
            <input type="text" class="form-control" id="editDataTransfer" name="dataTransfer">
          </div>
          <div class="mb-3">
            <label for="editRemark" class="form-label">Remark</label>
            <input type="text" class="form-control" id="editRemark" name="remark">
          </div>
          <div class="mb-3">
            <label for="editCondition" class="form-label">Condition</label>
            <input type="text" class="form-control" id="editCondition" name="condition">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


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


</body>

</html>
