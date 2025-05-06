<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skul.Id</title>

  <!-- Font & Bootstrap -->
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

    .card img {
      object-fit: contain;
    }

    .search-bar input {
      border-radius: 12px;
      padding: 12px 18px;
    }

    .card-jurusan {
      border-radius: 12px;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="d-flex p-2">
    <img src="{{ url('img/logo.png') }}" alt="icon" width="7.5%" />
  </header>

  <!-- Profile Section -->
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
  
  <!-- Main Content -->
  <div class="container mt-5">
  <div class="container mt-5">
  <!-- Search Bar -->
  <div class="row mb-4 search-bar">
    <div class="col-lg-12">
      <input type="text" class="form-control shadow-sm" placeholder="Cari nama kampus atau jurusan...">
    </div>
  </div>

  <div class="row">
    <!-- Daftar Kampus -->
    <div class="col-lg-8 mb-4">
      <div class="card p-4 shadow-sm border-0">
        <h5 class="mb-3 fw-bold">Daftar Kampus</h5>

        <!-- Kampus 1 -->
        <div class="card mb-3 shadow-sm border-0 p-3 d-flex flex-row align-items-center">
          <img src="https://www.ui.ac.id/wp-content/uploads/2021/02/logo-ui-2020.png" class="me-3" alt="Logo UI" width="70" />
          <div>
            <h6 class="fw-semibold mb-1">Universitas Indonesia (UI)</h6>
            <p class="mb-1 text-muted">Kampus UI, Depok, Jawa Barat</p>
            <small class="text-secondary">(021) 7867222 | humas-ui@ui.ac.id</small>
          </div>
        </div>

        <!-- Kampus 2 -->
        <div class="card mb-3 shadow-sm border-0 p-3 d-flex flex-row align-items-center">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Institut_Teknologi_Bandung_Logo.svg/800px-Institut_Teknologi_Bandung_Logo.svg.png" class="me-3" alt="Logo ITB" width="70" />
          <div>
            <h6 class="fw-semibold mb-1">Institut Teknologi Bandung (ITB)</h6>
            <p class="mb-1 text-muted">Jl. Ganesha No.10, Bandung, Jawa Barat</p>
            <small class="text-secondary">(022) 2500935 | info@itb.ac.id</small>
          </div>
        </div>

        <!-- Kampus 3 -->
        <div class="card mb-3 shadow-sm border-0 p-3 d-flex flex-row align-items-center">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Logo_UGM.png/600px-Logo_UGM.png" class="me-3" alt="Logo UGM" width="70" />
          <div>
            <h6 class="fw-semibold mb-1">Universitas Gadjah Mada (UGM)</h6>
            <p class="mb-1 text-muted">Bulaksumur, Yogyakarta</p>
            <small class="text-secondary">(0274) 6491919 | info@ugm.ac.id</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Jurusan Favorit -->
    <div class="col-lg-4 mb-4">
      <div class="card p-4 shadow-sm border-0">
        <h5 class="mb-3 fw-bold">Jurusan Favorit</h5>

        <div class="card mb-3 shadow-sm border-0 p-3 card-jurusan">
          <h6 class="fw-semibold mb-1">Kedokteran</h6>
          <p class="mb-1 text-muted">Universitas Indonesia</p>
          <small>Daya Tampung: 100 | Peminat: 3.000</small>
        </div>

        <div class="card mb-3 shadow-sm border-0 p-3 card-jurusan">
          <h6 class="fw-semibold mb-1">Teknik Informatika</h6>
          <p class="mb-1 text-muted">Institut Teknologi Bandung</p>
          <small>Daya Tampung: 120 | Peminat: 4.200</small>
        </div>

        <div class="card mb-3 shadow-sm border-0 p-3 card-jurusan">
          <h6 class="fw-semibold mb-1">Hukum</h6>
          <p class="mb-1 text-muted">Universitas Gadjah Mada</p>
          <small>Daya Tampung: 150 | Peminat: 3.800</small>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
