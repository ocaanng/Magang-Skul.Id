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

    .search-bar {
      margin-bottom: 2rem;
    }

    .card-jurusan {
      background: #fff;
      border-radius: 15px;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      transition: transform 0.2s ease;
      height: 100%;
    }

    .card-jurusan:hover {
      transform: scale(1.03);
    }

    .card-jurusan img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      margin-bottom: 10px;
    }

    .card-jurusan h6 {
      font-size: 14px;
      font-weight: 600;
    }

    .right-section {
      background-color: white;
      border-radius: 15px;
      padding: 1.5rem;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .right-section h6 {
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .sertif-item {
      padding: 10px;
      margin-bottom: 10px;
      border-bottom: 1px solid #eee;
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

    .filter-box {
      background-color: #ffffff;
      padding: 1rem 1.2rem;
      border-radius: 12px;
      border-left: 4px solid #0d6efd;
      box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.04);
    }

    .btn-filter {
      border-radius: 50px;
      padding: 0.4rem 0.75rem;
      font-size: 0.9rem;
      margin-bottom: 0.4rem;
      width: auto;
      display: inline-block;
    }

    .job-card {
      background-color: #fff;
      border-radius: 15px;
      padding: 1.5rem;
      min-height: 220px;
      transition: 0.2s ease-in-out;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
      position: relative;
    }

    .job-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 0 18px rgba(0, 0, 0, 0.08);
    }

    .job-title {
      font-size: 1.2rem;
      font-weight: 700;
      color: black;
    }

    .badge-custom {
      background-color: #e3f2fd;
      color: #0d6efd;
      font-weight: 500;
    }

    .company-name {
      font-size: 1rem;
      font-weight: 400;
      color: #6c757d;
      margin-top: 0.5rem;
    }

    .btn-filter.active,
    .btn-outline-primary:hover,
    .btn-outline-secondary:hover,
    .btn-outline-info:hover,
    .btn-outline-success:hover,
    .btn-outline-warning:hover,
    .btn-outline-dark:hover {
      color: #fff;
    }

    @media (max-width: 768px) {
      .job-card {
        min-height: auto;
      }
    }

    .btn-outline-primary {
      color: #fff;
      background-color: #0d6efd;
      border-color: #0d6efd;
      transition: all 0.3s ease;
    }

    .btn-outline-primary:hover {
      color: #0d6efd;
      background-color: #fff;
      border-color: #0d6efd;
    }

  </style>

@php
  $filteredJobs = [
    ['title' => 'Web Developer', 'location' => 'Indonesia', 'type' => 'Full Time', 'mode' => 'Remote', 'company' => 'Tech Innovators'],
    ['title' => 'Data Analyst', 'location' => 'USA', 'type' => 'Part Time', 'mode' => 'Onsite', 'company' => 'Data Corp'],
    ['title' => 'UI/UX Designer', 'location' => 'Germany', 'type' => 'Project', 'mode' => 'Remote', 'company' => 'Design Studio'],
    ['title' => 'Backend Engineer', 'location' => 'Indonesia', 'type' => 'Project', 'mode' => 'Onsite', 'company' => 'Code Masters'],
    ['title' => 'Mobile App Developer', 'location' => 'Singapore', 'type' => 'Full Time', 'mode' => 'Remote', 'company' => 'App Solutions'],
    ['title' => 'DevOps Engineer', 'location' => 'Netherlands', 'type' => 'Full Time', 'mode' => 'Onsite', 'company' => 'DevOps Experts']
  ];
  @endphp

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
      <a class="text-secondary" href="#"><i class="bi bi-house-door-fill me-2"></i>Beranda</a>
      <a class="text-secondary" href="#"><i class="bi bi-patch-check-fill me-2"></i>Sertifikasi</a>
      <a class="text-secondary" href="#"><i class="bi bi-briefcase-fill me-2"></i>Loker</a>
      <a class="text-secondary" href="#"><i class="bi bi-journal-text me-2"></i>Pelatihan</a>
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

      <div class="container my-5">
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="filter-box">
          <form method="GET">
            <label class="fw-semibold">Lokasi:</label><br/><br/>
            <button type="submit" name="location" value="" class="btn btn-outline-secondary btn-filter">Semua</button>
            <button type="submit" name="location" value="Indonesia" class="btn btn-outline-secondary btn-filter">Dalam Negeri</button>
            <button type="submit" name="location" value="Luar" class="btn btn-outline-secondary btn-filter">Luar Negeri</button>
            <hr>
            <label class="fw-semibold">Tipe:</label><br/><br/>
            <button type="submit" name="type" value="Full Time" class="btn btn-outline-secondary btn-filter">Full Time</button>
            <button type="submit" name="type" value="Part Time" class="btn btn-outline-secondary btn-filter">Part Time</button>
            <button type="submit" name="type" value="Project" class="btn btn-outline-secondary btn-filter">Project</button>
          </form>
        </div>
      </div>

      <div class="col-md-8">
        <div class="row">
          @forelse($filteredJobs as $job)
          <div class="col-md-6 mb-4">
            <div class="job-card">
              <h5 class="job-title">{{ $job['title'] }}</h5>
              <p class="company-name">{{ $job['company'] }}</p>
              <div class="mb-2">
                <span class="badge badge-custom me-1">
                  <i class="bi bi-geo-alt-fill"></i> {{ $job['location'] }}
                </span>
                <span class="badge badge-custom me-1">{{ $job['type'] }}</span>
                <span class="badge badge-custom">{{ $job['mode'] }}</span>
              </div>
              <a href="#" class="btn btn-sm btn-outline-primary mt-3 w-100">Lamar Sekarang</a>
            </div>
          </div>
          @empty
          <div class="col-12 text-center">
            <div class="alert alert-warning">⚠ Tidak ada lowongan yang sesuai filter.</div>
          </div>
          @endforelse
        </div>
      </div>
    </div>
  </div>

</body>
</html>