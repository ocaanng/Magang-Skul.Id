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

    .main-content {
      padding: 3rem 10%;
    }

    .right-section {
      background-color: white;
      border-radius: 15px;
      padding: 1.5rem;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .training-item {
      padding: 10px;
      margin-bottom: 10px;
      border-bottom: 1px solid #eee;
    }

    .training-container {
      background-color: white;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      margin-top: 1.5rem;
    }

    .training-list .item {
      padding: 1rem;
      border-bottom: 1px solid #eee;
    }

    .training-list .item:last-child {
      border-bottom: none;
    }

    .training-list .item h6 {
      font-weight: 600;
      font-size: 15px;
    }

    .training-list .item p {
      font-size: 14px;
      margin: 0;
    }

    #konten {
      background-color: #fff;
      border-radius: 20px;
      padding: 2rem;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
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

    .card {
      border-radius: 1rem;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
    }
    thead th {
      background-color: #0d6efd;
      color: white;
      vertical-align: middle;
    }
    tbody tr:hover {
      background-color: #f0f8ff;
    }
    table {
      white-space: nowrap;
    }
    h2 {
      font-weight: bold;
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
      <div class="container py-5">
  <div class="card p-4">
    <h2 class="mb-4 text-center">Data Pengguna</h2>
    <div class="table-responsive">
      <table class="table table-bordered align-middle table-striped">
        <thead class="text-center">
          <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Nama Lengkap</th>
            <th>NISN</th>
            <th>Kelas</th>
            <th>Tahun Kelulusan</th>
            <th>Jurusan</th>
            <th>Asal Sekolah</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>NPSN</th>
            <th>Provinsi</th>
            <th>Kota</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Status Saat Ini</th>
            <th>Bidang Pekerjaan</th>
            <th>Sertifikasi Terakhir</th>
            <th>Kesesuaian Sertifikasi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $users = [
            [
              'id' => 1,
              'user_id' => 'USR001',
              'nama_lengkap' => 'Budi Santoso',
              'nisn' => '1234567890',
              'kelas' => 'XII IPA 1',
              'tahun_kelulusan' => '2023',
              'jurusan' => 'IPA',
              'asal_sekolah' => 'SMA Negeri 1 Jakarta',
              'jenis_kelamin' => 'Laki-laki',
              'tanggal_lahir' => '2005-03-12',
              'npsn' => '20109283',
              'provinsi' => 'DKI Jakarta',
              'kota' => 'Jakarta Pusat',
              'alamat' => 'Jl. Merdeka No.10',
              'status' => 'Lulus',
              'status_saat_ini' => 'Kuliah',
              'bidang_pekerjaan' => '-',
              'sertifikasi_terakhir' => 'Belum Ada',
              'kesesuaian_sertifikasi' => 'Tidak Sesuai'
            ],
            [
              'id' => 2,
              'user_id' => 'USR002',
              'nama_lengkap' => 'Siti Aminah',
              'nisn' => '0987654321',
              'kelas' => 'XII IPS 2',
              'tahun_kelulusan' => '2022',
              'jurusan' => 'IPS',
              'asal_sekolah' => 'SMA Negeri 2 Bandung',
              'jenis_kelamin' => 'Perempuan',
              'tanggal_lahir' => '2004-08-20',
              'npsn' => '20293920',
              'provinsi' => 'Jawa Barat',
              'kota' => 'Bandung',
              'alamat' => 'Jl. Cihampelas No.88',
              'status' => 'Lulus',
              'status_saat_ini' => 'Bekerja',
              'bidang_pekerjaan' => 'Marketing',
              'sertifikasi_terakhir' => 'Digital Marketing Dasar',
              'kesesuaian_sertifikasi' => 'Sesuai'
            ]
          ];
          @endphp

          @foreach($users as $user)
          <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['user_id'] }}</td>
            <td>{{ $user['nama_lengkap'] }}</td>
            <td>{{ $user['nisn'] }}</td>
            <td>{{ $user['kelas'] }}</td>
            <td>{{ $user['tahun_kelulusan'] }}</td>
            <td>{{ $user['jurusan'] }}</td>
            <td>{{ $user['asal_sekolah'] }}</td>
            <td>{{ $user['jenis_kelamin'] }}</td>
            <td>{{ $user['tanggal_lahir'] }}</td>
            <td>{{ $user['npsn'] }}</td>
            <td>{{ $user['provinsi'] }}</td>
            <td>{{ $user['kota'] }}</td>
            <td>{{ $user['alamat'] }}</td>
            <td>{{ $user['status'] }}</td>
            <td>{{ $user['status_saat_ini'] }}</td>
            <td>{{ $user['bidang_pekerjaan'] }}</td>
            <td>{{ $user['sertifikasi_terakhir'] }}</td>
            <td>{{ $user['kesesuaian_sertifikasi'] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>