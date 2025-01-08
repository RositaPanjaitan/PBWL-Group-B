<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - SILIMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #FFFFFF; /* Full White Background */
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

    .navbar-brand img {
        height: 40px;
    }

    /* Hero Section - Full screen image */
    .hero-container {
        position: relative;
        width: 100%;
        height: 100vh; /* Full screen height */
        background-color: #FFFFFF; /* Full White Background */
        padding: 0; /* Remove padding */
    }

    .hero {
        text-align: center;
        position: relative;
        height: 100%; /* Full height */
    }

    .hero img {
        width: 100%; 
        height: 100%; 
        object-fit: cover; 
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
        margin-bottom: 10px;
    }

    /* Footer Section - No change */
    .footer {
    background-color: #03123C;
    color: white;
    padding: 20px 10%;
    margin-top: 80px; /* Menambahkan jarak pada bagian atas footer */
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
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo.jpg') }}" alt="SILIMA Logo">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/struktur-kelas">Struktur Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="/keuangan">Keuangan</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="hero-container">
            <div class="hero">
            <h1><strong>STRUKTUR KELAS SISTEM INFORMASI 5</strong></h1>
            <h2><strong>2022</strong></h2>


                <div class="container">
                    <img src="{{ asset('img/strukturkelas.jpg') }}"alt="Struktur Kelas">

                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <p>© 2024 Project Website Kelas Sistem Informasi-5. All Right Reserved</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-whatsapp"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
            </div>
        </footer>
    </body>

</html>