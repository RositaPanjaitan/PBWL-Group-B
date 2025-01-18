<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #FFFFFF;
        }

        .navbar {
            border-bottom: 1px solid #0a0218;
            background-color: white;
        }

        .navbar-nav .nav-link {
            font-family: 'Garamond', serif;
            color: #03123C;
            font-size: 1.1rem;
        }
        .navbar-nav .nav-item.active .nav-link {
            color: #800a0a; 
        }


        .navbar-brand img {
            height: 40px;
        }

        .gallery-section h1 {
            text-align: center;
            font-size: 2.5rem;
            margin: 30px 0;
        }

        .container-gallery {
            padding: 0 15px; 
        }

        .card-body h5 {
            text-align: justify;
            font-size: 1rem;
            margin-top: 10px;
        }

        .card img {
            width: 100%; 
            height: auto;
            border-radius: 10px; 
        }

        .row {
            margin-left: 0;
            margin-right: 0;
        }

        .footer {
            background-color: #03123C;
            color: white;
            padding: 20px 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .footer p {
            margin: 0;
        }

        .footer .social-icons a {
            margin: 0 10px;
            font-size: 1.8rem;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container d-flex justify-content-between align-items-center">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.jpg') }}" alt="SILIMA Logo">
      </a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link fw-semibold" href="/">Home</a>
          </li>
          <li class="nav-item {{ Request::is('profil') ? 'active' : '' }}">
            <a class="nav-link" href="/profil">Profil</a>
          </li>
          <li class="nav-item {{ Request::is('struktur_kelas') ? 'active' : '' }}">
            <a class="nav-link" href="/struktur_kelas">Struktur Kelas</a>
          </li>
          <li class="nav-item {{ Request::is('galeri') ? 'active' : '' }}">
            <a class="nav-link" href="/galeri">Galeri</a>
          </li>
          <li class="nav-item {{ Request::is('keuangan') ? 'active' : '' }}">
            <a class="nav-link" href="/keuangan">Keuangan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
    <section class="gallery-section">
        <div class="container-gallery">
            <h1><strong>ALBUM FOTO SILIMA</strong></h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/Sosialisasi MK Pancasila.jpg') }}" alt="Sosialisasi MK Pancasila">
                        <div class="card-body">
                            <h5 class="card-title">Sosialisasi MK Pancasila di SMPN 31 Medan</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/PDH.jpg') }}" alt="Hari PDH">
                        <div class="card-body">
                        <h5 style="text-align: justify;">Hari PDH</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/UTS.jpg') }}" alt="Ujian Tengah Semester">
                        <div class="card-body">
                            <h5 class="card-title">Ujian Tengah Semester</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/ULTAH.jpg') }}" alt="Ulang Tahun Recap">
                        <div class="card-body">
                            <h5 class="card-title">Ulang Tahun Recap</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/INAGURASI.jpg') }}" alt="Inagurasi Sistem Informasi">
                        <div class="card-body">
                            <h5 class="card-title">Inagurasi Sistem Informasi Stambuk 2022/2023</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/UTS.jpg') }}" alt="Ujian Akhir Semester">
                        <div class="card-body">
                            <h5 class="card-title">Ujian Akhir Semester MK Bahasa Arab</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
            <p>© 2024 Project Website Kelas Sistem Informasi-5. All Right Reserved</p>
            <div class="social-icons">
            <a href="https://wa.me/6289525681442"><i class="bi bi-whatsapp"></i></a>
            <a href="https://www.instagram.com/si5.official?igsh=MTlvMGJzMXI5djcwNA=="><i class="bi bi-instagram"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61571740951116"><i class="bi bi-facebook"></i></a>
            </div>
        </footer>
    
</body>
</html>