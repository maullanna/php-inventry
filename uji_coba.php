<!DOCTYPE html>
<html lang="en">
<?php
include 'function.php'; // Pastikan file koneksi database atau konfigurasi sudah benar
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory - IT Dept</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/stylesss.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/sc-inventry.png" type="image/x-icon">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        /* Style for the loading screen */
        #loadingScreen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            font-size: 14px; /* Ukuran font lebih kecil */
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        /* Hides the loading screen after the page is loaded */
        body.loaded #loadingScreen {
            opacity: 0;
            visibility: hidden;
        }

        /* Style for the spinner */
        .spinner {
            border: 3px solid rgba(255, 255, 255, 0.3); /* Ukuran lebih kecil */
            border-top: 3px solid white;
            border-radius: 50%;
            width: 30px; /* Lebar spinner kecil */
            height: 30px; /* Tinggi spinner kecil */
            margin-right: 10px; /* Jarak antara spinner dan teks */
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Content inside #app */
        #app {
            display: none;
        }

        /* Show #app content when the page is fully loaded */
        body.loaded #app {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Loading Screen -->
    <div id="loadingScreen">
        <div class="spinner"></div>
        Loading...
    </div>

    <!-- Main content inside #app -->
    <div id="app">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="index.php">INVENTORY</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
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
                    <!-- Sidebar content -->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <!-- Content here -->
                    </div>
                </main>
                <!-- Footer section -->
            </div>
        </div>
    </div>

    <!-- JavaScript to remove loading screen when the page is fully loaded -->
    <script>
        window.addEventListener("load", function () {
            document.body.classList.add("loaded");
        });
    </script>
</body>

</html>
