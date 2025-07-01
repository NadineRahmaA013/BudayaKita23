<?php
$nama  = $_GET['nama'] ?? '';
$harga = $_GET['harga'] ?? 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout - <?= htmlspecialchars($nama) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fdf6e3; /* Cream background */
    }
    .form-container {
      background-color: #f5e6da; /* Coklat muda untuk card form */
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .btn-success-custom {
      background-color: #2e7d32;
      border-color: #2e7d32;
      color: white;
    }
    .btn-success-custom:hover {
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
  <div class="container my-5">
    <div class="form-container">
      <h2 class="mb-4">Form Checkout: <?= htmlspecialchars($nama) ?></h2>

      <!-- ✅ FORM MULAI -->
      <form action="proses_checkout.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nama_pelatihan" value="<?= htmlspecialchars($nama) ?>">
        <input type="hidden" name="harga" value="<?= htmlspecialchars($harga) ?>">

        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
          <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
          <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" required>
            <option value="">Pilih Metode</option>
            <option value="tunai">Tunai (Bayar di tempat)</option>
            <option value="non-tunai">Non-Tunai (Transfer)</option>
          </select>
        </div>

        <div id="bukti-transfer" style="display: none;">
          <div class="mb-3">
            <label class="form-label">Transfer ke salah satu rekening berikut:</label>
            <ul>
              <li><strong>BCA</strong> - 089999 a.n BudayaKita</li>
              <li><strong>Mandiri</strong> - 872455 a.n BudayaKita</li>
              <li><strong>GoPay</strong> - 345466 a.n BudayaKita</li>
            </ul>
          </div>

          <div class="mb-3">
            <label for="bukti_pembayaran" class="form-label">Upload Bukti Pembayaran</label>
            <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control" accept="image/*">
          </div>
        </div>

        <div class="mb-3">
          <strong>Total Harga: Rp <?= number_format($harga, 0, ',', '.') ?></strong>
        </div>

        <button type="submit" class="btn btn-success-custom">Selesaikan Checkout</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
      </form>
      <!-- ✅ FORM SELESAI -->
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const metode = document.getElementById('metode_pembayaran');
      const buktiTransfer = document.getElementById('bukti-transfer');

      metode.addEventListener('change', function () {
        buktiTransfer.style.display = (this.value === 'non-tunai') ? 'block' : 'none';
      });
    });
  </script>
</body>
</html>
