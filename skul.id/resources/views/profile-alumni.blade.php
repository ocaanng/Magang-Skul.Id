<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skul.Id</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* ============ Base ============ */
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: #f8f9fa;
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
      width: 100px;
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

    .sidebar {
      width: 220px;
      background-color: #eff9ff;
      padding: 2rem 1rem;
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

  <!-- Sidebar + Content -->
  <div class="main-wrapper">
    <!-- Sidebar -->
    <div class="sidebar">
      <a class="text-secondary" href="#">Beranda</a>
      <a class="text-secondary" href="#">Sertifikasi</a>
      <a class="text-secondary" href="#">Loker</a>
      <a class="text-secondary" href="#">Pelatihan</a>
      <a class="text-secondary" href="#">Profil</a>
      <a href="#" class="logout">Logout</a>
    </div>

    <div class="content">
  <div class="container py-5 px-4">
    <div class="card rounded-4 p-4" style="background-color: #ffffff;">
      <h3 class="mb-4 fw-bold text-primary text-center">Profil Siswa</h3>
      <div class="row">
        <div class="col-md-4 text-center mb-4">
          <img src="{{ url('img/user.png') }}" alt="Foto Profil" class="rounded-circle border border-3" style="width: 150px; height: 150px; object-fit: cover;">
          <p class="mt-3 fw-semibold text-secondary">Siswa Aktif</p>
        </div>
        <div class="col-md-8">
          <table class="table table-borderless">
            <tr>
              <th class="text-secondary w-50">Nama Lengkap</th>
              <td><strong>Rizky Saputra</strong></td>
            </tr>
            <tr>
              <th class="text-secondary">NISN</th>
              <td>1234567890</td>
            </tr>
            <tr>
              <th class="text-secondary">Kelas</th>
              <td>XII IPA 1</td>
            </tr>
            <tr>
              <th class="text-secondary">Jurusan</th>
              <td>Teknik Komputer dan Jaringan</td>
            </tr>
            <tr>
              <th class="text-secondary">Asal Sekolah</th>
              <td>SMK Negeri 1 Bandung</td>
            </tr>
            <tr>
              <th class="text-secondary">Email</th>
              <td>rizky@example.com</td>
            </tr>
            <tr>
              <th class="text-secondary">No. Telepon</th>
              <td>081234567890</td>
            </tr>
            <tr>
              <th class="text-secondary">Jenis Kelamin</th>
              <td>Laki-laki</td>
            </tr>
            <tr>
              <th class="text-secondary">Tanggal Lahir</th>
              <td>12 Mei 2007</td>
            </tr>
            <tr>
              <th class="text-secondary">Alamat</th>
              <td>Jl. Merdeka No. 10, Bandung</td>
            </tr>
          </table>

          <div class="text-end mt-4">
            <a href="{{ route('edit_profile_alumni') }}" class="btn btn-outline-primary rounded-3 px-4 fw-semibold">Edit Profil</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

