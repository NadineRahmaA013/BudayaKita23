<?php
$nama = $_POST['nama'] ?? 'Pengguna';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout Berhasil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #fdf6e3; /* Cream background */
      color: #4b2e1e;
    }
    .success-box {
      background-color: #f5e6da; /* Coklat muda */
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
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
      background-color: #5c3616;
    }
  </style>
</head>
<body>
  <div class="container text-center mt-5">
    <div class="success-box">
      <h2 class="text-success">✅ Checkout Berhasil!</h2>
      <p class="fs-5">Terima kasih, <strong><?= htmlspecialchars($nama) ?></strong> telah melakukan checkout.</p>
      <p>Silakan hubungi admin kami jika ada pertanyaan lebih lanjut:</p>
      <a href="https://wa.me/6285745004306" target="_blank" class="btn btn-success btn-lg mt-3">
        <i class="bi bi-whatsapp"></i> Hubungi Kami 
      </a>
      <div class="mt-4">
        <a href="index.php" class="btn btn-secondary">Kembali ke Beranda</a>
      </div>
    </div>
  </div>
</body>
</html>
