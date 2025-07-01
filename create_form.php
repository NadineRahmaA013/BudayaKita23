<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Tambah Data Budaya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Form Tambah Data Pelatihan Tradisional</h2>
    
    <form action="create.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="tentang_kami" class="form-label">Tentang Kami</label>
        <input type="text" name="tentang_kami" id="tentang_kami" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="jasa_kategori" class="form-label">Jasa Kategori</label>
        <select class="form-select" name="jasa_kategori" id="jasa_kategori" required>
          <option value="" disabled selected>Pilih kategori</option>
          <option value="Pelatihan Musik Tradisional">Pelatihan Musik Tradisional</option>
          <option value="Pelatihan Tarian Tradisional">Pelatihan Tarian Tradisional</option>
          <option value="Pelatihan Kerajinan Tradisional">Pelatihan Kerajinan Tradisional</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="jenis_pelatihan" class="form-label">Jenis Pelatihan</label>
        <input type="text" name="jenis_pelatihan" id="jenis_pelatihan" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="cari_lokasi" class="form-label">Lokasi</label>
        <input type="text" name="cari_lokasi" id="cari_lokasi" class="form-control" value="Jl. Ngagel Jaya Timur 150" required>
      </div>

      <div class="mb-3">
        <label for="pilih_pelatih" class="form-label">Pelatih</label>
        <input type="text" name="pilih_pelatih" id="pilih_pelatih" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="pilih_jadwal" class="form-label">Jadwal</label>
        <select class="form-select" name="pilih_jadwal" id="pilih_jadwal" required>
          <option value="" disabled selected>Pilih jadwal</option>
          <option value="16.00-17.00">16.00–17.00</option>
          <option value="17.00-18.00">17.00–18.00</option>
          <option value="18.00-19.00">18.00–19.00</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" name="harga" id="harga" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Upload Gambar</label>
        <input type="file" name="image" id="image" class="form-control" required>
      </div>

      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="read.php" class="btn btn-secondary">Kembali</a>
      </div>
    </form>
  </div>
</body>
</html>
