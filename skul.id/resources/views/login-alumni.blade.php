<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skul.Id</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      font-family: "Poppins", sans-serif;
      color: #252f35;
      font-size: 13px;
      background-color: #fff;
      min-height: 100vh;
      margin: 0;
      padding: 0;
    }

    .btn-back {
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 999;
    }

    .container-box {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      max-width: 900px;
      margin: 100px auto;
      padding: 30px;
      position: relative;
    }

    .logo-skulid {
      position: absolute;
      top: 15px;
      left: 20px;
      height: 40px;
    }

    .inner-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 30px;
      margin-top: 50px;
      flex-wrap: wrap;
    }

    .icon-besar {
      flex: 1;
      min-width: 250px;
      text-align: center;
    }

    .icon-besar img {
      max-width: 100%;
      height: auto;
    }

    .login-form {
      flex: 1;
      min-width: 250px;
    }

    input {
      height: 60px;
    }

    h1 {
      font-weight: 600;
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      font-size: 14px;
    }

    .form-control {
      background-color: #f1f8f7;
      border: none;
      padding-left: 40px;
    }

    .form-control:focus {
      box-shadow: none;
    }

    .input-group-text {
      background: none;
      border: none;
      position: absolute;
      left: 5px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
    }

    .form-check-label {
      font-size: 13px;
    }

    .form-check a {
      text-decoration: underline;
    }

    .form-check-input:checked {
      background-color: #ff3c6a;
      border-color: #ff3c6a;
    }

    .login-btn {
      background: #00FFE1;
      color: white;
      font-weight: 600;
      height: 60px;
    }

    @media (max-width: 768px) {
      .inner-content {
        flex-direction: column;
        text-align: center;
      }

      .logo-skulid {
        position: static;
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Tombol Back -->
  <a href="{{ url()->previous() }}" class="btn-back">
    <img src="{{ url('img/back.png') }}" alt="Back" width="30" />
  </a>

  <!-- Kontainer Utama -->
  <div class="container-box">

    <!-- Logo Skul.id -->
    <img src="{{ url('img/logo.png') }}" alt="Logo Skul.id" class="logo-skulid" />

    <div class="inner-content">

      <!-- Icon besar -->
      <div class="icon-besar">
        <img src="{{ url('img/login-alumni.png') }}" alt="Icon Besar" style="width: 350px;">
      </div>

      <!-- Form Login -->
      <div class="login-form">
        <div class="text">
          <h1>Login Alumni</h1>
          <p>Belum memiliki akun? <a href="{{ route('registeralumni') }}" class="text-danger">Daftar Sekarang</a></p>
        </div>

          @csrf
          <div class="mb-3 position-relative">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input type="text" class="form-control" placeholder="Username" name="email" required>
          </div>
          <div class="mb-3 position-relative">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
          </div>
          <div class="mb-3 text-end">
            <a href="#" class="text-danger small-link">Lupa Password?</a>
          </div>
          <div class="form-check mb-3 text-start">
            <input class="form-check-input" type="checkbox" id="termsCheck" required>
            <label class="form-check-label" for="termsCheck">
              Dengan login menggunakan nomor atau metode lain, saya setuju dengan
              <a href="#">Ketentuan Pengguna</a> & <a href="#">Kebijakan Privasi</a>
            </label>
          </div>
          <a href="{{ route('alumni') }}" class="card-role mitra text-decoration-none">
                <button type="submit" class="btn login-btn w-100">LOGIN</button>
            </a>
            <form action="{{ route('loginalumni') }}" method="POST">
    </form>
      </div>
    </div>
  </div>

</body>
</html>