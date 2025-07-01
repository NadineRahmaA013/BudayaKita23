<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BudayaKita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      color: #2e2e2e;
    }

    .navbar {
      background-color: #794820;
    }

    .navbar-brand, .nav-link {
      color: #fefae0 !important;
    }

    .hero-section {
      position: relative;
      height: 100vh;
      background-image: url('assets/home.jpg');
      background-size: cover;
      background-position: center;
      color: #fdf7ef;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(121, 72, 32, 0.6);
    }

    .hero-content {
      position: absolute;
      top: 50%;
      left: 5%;
      transform: translateY(-50%);
      max-width: 600px;
    }

    .btn-custom {
      background-color: #2e4600;
      color: #fdf7ef;
      font-weight: bold;
      border: none;
    }

    .btn-custom:hover {
      background-color: #203700;
    }

    section {
      padding: 4rem 2rem;
    }

    .section-tentang {
      background-color: #fdf7ef;
    }

    .section-keunggulan {
      background-color: #f2e1cc;
    }

    .section-pelatihan {
      background-color: #f7eee2;
    }

    .section-kontak {
      background-color: #eee0d0;
    }

    .card {
      background-color: #fffaf3;
      border: 1px solid #e2d5c2;
    }

    .card-title {
      color: #2e4600;
      font-weight: bold;
    }

    footer {
      background-color: #794820;
      color: #fefae0;
    }

    footer a {
      color: #f5d9a4;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    .full-width-img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .section-title {
      text-align: center;
      font-weight: bold;
      margin-bottom: 2rem;
      color: #2e2e2e;
    }
  </style>
</head>
<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid px-4">
    <a class="navbar-brand d-flex align-items-center gap-2" href="#">
  <img src="assets/logo.jpg" alt="Logo BudayaKita" width="40" height="40" class="rounded-circle shadow-sm">
  <span class="fw-bold text-light">BudayaKita</span>
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon text-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#jenis">Pelatihan</a></li>
        <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
        <li class="nav-item"><a class="nav-link" href="locate.php">Lokasi</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<div class="hero-section">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <span class="badge bg-success mb-2">BudayaKita</span>
    <h1 class="fw-bold">Solusi Terpadu untuk Pelatihan dan Pelestarian Budaya Indonesia</h1>
   <p>Ingin belajar warisan budaya dan kesenian kita, tapi engan cara yang seru dan kekinian? BudayaKita hadir dengan pelatihan budaya interaktif mulai dari tari tradisional, musik daerah, hingga pelatihan kerajinan .</p>
    <a href="#jenis" class="btn btn-custom">Lihat Selengkapnya</a>
  </div>
</div>

<!-- TENTANG -->
<section id="tentang" class="section-tentang">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="assets/tentang kami.jpg" class="full-width-img" alt="Tentang Kami" />
      </div>
      <div class="col-md-6">
        <h3 class="fw-bold mb-3">Tentang BudayaKita</h3>
        <p class="lead">
          <strong>BudayaKita</strong>  adalah bisnis berbasis jasa yang berfokus pada pelatihan seni dan keterampilan tradisional Indonesia secara terpadu dan modern
        </p>
        <p class="lead">
          BudayaKita menyediakan kelas pelatihan musik tradisional, tari daerah, serta kerajinan khas Indonesia. Tidak hanya sebagai tempat belajar, Budayakita juga menjadi ruang untuk melestarikan warisan budaya,mengembangkan bakat muda, dan memberdayakan para pelaku seni tradisional melalui sistem.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- KEUNGGULAN -->
<section class="section-keunggulan">
  <div class="container-fluid">
    <h2 class="section-title">Mengapa Memilih BudayaKita?</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0" style="background-color: #fff6e6;">
          <div class="card-body text-center">
            <i class="bi bi-journal-text display-4 text-success mb-3"></i>
            <h5 class="fw-bold">Program Belajar Terstruktur & Inklusif</h5>
            <p class="mb-0">Dirancang sistematis, cocok untuk semua kalangan, bahkan pemula yang ingin mengenal budaya lokal.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0" style="background-color: #fff6e6;">
          <div class="card-body text-center">
            <i class="bi bi-geo-alt display-4 text-success mb-3"></i>
            <h5 class="fw-bold">Akses Fleksibel & Lokasi Strategis</h5>
            <p class="mb-0">Bisa belajar online dari mana saja atau langsung datang ke lokasi kami di Ngagel Jaya, Surabaya.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0" style="background-color: #fff6e6;">
          <div class="card-body text-center">
            <i class="bi bi-people-fill display-4 text-success mb-3"></i>
            <h5 class="fw-bold">Pemberdayaan Seniman & Pengrajin</h5>
            <p class="mb-0">Kami melibatkan seniman asli sebagai pengajar untuk pelestarian dan pemberdayaan ekonomi lokal.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- JENIS PELATIHAN -->
<section id="jenis" class="section-pelatihan">
  <div class="container-fluid">
    <h2 class="section-title">Jenis Pelatihan</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100">
          <img src="jenis/musik.jpg" class="card-img-top" alt="Musik" />
          <div class="card-body">
            <h5 class="card-title">Musik Tradisional</h5>
            <p>Pelatih: Ki Nartosabdo, R.M.T. Wreksodiningrat, Nyong Franco</p>
            <a href="detail.php?kategori=musik" class="btn btn-success">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <img src="jenis/tari.jpg" class="card-img-top" alt="Tari" />
          <div class="card-body">
            <h5 class="card-title">Tari Tradisional</h5>
            <p>Pelatih: Theodora Retno Maruti, Bulantrisna Djelantik, Nyoman Arjasa</p>
            <a href="detail.php?kategori=tarian" class="btn btn-success">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <img src="jenis/kerajinan.jpg" class="card-img-top" alt="Kerajinan" />
          <div class="card-body">
            <h5 class="card-title">Kerajinan Tradisional</h5>
            <p>Pelatih: I Nyoman Nuarta, Niniek Elia, Kasom Tjokrosaputro</p>
            <a href="detail.php?kategori=kerajinan" class="btn btn-success">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KONTAK -->
<section id="kontak" class="section-kontak">
  <div class="container-fluid text-center">
    <h2 class="section-title">Kontak & Konsultasi</h2>
    <p class="lead">Hubungi kami via WhatsApp untuk tanya jadwal atau konsultasi pelatihan gratis.</p>
    <a href="https://wa.me/6285745004306" target="_blank" class="btn btn-success btn-lg">
      <i class="bi bi-whatsapp"></i> Hubungi Kami
    </a>
  </div>
</section>

<!-- FOOTER -->
<footer class="text-light text-center py-4">
  <div class="container">
    <p>&copy; <?= date('Y'); ?> BudayaKita. Semua Hak Dilindungi.</p>
    <p>
      <a href="locate.php"><i class="bi bi-geo-alt-fill"></i> Lokasi Kami</a> |
      <a href="#kontak"><i class="bi bi-whatsapp"></i> Kontak</a>
    </p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
