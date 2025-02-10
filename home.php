
<div class="container-fluid px-4">
                    <h1 class="mt-4 fw-bold">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active fw-bold">Dashboard</li>
                    </ol>
                    <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-gray text-dark mb-4">
                                <div class="card-body"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pelanggan")); ?> Total Pelanggan</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-dark stretched-link" href="?page=pelanggan"> View Details </a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-gray text-dark mb-4">
                                <div class="card-body"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM produk")); ?> Total Produk</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-dark stretched-link" href="?page=produk">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-gray text-dark mb-4">
                                <div class="card-body"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM penjualan")); ?> Pembelian</div> 
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-dark stretched-link" href="?page=pembelian">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-gray text-dark mb-4">
                                <div class="card-body"><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user")); ?> Total User</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-dark stretched-link" href="?page=user">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            