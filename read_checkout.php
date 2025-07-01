<?php
$koneksi = new mysqli("localhost", "root", "", "kitabudaya");
$result = $koneksi->query("SELECT * FROM budayakita ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Data Pendaftaran Pelatihan</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Metode Pembayaran</th>
                <th>Bukti Pembayaran</th>


            </tr>
        </thead>
        <tbody>
        <?php $no = 1; while($row = $result->fetch_assoc()): ?>
            <tr>
                
                <td><?= htmlspecialchars($row['Nama']) ?></td>
                <td><?= htmlspecialchars($row['Email']) ?></td>
                <td><?= htmlspecialchars($row['Nomor_Telpon']) ?></td>
                <td><?= htmlspecialchars($row['Metode_Pembayaran']) ?></td>
                <td>Rp <?= number_format($row['Bukti_Pembayaran'], 0, ',', '.') ?></td>
                <td>

                    <?php if ($row['Bukti_Pembayaran']): ?>
                        <a href="<?= $row['Bukti_Pembayaran'] ?>" target="_blank">Lihat</a>
                    <?php else: ?>
                        -
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
