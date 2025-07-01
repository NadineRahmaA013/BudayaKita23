<?php
require_once('db.php');

$id              = $_POST['id'];
$tentang_kami    = $_POST['tentang_kami'];
$jasa_kategori   = $_POST['jasa_kategori'];
$jenis_pelatihan = $_POST['jenis_pelatihan'];
$cari_lokasi     = $_POST['cari_lokasi'];
$pilih_pelatih   = $_POST['pilih_pelatih'];
$pilih_jadwal    = $_POST['pilih_jadwal'];
$harga           = $_POST['harga'];

$query = "UPDATE budayakita SET 
    tentang_kami = '$tentang_kami',
    jasa_kategori = '$jasa_kategori',
    jenis_pelatihan = '$jenis_pelatihan',
    cari_lokasi = '$cari_lokasi',
    pilih_pelatih = '$pilih_pelatih',
    pilih_jadwal = '$pilih_jadwal',
    harga = '$harga'
    WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Data berhasil diupdate'); window.location.href='read.php';</script>";
} else {
    echo "Gagal update data: " . mysqli_error($conn);
}
?>