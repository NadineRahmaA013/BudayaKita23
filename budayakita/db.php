<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "kitabudaya";

// Buat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
