<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
        body {
            margin: 0;
            font-family: 'Garamond', sans-serif;
            background-color: #FFFFFF;
        }

        .navbar {
            border-bottom: 1px solid #03123C;
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
        .hero-container {
            position: relative;
            width: 100%;
            height: auto;
            background: linear-gradient(to bottom, #ffffff 50%, #03123C 50%);
            padding: 50px 0;
        }

        .hero font {
            text-align: center;
            position: relative;
            padding: 48px 0;
            font-family: 'Beau Rivage', cursive;

        
        }

        .hero img {
            width: 95%;
            height: auto;
            position: relative;
        }

        .text-overlay {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(11, 30, 64, 0.7);
            padding: 10px 10px;
            color: rgb(255, 252, 252);
            text-align: center;
            border-radius: 10px;
            width: 30%;
            z-index: 3;
            margin-bottom: px;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    </head>

    <body>
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

        <div class="hero-container">
            <div class="hero">
                <div class="container">
                    <img src="{{ asset('img/fotokelas.jpg') }}" class="img-fluid shadow-sm" alt="Foto Kelas">
                    <div class="text-overlay">
                        <h2 class="fw-bold">Selamat Datang</h2>
                        <p>di Kelas Sistem Informasi 5 Angkatan 2022/2023!!</p>
                        <p>Universitas Islam Negeri Sumatera Utara</p>
                        <p>Fakultas Sains dan Teknologi</p>
                    </div>
                </div>
            </div>
        </div>

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