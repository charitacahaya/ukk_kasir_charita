
-- Membuat database
CREATE DATABASE kasir;
USE kasir;

-- Tabel pelanggan
CREATE TABLE pelanggan (
    PelangganID INT(11) PRIMARY KEY,
    NamaPelanggan VARCHAR(255),
    Alamat TEXT,
    NomorTelepon VARCHAR(15)
);

-- Tabel produk
CREATE TABLE produk (
    ProdukID INT(11) PRIMARY KEY,
    NamaProduk VARCHAR(255),
    Harga DECIMAL(10,2),
    Stok INT(11)
);

-- Tabel penjualan
CREATE TABLE penjualan (
    PenjualanID INT(11) PRIMARY KEY,
    TanggalPenjualan DATE,
    TotalHarga DECIMAL(10,2),
    PelangganID INT(11),
    FOREIGN KEY (PelangganID) REFERENCES pelanggan(PelangganID)
);

-- Tabel detail_penjualan
CREATE TABLE detailpenjualan (
    DetailID INT(11) PRIMARY KEY,
    PenjualanID INT(11),
    ProdukID INT(11),
    JumlahProduk INT(11),
    Subtotal DECIMAL(10,2),
    FOREIGN KEY (PenjualanID) REFERENCES penjualan(PenjualanID),
    FOREIGN KEY (ProdukID) REFERENCES produk(ProdukID)
);
