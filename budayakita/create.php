<?php
require_once('db.php');

// Ambil data dari form
$tentang_kami    = $_POST['tentang_kami'];
$jasa_kategori   = $_POST['jasa_kategori'];
$jenis_pelatihan = $_POST['jenis_pelatihan'];
$cari_lokasi     = $_POST['cari_lokasi'];
$pilih_pelatih   = $_POST['pilih_pelatih'];
$pilih_jadwal    = $_POST['pilih_jadwal'];
$harga           = $_POST['harga'];

// Upload gambar
$image = $_FILES['image']['name'];
$tmp   = $_FILES['image']['tmp_name'];
$nama_baru = uniqid() . '_' . $image;
$folder = "uploaded/" . $nama_baru;

if (move_uploaded_file($tmp, $folder)) {
    $query = "INSERT INTO budayakita 
    (tentang_kami, jasa_kategori, jenis_pelatihan, cari_lokasi, pilih_pelatih, pilih_jadwal, image, harga) 
    VALUES 
    ('$tentang_kami', '$jasa_kategori', '$jenis_pelatihan', '$cari_lokasi', '$pilih_pelatih', '$pilih_jadwal', '$folder', '$harga')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil disimpan'); window.location.href='read.php';</script>";
    } else {
        echo "Gagal simpan data: " . mysqli_error($sconn);
    }
} else {
    echo "<script>alert('Upload gambar gagal.'); window.location.href='create_form.php';</script>";
}
?>
