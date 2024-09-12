<!DOCTYPE html>
<html lang="en">
<?php
include 'function.php'; // Pastikan file koneksi database atau konfigurasi
?>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inventry - IT Dept</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/stylesss.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- shortcut icon -->
    <link rel="shortcut icon" href="img/sc-inventry.png" type="image/x-icon">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
     .kelas-box {
      display: inline-block;
      width: 200px;
      height: 90px;
      margin: 10px;
      border: 1px solid #000; /* Menambahkan border dengan ketebalan 1px dan warna hitam */
      border-radius: 7px;
      text-align: center ;
      cursor: pointer;
      font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      line-height: 50px;
    }
    input {
      height: 30px;
      width: 200px;
    }
    #formTambahDashboard , label, input, button, select {
      margin-left: 10px;
    }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">INVENTRY</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link active" href="#dashboard-link" id="dashboard-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link active" href="masuk.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Barang Masuk
                        </a>
                        <a class="nav-link active" href="keluar.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Barang Keluar
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Master Data
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Data Pegawai
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="data_pegawai.php">ID Pegawai</a>
                                         
                                        <a class="nav-link" href="data_pegawai.php">Nama</a>
                                        <a class="nav-link" href="data_pegawai.php">Tanggal Lahir</a>
                                        <a class="nav-link" href="data_pegawai.php">Departemen</a>
                                        <a class="nav-link" href="data_pegawai.php">Level</a>
                                        <a class="nav-link" href="data_pegawai.php">Status</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Master Barang
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Category
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="#">ID </a>
                                        <a class="nav-link" href="#">Nama Kategori</a>
                                        <a class="nav-link" href="#">Status</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">List</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Mini Pc
                        </a>
                        <a class="nav-link" href="tables.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            table
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <button type="button" id="add" data-toggle="modal" data-target="#addDashboardModal">+ Add Dasboard</button>
                    <div class="row">
                        <!-- Existing dashboard sections -->
                        <?php

// Query SQL untuk mengambil data kategori dari tabel category
$sql = "SELECT * FROM category";
$result = mysqli_query($koneksi, $sql);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Tampilkan data kategori sebagai box di dashboard
    while ($row = mysqli_fetch_assoc($result)) {
        $name_category = $row['name_category'];
        $color = $row['color'];
        

        echo "<div class='kelas-box' style='background-color: $color; position: relative; font-weight:bold;' onclick=\"redirectToTables('$name_category', '$color');\">$name_category
       <button  class='btn btn-danger btn-sm delete-btn' style='position: absolute; top: 60px; right: 10px; width:60px; height: 26px; font-size:12px;' onclick=\"deleteCategory('$name_category', '$color', event);\">Delete</button>
    </div>";

    }
} else {
    echo "Gagal mengambil data dari database.";
}
?>
                    </div>
                </div>
            </main>
            <!-- Footer section -->
        </div>
    </div>

    <!-- Add Dashboard Modal -->
    <div class="modal fade" id="addDashboardModal" tabindex="-1" aria-labelledby="addDashboardModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addDashboardModalLabel">Add Dashboard</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="formTambahDashboard" action="simpan_ct.php">
                    <div class="form-group">
                    <label for=""><strong>Name Category :</strong></label> 

                        <input type="text" class="form-control" placeholder="Name Category" id="name_category" name="name_category" >
                    </div>
      
                <label for=""><strong>Color</strong> </label>
                <div>
                        <select id="colorDrop" name="color">
                           <option value="#5BBCFF">Biru</option>
                           <option value="#add8e6">Biru Muda</option>
                           <option value="#90ee90">Hijau muda</option>
                           <option value="#ffff99">Kuning Muda</option>
                        </select> <br>
                    </div>
                  
                    <div class="modal-footer">
                            <button  type="submit"  class="btn btn-primary" name="addnewmodal" id="tambahkan" onclick="tambahBarang()" >Tambahkan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="dashboard-section"></div>
    
    
    <script>
    // Fungsi untuk mengarahkan ke tables.php dengan parameter
    function redirectToTables(nameCategory, color) {
        window.location.href = "tables.php?name_category=" + nameCategory + "&color=" + color;
    }

   function tambahBarang() {
    var name_category = document.getElementById('name_category').value;
    var color = document.getElementById('colorDrop').value;

    // Validasi Input
    if (name_category === "" || color === "") {
        alert("Semua field harus diisi!");
        return;
    }

    // Kirim data ke server menggunakan AJAX
    $.ajax({
        type: "POST",
        url: "simpan_ct.php", 
        data: {
            name_category: name_category,
            color: color
        },
        success: function(response) {
            // ini Tambahkan kategori baru ke dashboard tanpa perlu refresh halaman
            var dashboard = document.getElementById("dashboard-section");
            var newDiv = document.createElement("div");
            newDiv.className = "kelas-box";
            newDiv.innerHTML = "<br>" + name_category + "<br><br> ";
            newDiv.style.backgroundColor = color;
            newDiv.setAttribute("data-name-category", name_category); 
            newDiv.setAttribute("data-color", color); 
            newDiv.addEventListener("click", function () {
                var nameCategory = this.getAttribute("data-name-category");
                var color = this.getAttribute("data-color");
                redirectToTables(nameCategory, color); 
            });
            dashboard.appendChild(newDiv);

            // Reset form
            document.getElementById("name_category").value = "";

            // Tutup modal setelah data ditambahkan
            $('#addDashboardModal').modal('hide');
        },
        error: function(xhr, status, error) {
            alert("Terjadi kesalahan saat menyimpan data!");
            console.error(xhr.responseText);
        }
    });
}
function deleteCategory(nameCategory, color) {
    event.stopPropagation(); // menghentikan propagasi event ke elemen parent agar gak ke tables.php
    if (confirm('Are you sure you want to delete this item?')) {
        window.location.href = `delete.php?name_category=${encodeURIComponent(nameCategory)}&color=${encodeURIComponent(color)}`;
    }
}



</script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
