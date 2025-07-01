<?php
require_once('db.php');

$query = "SELECT * FROM budayakita";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Data Pelatihan Tradisional</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <div class="container mt-5">
    <h2>Data Pelatihan Tradisional</h2>
    <a href="create_form.php" class="btn btn-danger mb-3">Tambah Data</a>

    <table class="table table-bordered">
      <thead class="table-dark text-center">
        <tr>
          <th>Jasa Kategori</th>
          <th>Jenis Pelatihan</th>
          <th>Lokasi</th>
          <th>Pelatih</th>
          <th>Jadwal</th>
          <th>Harga</th>
          <th>Gambar</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?= htmlspecialchars($row['jasa_kategori']) ?></td>
            <td><?= htmlspecialchars($row['jenis_pelatihan']) ?></td>
            <td><?= htmlspecialchars($row['cari_lokasi']) ?></td>
            <td><?= htmlspecialchars($row['pilih_pelatih']) ?></td>
            <td><?= htmlspecialchars($row['pilih_jadwal']) ?></td>
            <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
            <td><img src="<?= htmlspecialchars($row['image']) ?>" width="100"></td>
            <td>
                <a href="update_form.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Ubah</a>
                <a href="delete.php?id=<?= $row['id'] ?>&image=<?= urlencode($row['image']) ?>" 
                    class="btn btn-danger btn-sm" 
                    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>

            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
