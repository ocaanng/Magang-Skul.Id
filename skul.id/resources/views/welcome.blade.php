<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skul.Id</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            color: #252f35;
            font-size: 13px;
            height: 100%;
        }

        .body-utama {
            margin: 4px;
            flex-direction: column;
        }

        .judul {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .judul h1 {
            font-size: 27px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .judul p {
            font-weight: 300;
            font-size: 18px;
            margin-bottom: 18px;
        }

        .konten {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 20px;
        }

        .card-role {
            width: 30%;
            border-radius: 15px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }

        .card-role:hover {
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }

        .mitra {
            background-color: #B1FFA0;
            color: #368C23;
        }

        .mitra h1 {
            font-size: 20px;
            font-weight: 700;
            color: #459433;
            margin-bottom: 10px;
        }

        .alumni {
            background-color: #B2EEFF;
            color: #1199BD;
        }

        .alumni h1 {
            font-size: 20px;
            font-weight: 700;
            color: #149EC3;
            margin-bottom: 10px;
        }

        .card-role img {
            width: 60%;
            align-self: flex-end;
            margin-top: auto;
        }

        a.text-decoration-none:hover {
            color: inherit;
        }
    </style>
</head>
<body>
    <div class="body-utama">
        <header class="d-flex p-2">
            <img src="{{ url('img/logo.png') }}" alt="icon" width="7.5%">
        </header>

        <div class="judul">
            <h1>Ayo Mulai</h1>
            <p>Silahkan pilih role kamu:</p>
        </div>

        <div class="konten">

            <a href="{{ route('loginmitra') }}" class="card-role mitra text-decoration-none">
                <div>
                    <h1>Mitra</h1>
                    <p>Bergabung menjadi mitra sebagai penyedia sertifikasi, pelatihan dan informasi lowongan kerja</p>
                </div>
                <img src="{{ url('img/.png') }}" alt="Mitra">
            </a>

            <a href="{{ route('loginalumni') }}" class="card-role alumni text-decoration-none">
                <div>
                    <h1>Alumni</h1>
                    <p>Jika kamu sudah lulus program pendidikan SMA/SMK/MA</p>
                </div>
                <img src="{{ url('img/.png') }}" alt="Alumni">
            </a>

        </div>
    </div>
</body>
</html>