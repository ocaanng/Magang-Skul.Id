<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skul.Id</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    /* ============ Base ============ */
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: #f8f9fa;
      overflow-x: hidden;
    }

    a {
      text-decoration: none;
    }

    .container-fluid {
      padding: 0;
      margin: 0;
    }

    /* ============ Navbar ============ */
    .navbar {
      background-color: #ffffff;
      padding: 1rem 2rem;
      border-bottom: 1px solid #ddd;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar .logo {
      width: 120px;
    }

    .user-info {
      display: flex;
      align-items: center;
    }

    .user-info span {
      margin-right: 1rem;
      font-weight: 600;
    }

    .user-info .profile-picture {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #c04055;
    }

    /* ============ Layout ============ */
    .main-wrapper {
      display: flex;
      height: calc(100vh - 80px);
    }

    .artikel-card {
  display: flex;
  gap: 1rem;
  background-color: #f8f9fa;
  padding: 1rem;
  border-radius: 10px;
  height: 100%;
}

.artikel-card img {
  width: 80px;
  height: 80px;
  border-radius: 8px;
  object-fit: cover;
  flex-shrink: 0;
}

.artikel-card .artikel-content {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
}


    .sidebar {
      width: 220px;
      background-color: #eff9ff;
      padding: 2rem 2rem;
      flex-shrink: 0;
    }

    .sidebar a {
      display: block;
      color: #000;
      padding: 0.75rem 0;
      font-weight: 600;
    }

    .sidebar a:hover {
      color: #d24c62;
    }

    .sidebar .logout {
      margin-top: 2rem;
      color: #d24c62;
    }

    .content {
      flex: 1;
      overflow-y: auto;
      background-color: #fff;
      margin: 0;
    }

    /* ============ Banner ============ */
    .banner {
      background: url('{{ url('img/background.jpg') }}') no-repeat center center;
      padding: 2rem;
      position: relative;
      margin-bottom: 2rem;
      min-height: 350px;
    }

    .banner h2 {
      color: #c04055;
      font-weight: 700;
    }

    .banner p {
      max-width: 500px;
    }

    .banner .illustration {
      position: absolute;
      bottom: 0;
      right: 2rem;
      width: 350px;
    }

    /* ============ Fitur Section ============ */
    #fitur {
      max-width: 1000px;
      margin: 2rem auto;
    }

    .feature-card {
      background-color: #f1f1f1;
      border-radius: 15px;
      padding: 1.25rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: transform 0.2s ease;
    }

    .feature-card:hover {
      transform: scale(1.03);
    }

    .feature-content {
      flex: 1;
    }

    .feature-title {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .feature-card p {
      font-size: 0.95rem;
    }

    /* ============ Custom Feature Colors ============ */
    .sertifikasi {
      background-color: #DAF2FF;
    }

    .sertifikasi .feature-title {
      color: #196BE7;
    }

    .sertifikasi p {
      color: #428EFF;
    }

    .loker {
      background-color: #9BFFB9;
    }

    .loker .feature-title {
      color: #00924E;
    }

    .loker p {
      color: #00C569;
    }

    .pelatihan {
      background-color: #81F082;
    }

    .pelatihan .feature-title {
      color: #007B1F;
    }

    .pelatihan p {
      color: #00A92A;
    }

    .alumni {
      background-color: #F6C371;
    }

    .alumni .feature-title {
      color: #91641B;
    }

    .alumni p {
      color: #B98128;
    }

    .magang {
      background-color: #D9D9D9;
    }

    .magang .feature-title {
      color: #7D7D7D;
    }

    .magang p {
      color: #8E8E8E;
    }

    .footer {
      margin-top: 200px;
    }

    /* ============ Responsive ============ */
    @media (max-width: 768px) {
      .main-wrapper {
        flex-direction: column;
      }

      .sidebar {
        display: none;
      }

      .content {
        padding: 1rem;
      }

      .banner-images {
        flex-direction: column;
        align-items: flex-start;
      }

      .banner-images img {
        width: 100%;
      }

      .banner .illustration {
        display: none;
      }
    }

    @media (max-width: 1000px) {
      .main-wrapper {
        flex-direction: column;
      }

      .sidebar {
        display: none;
      }
      
      #fitur {
        margin-left: 20px;
        margin-right: 20px;
      }
      .banner-images {
        flex-direction: column;
        align-items: flex-start;
      }

      .banner-images img {
        width: 100%;
      }

      .banner .illustration {
        display: none;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <img src="{{ url('img/logo.png') }}" alt="Logo" class="logo" width=""/>
    <div class="user-info">
      <span>Halo User</span>
      <img src="{{ url('img/profile.jpg') }}" alt="Profile" class="profile-picture" />
    </div>
  </div>

  <div class="main-wrapper">
    <div class="sidebar">
      <a class="text-secondary" href="{{ route('beranda_alumni') }}"><i class="bi bi-house-door-fill me-2"></i>Beranda</a>
      <a class="text-secondary" href="{{ route('sertifikasi_alumni') }}"><i class="bi bi-patch-check-fill me-2"></i>Sertifikasi</a>
      <a class="text-secondary" href="{{ route('loker_alumni') }}"><i class="bi bi-briefcase-fill me-2"></i>Loker</a>
      <a class="text-secondary" href="{{ route('pelatihan_alumni') }}"><i class="bi bi-journal-text me-2"></i>Pelatihan</a>
      <a class="text-secondary" href="{{ route('profile_alumni') }}"><i class="bi bi-person-fill me-2"></i>Profil</a>
      <a href="#" class="logout"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
    </div>

    <div class="content">
      <div class="banner">
        <div class="col-lg-7 d-flex flex-column justify-content-center text-lg-start text-center py-5 px-4 ml-5">
          <h2 class="fw-bold">Bangun Masa Depanmu Bersama Skul.Id</h2>
          <p class="text-secondary">Temukan peluang terbaik seperti pelatihan, sertifikasi, dan informasi kampus untuk membantumu meraih cita-cita karier.</p>
        </div>
        <img src="{{ url('img/main-dashboard.png') }}" alt="Ilustrasi" class="illustration" />
      </div>

<!-- E-Book Section -->
<div class="container-fluid my-5 px-5">
  <h5 class="text-danger fw-bold mb-3">
    <i class="bi bi-journal-code me-2"></i>KOLEKSI E-BOOK
  </h5>
  <p class="text-muted mb-4">Temukan e-book terbaik untuk meningkatkan wawasan dan keterampilanmu. Semua bisa diunduh gratis!</p>

  <div class="row g-4">
    <!-- E-Book Card Template -->
    <!-- Repeat as needed -->

    <!-- Book 1 -->
    <div class="col-md-4 col-lg-3">
      <div class="card h-100 border-0 shadow-sm ebook-card hover-shadow">
        <img src="https://my.skul.id/static/media/img_default_artikel_thumb.03a53a33.svg" class="card-img-top" alt="UI/UX">
        <div class="card-body">
          <h6 class="fw-bold">Belajar UI/UX Dasar</h6>
          <p class="text-muted small">Panduan desain antarmuka ramah pengguna untuk pemula.</p>
          <a href="#" class="btn btn-sm btn-danger w-100">
            <i class="bi bi-download me-1"></i> Unduh E-Book
          </a>
        </div>
      </div>
    </div>

    <!-- Book 2 -->
    <div class="col-md-4 col-lg-3">
      <div class="card h-100 border-0 shadow-sm ebook-card hover-shadow">
        <img src="https://my.skul.id/static/media/img_default_artikel_thumb.03a53a33.svg" class="card-img-top" alt="Python">
        <div class="card-body">
          <h6 class="fw-bold">Fundamental Python</h6>
          <p class="text-muted small">Dasar-dasar coding Python dengan studi kasus praktis.</p>
          <a href="#" class="btn btn-sm btn-danger w-100">
            <i class="bi bi-download me-1"></i> Unduh E-Book
          </a>
        </div>
      </div>
    </div>

    <!-- Book 3 -->
    <div class="col-md-4 col-lg-3">
      <div class="card h-100 border-0 shadow-sm ebook-card hover-shadow">
        <img src="https://my.skul.id/static/media/img_default_artikel_thumb.03a53a33.svg" class="card-img-top" alt="Karier">
        <div class="card-body">
          <h6 class="fw-bold">Kiat Sukses Karier</h6>
          <p class="text-muted small">Langkah membangun karier profesional dari nol.</p>
          <a href="#" class="btn btn-sm btn-danger w-100">
            <i class="bi bi-download me-1"></i> Unduh E-Book
          </a>
        </div>
      </div>
    </div>

    <!-- Book 4 -->
    <div class="col-md-4 col-lg-3">
      <div class="card h-100 border-0 shadow-sm ebook-card hover-shadow">
        <img src="https://my.skul.id/static/media/img_default_artikel_thumb.03a53a33.svg" class="card-img-top" alt="Public Speaking">
        <div class="card-body">
          <h6 class="fw-bold">Public Speaking Mastery</h6>
          <p class="text-muted small">Tingkatkan kemampuan komunikasi dan percaya diri.</p>
          <a href="#" class="btn btn-sm btn-danger w-100">
            <i class="bi bi-download me-1"></i> Unduh E-Book
          </a>
        </div>
      </div>
    </div>

    <!-- Book 5 -->
    <div class="col-md-4 col-lg-3">
      <div class="card h-100 border-0 shadow-sm ebook-card hover-shadow">
        <img src="https://my.skul.id/static/media/img_default_artikel_thumb.03a53a33.svg" class="card-img-top" alt="Marketing">
        <div class="card-body">
          <h6 class="fw-bold">Digital Marketing 101</h6>
          <p class="text-muted small">Strategi pemasaran digital untuk pemula dan UMKM.</p>
          <a href="#" class="btn btn-sm btn-danger w-100">
            <i class="bi bi-download me-1"></i> Unduh E-Book
          </a>
        </div>
      </div>
    </div>

    <!-- Book 6 -->
    <div class="col-md-4 col-lg-3">
      <div class="card h-100 border-0 shadow-sm ebook-card hover-shadow">
        <img src="https://my.skul.id/static/media/img_default_artikel_thumb.03a53a33.svg" class="card-img-top" alt="Resume">
        <div class="card-body">
          <h6 class="fw-bold">CV & Resume Profesional</h6>
          <p class="text-muted small">Panduan membuat CV menarik untuk dunia kerja.</p>
          <a href="#" class="btn btn-sm btn-danger w-100">
            <i class="bi bi-download me-1"></i> Unduh E-Book
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

    <footer class="footer bg-light py-4">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-md-5 mb-3">
        <h5 class="text-primary fw-bold">Skul.Id</h5>
        <p class="text-muted mb-0">Skul.Id adalah platform yang menghubungkan alumni dengan sekolah, dunia industri, dan peluang karier.</p>
      </div>
      <div class="col-md-3 ms-auto text-start mb-3">
        <h5 class="fw-bold">Kontak</h5>
        <p class="mb-0 text-muted">Email: info@skul.id</p>
        <p class="mb-0 text-muted">Telp/WA: +62 852-2584-5253</p>
      </div>
    </div>
    <div class="text-center text-muted small mt-4">
      © 2025 Skul.Id. All rights reserved.
    </div>
  </div>
</footer>


    </div>
  </div>

</body>
</html>