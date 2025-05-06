<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skul.Id</title>

  <!-- Fonts & Bootstrap -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

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
    <div class="row">
      <!-- Filter -->
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

      <!-- Job List -->
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
