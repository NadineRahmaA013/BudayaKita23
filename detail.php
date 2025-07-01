<?php
$kategori = $_GET['kategori'] ?? '';

$judul = '';
$data = [];

if ($kategori == 'musik') {
    $judul = "Pelatihan Musik Tradisional";
    $data = [
        ['nama' => 'Sasando', 'gambar' => 'jenis/sasando.jpg', 'harga' => 90000],
        ['nama' => 'Angklung', 'gambar' => 'jenis/angklung.jpg', 'harga' => 90000],
        ['nama' => 'Gamelan', 'gambar' => 'jenis/gamelan.jpg', 'harga' => 90000],
    ];
} elseif ($kategori == 'tarian') {
    $judul = "Pelatihan Tarian Tradisional";
    $data = [
        ['nama' => 'Tari Jaipong', 'gambar' => 'jenis/jaipong.jpg', 'harga' => 80000],
        ['nama' => 'Tari Remo', 'gambar' => 'jenis/remo.jpg', 'harga' => 80000],
        ['nama' => 'Tari Pendet', 'gambar' => 'jenis/pendet.jpg', 'harga' => 80000],
    ];
} elseif ($kategori == 'kerajinan') {
    $judul = "Pelatihan Kerajinan Tangan";
    $data = [
        ['nama' => 'Mengukir', 'gambar' => 'jenis/mengukir.jpg', 'harga' => 70000],
        ['nama' => 'Membatik', 'gambar' => 'jenis/batik.jpg', 'harga' => 70000],
        ['nama' => 'Menganyam', 'gambar' => 'jenis/menganyam.jpg', 'harga' => 70000],
    ];
} else {
    echo "Kategori tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $judul ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eaddcf; /* coklat muda klasik */
            color: #3e2f1c; /* coklat tua untuk teks */
        }
        h2 {
            color: #5e3c1b;
            font-weight: bold;
        }
        .card {
            border: none;
            box-shadow: 0 4px 12px rgba(121, 72, 32, 0.15);
            background-color: #f4e5d6; /* kotak lebih gelap dari bg */
            color: #3e2f1c;
        }
        .btn-success {
            background-color: #2e7d32;
            border-color: #2e7d32;
        }
        .btn-success:hover {
            background-color: #1b5e20;
            border-color: #1b5e20;
        }
        .btn-secondary {
            background-color: #794820;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #5e3518;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4"><?= $judul ?></h2>
    <div class="row">
        <?php foreach ($data as $item): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= $item['gambar'] ?>" class="card-img-top" alt="<?= $item['nama'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['nama'] ?></h5>
                        <p class="card-text">Harga: Rp <?= number_format($item['harga'], 0, ',', '.') ?></p>
                        <a href="form_checkout.php?nama=<?= urlencode($item['nama']) ?>&harga=<?= $item['harga'] ?>" class="btn btn-success">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="index.php" class="btn btn-secondary mt-3">← Kembali ke Beranda</a>
</div>
</body>
</html>
