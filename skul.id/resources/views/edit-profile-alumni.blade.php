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
    }

    a {
      text-decoration: none;
    }

    .container-fluid {
      padding: 0;
      margin: 0;
    }

    /* Layout agar rata kiri dan tidak terlalu sempit */
.content {
  padding: 3rem 4rem;
  background-color: #fff;
}

/* Hilangkan border dan bayangan dari card */
.card {
  border: none !important;
  box-shadow: none !important;
  background-color: transparent !important;
  padding: 0 !important;
}

/* Form control styling agar clean (tanpa border box terlihat) */
.form-control,
.form-select,
textarea {
  border: 1px solid #dee2e6;
  border-radius: 6px;
  box-shadow: none;
  transition: border-color 0.3s;
}

.form-control:focus,
.form-select:focus,
textarea:focus {
  border-color: #0d6efd;
  box-shadow: none;
}

/* Judul agar sejajar kiri */
.content h3 {
  text-align: left !important;
  margin-bottom: 2rem;
  color: #000;
}

/* Tombol submit sejajar kiri */
.text-end {
  text-align: left !important;
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

    #edit input, textarea, option {
      width: 60%;
    }

    #edit textarea{
      width: 60%;
    }

    #edit .form-select {
      width: 60%;
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

    #edit form {
  max-width: 700px;
  margin-left: 1rem;
}

#edit form .mb-3,
#edit form .mb-4 {
  margin-bottom: 1.25rem;
}


  .btn-success {
    background-color: #198754;
    border-color: #198754;
  }

  #edit .text-end {
    text-align: center !important;
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
  <a class="text-secondary" href="#"><i class="bi bi-house-door-fill me-2"></i>Beranda</a>
  <a class="text-secondary" href="#"><i class="bi bi-patch-check-fill me-2"></i>Sertifikasi</a>
  <a class="text-secondary" href="#"><i class="bi bi-briefcase-fill me-2"></i>Loker</a>
  <a class="text-secondary" href="#"><i class="bi bi-journal-text me-2"></i>Pelatihan</a>
  <a class="text-secondary" href="{{ route('profile_alumni') }}"><i class="bi bi-person-fill me-2"></i>Profil</a>
  <a href="#" class="logout"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
</div>


<!-- Content -->
<div class="content" id="edit">
<h3 class="mb-4 fw-bold text-primary px-2">Edit Profil</h3>

  <div class="container py-3 px-4">
    <div class="card rounded-4 p-4" style="background-color: #fefefe;">
      <form>
        <div class="mb-3">
          <label class="form-label fw-semibold">Nama Lengkap</label>
          <input type="text" class="form-control rounded-3" placeholder="Contoh: Rizky Ramadhan">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">NISN</label>
          <input type="text" class="form-control rounded-3" placeholder="Contoh: 0044556677">
        </div>
        <div class="mb-3">
  <label class="form-label fw-semibold">Provinsi</label>
  <select class="form-select rounded-3" id="provinsi">
    <option selected disabled>Pilih Provinsi</option>
    <option value="sulawesi_utara">Sulawesi Utara</option>
    <option value="sulawesi_selatan">Sulawesi Selatan</option>
    <option value="sulawesi_tengah">Sulawesi Tengah</option>
    <option value="sulawesi_tenggara">Sulawesi Tenggara</option>
    <option value="gorontalo">Gorontalo</option>
    <option value="sulawesi_barat">Sulawesi Barat</option>
  </select>
</div>

<div class="mb-3">
  <label class="form-label fw-semibold">Kota/Kabupaten</label>
  <select class="form-select rounded-3" id="kota">
    <option selected disabled>Pilih Kota</option>
  </select>
</div>

<div class="mb-3">
  <label class="form-label fw-semibold">NPSN Sekolah</label>
  <input type="text" class="form-control rounded-3" id="npsn" placeholder="Contoh: 700001">
</div>

<div class="mb-3">
  <label class="form-label fw-semibold">Asal Sekolah</label>
  <select class="form-select rounded-3" id="sekolah">
    <option selected disabled>Pilih Sekolah</option>
  </select>
