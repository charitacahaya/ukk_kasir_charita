<div class="container-fluid px-4">
    <h1 class="mt-4 fw-bold text-dark">Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active fw-bold text-dark">Produk</li>
    </ol>

    <!-- Tombol Tambah Produk -->
    <a href="?page=produk_tambah" class="btn" style="background-color: #ff66b2; color: white; font-weight: bold;">
        + Tambah Produk
    </a>
    <hr>

    <!-- Tabel Produk -->
    <div class="table-responsive">
        <table class="table table-bordered text-center" style="background-color: #ffe6f2; color: black;">
            <thead class="text-white" style="background-color: #ff66b2;">
                <tr>
                    <th>No</th> <!-- Tambahkan kolom No -->
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM produk");
                $no = 1; // Inisialisasi nomor urut
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td> <!-- Menampilkan nomor urut -->
                        <td><?php echo $data['nama_produk']; ?></td>
                        <td>Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
                        <td><?php echo $data['stok']; ?></td>
                        <td>
                            <a href="?page=produk_ubah&&id=<?php echo $data['id_produk']; ?>" class="btn btn-sm btn-warning">Ubah</a>
                            <a href="?page=produk_hapus&&id=<?php echo $data['id_produk']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
