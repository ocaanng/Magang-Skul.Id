<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - Skul.Id</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: "Poppins", sans-serif;
      color: #252f35;
      font-size: 13px;
      min-height: 100vh;
      position: relative;
    }

    .btn-back {
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 999;
      transition: transform 0.2s ease;
    }

    .btn-back:hover {
      transform: scale(1.1);
    }

    .register-container {
      max-width: 480px;
      margin: 80px auto;
      padding: 30px;
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

    .register-btn {
      background: #00FFE1;
      color: white;
      font-weight: 600;
      height: 60px;
    }
  </style>
</head>
<body>

<a href="{{ url()->previous() }}" class="btn-back">
  <img src="{{ url('img/back.png') }}" alt="Back" width="30">
</a>

<div class="register-container">
  <div class="text">
    <h1>Daftar Alumni</h1>
    <p>Sudah memiliki akun? <a href="{{ url('/alumni/login') }}" class="text-danger">Masuk di sini</a></p>
  </div>

  <form method="#"id="registerForm">
    @csrf
    <div class="mb-3 position-relative">
      <span class="input-group-text"><i class="bi bi-person"></i></span>
      <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" required>
    </div>

    <div class="mb-3 position-relative">
      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
      <input type="text" class="form-control" placeholder="08xx xxxx xxxx (Telkomsel saja)" name="nomor" id="numb" required>
    </div>

    <div class="mb-3 position-relative">
      <span class="input-group-text"><i class="bi bi-lock"></i></span>
      <input type="password" class="form-control" placeholder="Password" name="password" required>
    </div>

    <div class="mb-3 position-relative">
      <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
      <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" required>
    </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="termsCheck" required>
      <label class="form-check-label" for="termsCheck">
        Dengan mendaftar, saya menyetujui <a href="#">Ketentuan Pengguna</a> & <a href="#">Kebijakan Privasi</a>
      </label>
    </div>

    <button type="submit" class="btn register-btn w-100">DAFTAR</button>
  </form>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registerForm");
    const phoneInput = document.getElementById("numb");

    form.addEventListener("submit", function (e) {
      const phone = phoneInput.value.trim();
      const telkomselPrefixes = /^(0811|0812|0813|0821|0822|0823|0851|0852|0853)/;

      if (!telkomselPrefixes.test(phone)) {
        e.preventDefault();
        alert("Nomor telepon harus nomor Telkomsel (misal: 0812xxxxxxx).");
        phoneInput.focus();
      }
    });
  });
</script>

</body>
</html>