</div>


        <div class="mb-3">
          <label class="form-label fw-semibold">Kelas</label>
          <select class="form-select rounded-3">
            <option selected disabled>Pilih Kelas</option>
            <option>X</option>
            <option>XI</option>
            <option>XII</option>
            <option>Alumni</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Jurusan</label>
          <select class="form-select rounded-3">
            <option selected disabled>Pilih Jurusan</option>
            <option>Rekayasa Perangkat Lunak</option>
            <option>Teknik Komputer dan Jaringan</option>
            <option>Multimedia</option>
            <option>Akuntansi</option>
            <option>Administrasi Perkantoran</option>
            <option>Lainnya</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Email</label>
          <input type="email" class="form-control rounded-3" placeholder="Contoh: rizky@email.com">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">No. Telepon</label>
          <input type="text" class="form-control rounded-3" placeholder="08xx xxxx xxxx (Telkomsel saja)">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Jenis Kelamin</label>
          <select class="form-select rounded-3">
            <option selected disabled>Pilih Jenis Kelamin</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Tanggal Lahir</label>
          <input type="date" class="form-control rounded-3">
        </div>
        <div class="mb-4">
          <label class="form-label fw-semibold">Alamat</label>
          <textarea class="form-control rounded-3" rows="2" placeholder="Tulis alamat lengkap di sini..."></textarea>
        </div>
        <div class="text-start">
          <button type="submit" class="btn btn-success px-4 py-2 rounded-3 fw-semibold">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const phoneInput = form.querySelector('input[type="text"][placeholder*="Telkomsel"]');

    form.addEventListener("submit", function (e) {
      const phone = phoneInput.value.trim();
      const telkomselPrefixes = /^(0811|0812|0813|0821|0822|0823|0851|0852|0853)/;

      if (!telkomselPrefixes.test(phone)) {
        e.preventDefault(); // mencegah form terkirim
        alert("Nomor telepon harus nomor Telkomsel (misal: 0812xxxxxxx).");
        phoneInput.focus();
      }
    });
  });

  const dataKota = {
  sulawesi_utara: ["Manado", "Bitung", "Tomohon"],
  sulawesi_selatan: ["Makassar", "Parepare", "Palopo"],
  sulawesi_tengah: ["Palu", "Donggala", "Poso"],
  sulawesi_tenggara: ["Kendari", "Baubau"],
  gorontalo: ["Gorontalo", "Bone Bolango"],
  sulawesi_barat: ["Mamuju", "Polewali Mandar"]
};

const sekolahByNpsn = {
  "700001": ["SMK Negeri 1 Manado", "SMK Negeri 2 Manado"],
  "700002": ["SMK Negeri 1 Makassar", "SMK Negeri 5 Makassar"],
  "700003": ["SMK Negeri 1 Kendari"],
};


  document.addEventListener("DOMContentLoaded", function () {
    const provinsiSelect = document.getElementById("provinsi");
    const kotaSelect = document.getElementById("kota");
    const npsnInput = document.getElementById("npsn");
    const sekolahSelect = document.getElementById("sekolah");

    provinsiSelect.addEventListener("change", function () {
      const selectedProvinsi = this.value;
      const kotaList = dataKota[selectedProvinsi] || [];

      kotaSelect.innerHTML = `<option selected disabled>Pilih Kota</option>`;
      kotaList.forEach(kota => {
        const option = document.createElement("option");
        option.value = kota;
        option.textContent = kota;
        kotaSelect.appendChild(option);
      });
    });

    npsnInput.addEventListener("input", function () {
      const npsn = this.value.trim();
      const sekolahList = sekolahByNpsn[npsn] || [];

      sekolahSelect.innerHTML = `<option selected disabled>Pilih Sekolah</option>`;
      sekolahList.forEach(nama => {
        const option = document.createElement("option");
        option.value = nama;
        option.textContent = nama;
        sekolahSelect.appendChild(option);
      });
    });
  });
</script>




</body>
</html>

