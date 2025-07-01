<?php
$nama  = $_GET['nama'] ?? '';
$harga = $_GET['harga'] ?? 0;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Checkout - <?= htmlspecialchars($nama) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <script>
    function toggleBukti() {
      const metode = document.getElementById('metode').value;
      const buktiDiv = document.getElementById('bukti-transfer');
      buktiDiv.style.display = (metode === 'non-tunai') ? 'block' : 'none';
    }
  </script>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">Form Checkout: <?= htmlspecialchars($nama) ?></h2>

    <form action="process_checkout.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="nama_pelatihan" value="<?= htmlspecialchars($nama) ?>">
      <input type="hidden" name="harga" value="<?= $harga ?>">

      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="telepon" class="form-label">No Telepon</label>
        <input type="text" name="telepon" id="telepon" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="metode" class="form-label">Metode Pembayaran</label>
        <select name="metode" id="metode" class="form-select" required onchange="toggleBukti()">
          <option value="">Pilih Metode</option>
          <option value="tunai">Tunai (Bayar di tempat)</option>
          <option value="non-tunai">Non-Tunai (Transfer)</option>
        </select>
      </div>

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
          <input type="file" name="bukti" id="bukti" class="form-control" accept="image/*">
        </div>
      </div>

      <div class="mb-3">
        <strong>Total Harga: Rp <?= number_format($harga, 0, ',', '.') ?></strong>
      </div>

      <button type="submit" class="btn btn-primary">Selesaikan Checkout</button>
      <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</body>
</html>
