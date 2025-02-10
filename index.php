<?php
include "koneksi.php";
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Aplikasi Kasir</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
        }

        body {
            font-family: 'Poppins', sans-serif !important;
        }

        .sb-sidenav-menu-heading,
        .nav-link {
            font-family: 'Poppins', sans-serif !important;
        }

        .bold-text {
            font-weight: bold;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand" style="background-color: #ff6699;">

        <!-- Navbar Brand-->
        <?php
        $brandColor = "white"; // Bisa diambil dari database atau setting user
        ?>

        <a class="navbar-brand ps-3" href="." style="color: <?= $brandColor ?>;">Aplikasi Kasir</a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
        <?php
        $sidebarColor = "#ff66b2"; // Warna pink (bisa diambil dari database)
        ?>

        <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background-color: <?= $sidebarColor ?>;">

                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading" style="color: white;">Navigasi</div>
                        <a class="nav-link" href="index.php" style="color: white;">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="?page=pelanggan" style="color: white;">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Pelanggan
                        </a>
                        <a class="nav-link" href="?page=produk" style="color: white;">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Produk/Barang
                        </a>
                        <a class="nav-link" href="?page=pembelian" style="color: white;">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Pembelian
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer" style="color: white;">
                    <div class="small bold-text">Logged in as:</div>
                    <?php echo $_SESSION['user']['nama']; ?>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>

                <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                include $page . '.php';
                ?>

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Aplikasi Kasir 2025</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>