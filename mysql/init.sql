CREATE DATABASE IF NOT EXISTS desa_db;

USE desa_db;

CREATE TABLE IF NOT EXISTS informasi_desa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(150) NOT NULL,
    isi TEXT NOT NULL,
    tanggal_dibuat TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO informasi_desa (judul, isi)
VALUES
('Selamat Datang', 'Selamat datang di Website Desa Digital'),
('Layanan Desa', 'Informasi layanan administrasi masyarakat desa');
