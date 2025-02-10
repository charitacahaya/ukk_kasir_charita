<div class="container-fluid px-4">
    <h1 class="mt-4 fw-bold text-dark">Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active fw-bold text-dark">Pelanggan</li>
    </ol>

    <!-- Tombol Tambah Data -->
    <a href="?page=pelanggan_tambah" class="btn" style="background-color: #ff66b2; color: white; font-weight: bold;">
        + Tambah Data
    </a>
    <hr>

    <!-- Tabel Pelanggan -->
    <div class="table-responsive">
        <table class="table table-bordered text-center" style="background-color: #ffe6f2; color: black;">
            <thead class="text-white" style="background-color: #ff66b2;">
                <tr>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $data['nama_pelanggan']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['nomor_hp']; ?></td>
                        <td>
                            <a href="?page=pelanggan_ubah&&id=<?php echo $data['id_pelanggan']; ?>" class="btn btn-sm btn-warning">Ubah</a>
                            <a href="?page=pelanggan_hapus&&id=<?php echo $data['id_pelanggan']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
