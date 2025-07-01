<?php
$nama_pelatihan = $_GET['nama'] ?? '';
$harga = $_GET['harga'] ?? 0;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Checkout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">Formulir Pendaftaran</h2>
    
    <form action="proses_checkout.php" method="post" enctype="multipart/form-data">
      <!-- Hidden untuk mengirim data pelatihan -->
      <input type="hidden" name="nama_pelatihan" value="<?= htmlspecialchars($nama_pelatihan) ?>">
      <input type="hidden" name="harga" value="<?= htmlspecialchars($harga) ?>">

      <!-- Nama lengkap -->
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>

      <!-- Telepon -->
      <div class="mb-3">
        <label for="telepon" class="form-label">Telepon</label>
        <input type="text" class="form-control" name="telepon" id="telepon" required>
      </div>

      <!-- Metode Pembayaran -->
      <div class="mb-3">
        <label for="metode" class="form-label">Metode Pembayaran</label>
        <select name="metode" id="metode" class="form-select" required>
          <option value="">Pilih Metode</option>
          <option value="tunai">Tunai (Bayar di tempat)</option>
          <option value="non-tunai">Non-Tunai (Transfer)</option>
        </select>
      </div>

      <!-- Informasi rekening dan bukti transfer, hanya muncul jika Non-Tunai -->
      <div id="bukti-transfer" style="display: none;">
        <div class="mb-3">
          <label class="form-label">Transfer ke salah satu rekening berikut:</label>
          <ul>
            <li>BCA - 089999 a.n BudayaKita</li>
            <li>Mandiri - 872455 a.n BudayaKita</li>
            <li>GoPay - 345466 a.n BudayaKita</li>
          </ul>
        </div>

        <div class="mb-3">
          <label for="bukti" class="form-label">Upload Bukti Pembayaran</label>
          <input type="file" class="form-control" name="bukti" id="bukti" accept="image/*">
        </div>
      </div>

      <!-- Total Harga -->
      <div class="mb-3">
        <strong>Total Harga: Rp <?= number_format($harga, 0, ',', '.') ?></strong>
      </div>

      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
  </div>

  <!-- Script untuk menampilkan bukti transfer hanya jika metode = non-tunai -->
  <script>
    const metode = document.getElementById('metode');
    const buktiTransfer = document.getElementById('bukti-transfer');

    metode.addEventListener('change', function() {
      if (this.value === 'non-tunai') {
        buktiTransfer.style.display = 'block';
      } else {
        buktiTransfer.style.display = 'none';
      }
    });

    // Supaya kalau reload dan sudah pilih non-tunai tetap muncul
    window.addEventListener('DOMContentLoaded', function () {
      if (metode.value === 'non-tunai') {
        buktiTransfer.style.display = 'block';
      }
    });
  </script>
</body>
</html>
