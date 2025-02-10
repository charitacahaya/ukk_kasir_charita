<?php
include "koneksi.php";
if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama']; // Perbaikan variabel POST
    $level = 'admin';

    $insert = mysqli_query($koneksi, "INSERT INTO user(nama,username,password,level) VALUES('$nama', '$username', '$password', '$level')");

    if ($insert) {
        echo '<script>alert("Register berhasil"); location.href="login.php"</script>';
    } else {
        echo '<script>alert("Register gagal! Silakan coba lagi.");</script>';
    }
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
    <title>Register Aplikasi Kasir</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
</head>

<body style="background-color: pink;">
        <style>
            .card {
                background-color: #ffccdd !important; /* Pink lembut */
                border: 2px solid #ff6699; /* Border pink */
            }

            .card-header {
                background-color: #ff6699 !important; /* Header pink */
                color: white !important;
            }

            .btn-primary {
                background-color: #ff6699 !important; /* Warna tombol pink */
                border-color: #ff6699 !important;
            }

            .btn-primary:hover {
                background-color: #ff3366 !important; /* Warna lebih gelap saat hover */
                border-color: #ff3366 !important;
            }

            .logo {
                width: 150px;  /* Atur lebar */
                height: auto;   /* Menjaga aspek rasio */
                display: block;
                margin: 0 auto; /* Pusatkan gambar */
            }

        </style>

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">
                                    <img src="assets/img/cashier.png" alt="Logo Aplikasi" class="logo">
                                    <h3 class="font-weight-light my-4">Register Aplikasi Kasir</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputName" type="text" name="nama" placeholder="Masukkan Nama Lengkap" required />
                                            <label for="inputName">Nama Lengkap</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputUsername" type="text" name="username" placeholder="Masukkan Username" required />
                                            <label for="inputUsername">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" required />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary w-100">Register</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Sudah punya akun? Login!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2025</div>
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

</body>

</html>
