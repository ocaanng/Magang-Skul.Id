<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sertifikasi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }

    header img {
      margin-left: 2rem;
    }

    .container-fluid {
      background: linear-gradient(to right, #08BADC, #B2EEFF);
      height: 330px;
      padding: 5rem 10%;
      border-radius: 0 0 20px 20px;
    }

    .profile-img {
      width: 170px;
      height: 170px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #fff;
    }

    .text p {
      font-size: 15px;
      padding: 2px 0;
    }

    .main-content {
      padding: 3rem 10%;
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
  </style>
</head>
<body>

  <header class="d-flex p-2">
    <img src="{{ url('img/logo.png') }}" alt="icon" width="7.5%" />
  </header>

  <div class="container-fluid">
    <div class="profile-header text-white d-flex align-items-center gap-4">
      <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profile Image" class="profile-img" />
      <div class="text">
        <h1>Halo, Feline Rosa</h1>
        <p class="mb-0">Alumni, SMKN 8 Makassar</p>
        <p class="mb-0">feline@skul.id</p>
        <p class="mb-0">0852-2584-5253</p>
      </div>
    </div>
  </div>

  <div class="main-content">
    <div class="row">

      <div class="col-lg-9">
        <input type="text" class="form-control search-bar" placeholder="Cari jurusan" />

        <div class="row g-4">
          <div class="col-md-4 col-sm-6">
            <div class="card-jurusan">
              <img src="https://img.icons8.com/color/64/000000/architect.png" alt="Gedung" />
              <h6>Arsitektur Bangunan</h6>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card-jurusan">
              <img src="https://img.icons8.com/color/64/000000/computer-support.png" alt="RPL" />
              <h6>Rekayasa Perangkat Lunak</h6>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card-jurusan">
              <img src="https://img.icons8.com/color/64/000000/chef-hat.png" alt="Tata Boga" />
              <h6>Tata Boga</h6>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card-jurusan">
              <img src="https://img.icons8.com/color/64/000000/hair-dryer.png" alt="Tata Rias" />
              <h6>Tata Rias</h6>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card-jurusan">
              <img src="https://img.icons8.com/color/64/000000/electrical.png" alt="Listrik" />
              <h6>Teknik Listrik</h6>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card-jurusan">
              <img src="https://img.icons8.com/color/64/000000/car-service.png" alt="TKRO" />
              <h6>Teknik Kendaraan Ringan</h6>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 mt-4 mt-lg-0">
        <div class="right-section">
          <h6>Sertifikasi Terbaru</h6>
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

</body>
</html>