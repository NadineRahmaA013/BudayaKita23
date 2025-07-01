<?php
require_once('db.php');

$id    = $_GET['id'];
$image = $_GET['image'];

// Hapus file gambar (jika ada dan ditemukan)
if (!empty($image) && file_exists($image)) {
    unlink($image); // hapus dari folder
}

// Hapus data dari database
$query = "DELETE FROM budayakita WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='read.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data'); window.location.href='read.php';</script>";
}
?>
