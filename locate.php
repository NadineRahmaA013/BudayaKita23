<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Lokasi BudayaKita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #fdf6e3; /* Cream */
      color: #4b2e1e;
      font-family: 'Segoe UI', sans-serif;
    }
    .location-image {
      max-height: 300px;
      width: 100%;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(121, 72, 32, 0.2); /* Coklat bayangan */
    }
    .map-responsive {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .map-responsive iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }
    .btn-outline-primary {
      border-color: #2e7d32;
      color: #2e7d32;
    }
    .btn-outline-primary:hover {
      background-color: #2e7d32;
      color: white;
    }
    .section-box {
      background-color: #f5e6da; /* Coklat muda */
      padding: 30px;
      border-radius: 12px;
      margin-bottom: 40px;
    }
    h2, h4, h5 {
      color: #794820; /* Coklat tua */
    }
  </style>
</head>
<body>

<div class="container my-5">
  <h2 class="text-center mb-4"><i class="bi bi-geo-alt-fill"></i> Lokasi BudayaKita</h2>

  <div class="section-box">
    <div class="row mb-4">
      <div class="col-md-6">
        <img src="assets/lokasi.jpg" alt="Foto Tempat BudayaKita" class="location-image">
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-center">
        <h4 class="fw-bold">Alamat Kami</h4>
        <p class="lead">BudayaKita berlokasi strategis di tengah Kota Surabaya, tepatnya di:</p>
        <p class="mb-1"><i class="bi bi-geo-alt-fill text-danger"></i> Jl. Ngagel Jaya Selatan, Surabaya</p>
        <p><i class="bi bi-clock-fill text-warning"></i> Buka setiap hari: 16.00-20.00 WIB</p>
        <p>Kami mudah dijangkau dari pusat kota, terminal, dan stasiun. Lokasi nyaman, tenang, dan cocok untuk pelatihan budaya secara langsung.</p>
      </div>
    </div>
  </div>

  <div class="section-box">
    <h5 class="mb-3">Lihat Kami di Google Maps:</h5>
    <div class="map-responsive mb-3">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.100303594203!2d112.7407321141159!3d-7.206864294783997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb904db18b07%3A0x466b76c1f24d90c1!2sJl.%20Ngagel%20Jaya%20Sel.%2C%20Surabaya!5e0!3m2!1sid!2sid!4v1700000000000" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

  <div class="text-center">
    <a href="index.php" class="btn btn-outline-primary"><i class="bi bi-arrow-left-circle"></i> Kembali ke Beranda</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
