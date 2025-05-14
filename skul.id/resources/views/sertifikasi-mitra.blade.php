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

    .sertif-item {
      padding: 10px;
      margin-bottom: 10px;
      border-bottom: 1px solid #eee;
    }

    .sertif-container {
      background-color: white;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      margin-top: 1.5rem;
    }

    .sertif-list .item {
      padding: 1rem;
      border-bottom: 1px solid #eee;
    }

    .sertif-list .item:last-child {
      border-bottom: none;
    }

    .sertif-list .item h6 {
      font-weight: 600;
      font-size: 15px;
    }

    .sertif-list .item p {
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

      <div class="main-content">
  <div class="row">
    <!-- Konten Utama -->
    <div class="col-lg-9">
      <div id="konten">
        <h4 class="fw-bold mb-3">Info Sertifikasi</h4>
        <p>
          Sertifikasi merupakan salah satu bukti kompetensi yang penting dimiliki alumni SMK untuk meningkatkan daya saing di dunia kerja.
          Program ini disediakan oleh Mitra melalui platform Skul.id dan dapat mencakup berbagai bidang keahlian.
        </p>
        <p>
          Mitra dapat menambahkan sertifikasi baru yang akan langsung tampil di halaman alumni agar bisa diakses dan diikuti.
          Alumni diharapkan aktif mengecek dan mengikuti sertifikasi sesuai bidang keahlian masing-masing.
        </p>

        <!-- Tombol Tambah Sertifikasi -->
        <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#sertifikasiModal">+ Tambah Sertifikasi</button>

        @php
          $mitraIdLogin = 1;

          $sertifikasiList = [
            ['judul' => 'Sertifikasi Microsoft Excel', 'deskripsi' => 'Pelatihan Excel tingkat lanjut.', 'mitra_id' => 1],
            ['judul' => 'Sertifikasi UI/UX Design', 'deskripsi' => 'Dasar desain UI dan UX.', 'mitra_id' => 2],
            ['judul' => 'Sertifikasi Jaringan Dasar', 'deskripsi' => 'Topologi dan perangkat jaringan.', 'mitra_id' => 3],
            ['judul' => 'Sertifikasi Teknisi AC', 'deskripsi' => 'Pendingin dan tata udara.', 'mitra_id' => 1],
            ['judul' => 'Sertifikasi Digital Marketing', 'deskripsi' => 'Strategi pemasaran online.', 'mitra_id' => 4],
          ];

          $sertifikasiMitraSendiri = collect($sertifikasiList)->where('mitra_id', $mitraIdLogin);
          $sertifikasiMitraLain = collect($sertifikasiList)->where('mitra_id', '!=', $mitraIdLogin);
        @endphp

        <!-- Sertifikasi Mitra Sendiri -->
        <div class="sertif-container">
          <h5 class="mb-3 fw-semibold text-primary">Sertifikasi Anda</h5>
          <div class="sertif-list">
            @forelse($sertifikasiMitraSendiri as $sertif)
              <div class="item">
                <h6>{{ $sertif['judul'] }}</h6>
                <p>{{ $sertif['deskripsi'] }}</p>
              </div>
            @empty
              <p class="text-muted">Belum ada sertifikasi yang Anda buat.</p>
            @endforelse
          </div>
        </div>

        <!-- Sertifikasi Mitra Lain -->
        <div class="sertif-container mt-4">
          <h5 class="mb-3 text-primary fw-semibold">Sertifikasi dari Mitra Lain</h5>
          <div class="sertif-list">
            @forelse($sertifikasiMitraLain as $sertif)
              <div class="item">
                <h6>{{ $sertif['judul'] }}</h6>
                <p>{{ $sertif['deskripsi'] }}</p>
              </div>
            @empty
              <p class="text-muted">Belum ada sertifikasi dari mitra lain.</p>
            @endforelse
          </div>
        </div>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="col-lg-3 mt-4 mt-lg-0">
      <div class="right-section">
        <h5>Sertifikasi Terbaru</h5>
        <div class="sertif-item">Sertifikasi Microsoft Office</div>
        <div class="sertif-item">Sertifikasi Desain Grafis</div>
        <div class="sertif-item">Sertifikasi Jaringan Komputer</div>
        <div class="sertif-item">Sertifikasi Teknik Otomotif</div>
        <div class="sertif-item">Sertifikasi Arsitektur Gedung</div>
        <div class="sertif-item">Sertifikasi Mekanik Roda Dua</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Form Tambah Sertifikasi -->
<div class="modal fade" id="sertifikasiModal" tabindex="-1" aria-labelledby="sertifikasiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="#" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="sertifikasiModalLabel">Form Tambah Sertifikasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="judul" class="form-label">Judul Sertifikasi</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
          </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="perusahaan" class="form-label">Nama Perusahaan / Mitra</label>
            <input type="text" class="form-control" id="perusahaan" name="perusahaan" required>
          </div>
          <div class="mb-3">
            <label for="wilayah" class="form-label">Wilayah</label>
            <select class="form-select" id="wilayah" name="wilayah" required>
              <option value="" disabled selected>Pilih Wilayah</option>
              <option>Makassar</option>
              <option>Jakarta</option>
              <option>Surabaya</option>
              <option>Bandung</option>
              <option>Yogyakarta</option>
            </select>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
              <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
              <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="lisensi" class="form-label">Nomor Lisensi</label>
            <input type="text" class="form-control" id="lisensi" name="lisensi" required>
          </div>
          <div class="mb-3">
            <label for="file_sertifikat" class="form-label">Upload Sertifikat (opsional)</label>
            <input type="file" class="form-control" id="file_sertifikat" name="file_sertifikat" accept=".pdf,.jpg,.png">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>