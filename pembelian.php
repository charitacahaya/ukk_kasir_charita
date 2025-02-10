<div class="container-fluid px-4">
    <h1 class="mt-4 fw-bold text-dark">Pembelian</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active fw-bold text-dark">Pembelian</li>
    </ol>

    <!-- Tombol Tambah Pembelian -->
    <a href="?page=pembelian_tambah" class="btn" style="background-color: #ff66b2; color: white; font-weight: bold;">
        + Tambah Pembelian
    </a>
    <hr>

    <!-- Tabel Pembelian -->
    <div class="table-responsive">
        <table class="table table-bordered text-center" style="background-color: #ffe6f2; color: black;">
            <thead class="text-white" style="background-color: #ff66b2;">
                <tr>
                    <th>Tanggal Pembelian</th>
                    <th>Pelanggan</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM penjualan LEFT JOIN pelanggan ON pelanggan.id_pelanggan = penjualan.id_pelanggan");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo date('d M Y', strtotime($data['tanggal_penjualan'])); ?></td>
                        <td><?php echo $data['nama_pelanggan']; ?></td>
                        <td>Rp <?php echo number_format($data['total_harga'], 0, ',', '.'); ?></td>
                        <td>
                            <a href="?page=penjualan_detail&id=<?php echo $data['id_penjualan']; ?>" class="btn btn-sm btn-warning">Detail</a>
                            <a href="?page=penjualan_hapus&id=<?php echo $data['id_penjualan']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
