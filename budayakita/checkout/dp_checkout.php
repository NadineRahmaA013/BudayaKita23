-- Membuat database
CREATE DATABASE IF NOT EXISTS checkout;
USE checkout;

-- Membuat tabel budayakita tanpa kolom id
CREATE TABLE IF NOT EXISTS budayakita (
    `Nama` VARCHAR(11) NOT NULL,
    `Email` VARCHAR(255) NOT NULL,
    `Nomor Telpon` VARCHAR(255) NOT NULL,
    `Metode Pembayaran` VARCHAR(255) NOT NULL,
    `Bukti Pembayaran` VARCHAR(255)
);
