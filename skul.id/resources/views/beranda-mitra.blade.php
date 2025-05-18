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
    /* ===== Base Styling ===== */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      overflow-x: hidden;
    }

    a {
      text-decoration: none;
    }

    .container-fluid {
      padding: 0;
      margin: 0;
    }

    /* ===== Navbar ===== */
    .navbar {
      background-color: #ffffff;
      padding: 1rem 2rem;
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

    /* ===== Layout ===== */
    .main-wrapper {
      display: flex;
      height: auto;
    }

    .sidebar {
      width: 220px;
      background-color: #eff9ff;
      padding: 2rem;
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
      background-color: #fff;
      padding-bottom: 3rem;
    }

    /* ===== Banner ===== */
    .banner {
      background: url('{{ url('img/background.jpg') }}') no-repeat center center;
      background-size: cover;
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

    /* ===== Fitur Section ===== */
    #fitur {
      max-width: 1000px;
      margin: 2rem auto;
    }

    .fitur-box {
      border-radius: 15px;
      padding: 1.25rem;
      min-height: 160px;
      transition: transform 0.2s ease;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .fitur-box:hover {
      transform: scale(1.03);
    }

    .fitur-title {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .fitur-box p {
      font-size: 0.95rem;
      font-weight: 400;
    }

    a.card-role {
      text-decoration: none;
    }

    /* ===== Custom Colors ===== */
    .sertifikasi {
      background-color: #DAF2FF;
    }

    .sertifikasi .fitur-title {
      color: #196BE7;
    }

    .sertifikasi p {
      color: #428EFF;
    }

    .loker {
      background-color: #9BFFB9;
    }

    .loker .fitur-title {
      color: #00924E;
    }

    .loker p {
      color: #00C569;
    }

    .pelatihan {
      background-color: #81F082;
    }

    .pelatihan .fitur-title {
      color: #007B1F;
    }

    .pelatihan p {
      color: #00A92A;
    }

    /* ===== Responsive ===== */
    @media (max-width: 768px) {
      .main-wrapper {
        flex-direction: column;
      }

      .sidebar {
        display: none;
      }

      .banner .illustration {
        display: none;
      }

      #fitur {
        margin-left: 20px;
        margin-right: 20px;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <img src="{{ url('img/logo.png') }}" alt="Logo" class="logo" />
    <div class="user-info">
      <span>Halo User</span>
      <img src="{{ url('img/profile.jpg') }}" alt="Profile" class="profile-picture" />
    </div>
  </div>

  <!-- Main Layout -->
  <div class="main-wrapper">
    <!-- Sidebar -->
    <div class="sidebar">
      <a class="text-secondary" href="#"><i class="bi bi-house-door-fill me-2"></i>Beranda</a>
      <a class="text-secondary" href="#"><i class="bi bi-patch-check-fill me-2"></i>Sertifikasi</a>
      <a class="text-secondary" href="#"><i class="bi bi-briefcase-fill me-2"></i>Loker</a>
      <a class="text-secondary" href="#"><i class="bi bi-journal-text me-2"></i>Pelatihan</a>
      <a class="text-secondary" href="{{ route('profile_alumni') }}"><i class="bi bi-person-fill me-2"></i>Profil</a>
      <a class="text-secondary" href="{{ route('data_user_mitra') }}"><i class="bi bi-people-fill me-2"></i>Data User</a>
      <a href="#" class="logout"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
    </div>

    <!-- Content -->
    <div class="content">
      <!-- Banner -->
      <div class="banner">
        <div class="col-lg-7 d-flex flex-column justify-content-center text-lg-start text-center py-5 px-4 ml-5">
          <h2 class="fw-bold">Bangun Masa Depanmu Bersama Skul.Id</h2>
          <p class="text-secondary">Temukan peluang terbaik seperti pelatihan, sertifikasi, dan informasi kampus untuk membantumu meraih cita-cita karier.</p>
        </div>
        <img src="{{ url('img/main-dashboard.png') }}" alt="Ilustrasi" class="illustration" />
      </div>

      <!-- Fitur Utama -->
      <div class="container">
        <div id="fitur">
          <h5 class="mb-4 text-primary">Fitur Utama :</h5>
          <div class="row gx-4 gy-4 mb-4">
            <div class="col-md-4">
              <a href="{{ route('sertifikasi_mitra') }}" class="card-role">
                <div class="fitur-box sertifikasi h-100">
                  <div class="fitur-title">Sertifikasi</div>
                  <p>Meningkatkan anda mencantumkan yang anda butuhkan</p>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="{{ route('loker_mitra') }}" class="card-role">
                <div class="fitur-box loker h-100">
                  <div class="fitur-title">Loker</div>
                  <p>Temukan pekerjaan yang anda impikan</p>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="{{ route('pelatihan_mitra') }}" class="card-role">
                <div class="fitur-box pelatihan h-100">
                  <div class="fitur-title">Pelatihan</div>
                  <p>Ikuti pelatihan untuk meningkatkan skill anda</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
