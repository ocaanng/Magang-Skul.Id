<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skul.Id</title>
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


    <div class="container my-5">
        <h3 class="mb-4">Pelatihan Tersedia</h3>
        <input type="text" class="form-control mb-4 rounded-pill px-4 shadow-sm" placeholder="Cari pelatihan..." id="searchInput" />

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="pelatihanCards">
            @foreach ([
            ['judul' => 'Pengoperasian Instalasi Kontrol', 'kategori' => 'Teknik Listrik'],
            ['judul' => 'Digital Marketing & Strategy', 'kategori' => 'Bisnis & Manajemen'],
            ['judul' => 'Pelatihan Housekeeping', 'kategori' => 'Pariwisata'],
            ['judul' => 'Pengenalan Web Development', 'kategori' => 'IT & Software'],
            ['judul' => 'Dasar Perawat Lansia', 'kategori' => 'Kesehatan'],
            ] as $pelatihan)
            <div class="col pelatihan-card">
                <div class="card h-100 border-0 shadow-sm p-3 rounded-4" style="background-color: #fff;">
                    <div class="mb-2">
                        <h6 class="fw-semibold text-dark">{{ $pelatihan['judul'] }}</h6>
                    <span class="badge bg-primary mb-1">{{ $pelatihan['kategori'] }}</span>
                    <span class="badge bg-secondary-subtle text-black-50 me-1">Offline</span>
                    <span class="badge bg-secondary-subtle text-black-50">Non Boarding</span>
                    </div>
                    <p class="mb-1 text-muted">Harga</p>
                    <p class="fw-bold">Gratis</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>