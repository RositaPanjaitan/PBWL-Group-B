<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil - SILIMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #03123C;
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


        .footer {
            background-color: #03123C;
            color: white;
            padding: 20px 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer p {
            margin: 0;
        }

        .footer .social-icons a {
            margin: 0 10px;
            font-size: 1.8rem;
            color: white;
        }

        /* Visi & Misi */
        .visi-misi {
            background-color: white;
            color: #03123C;
            padding: 30px 10%;
        }

        .visi-misi .card {
            border: 1px solid #03123C;
            border-radius: 8px;
            padding: 60px;
            background-color: #f9f9f9;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            height: 100%;
        }

        .visi-misi .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .visi-misi .card h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
            color: #03123C;
        }

        .visi-misi .card p,
        .visi-misi .card ul {
            font-size: 1rem;
            line-height: 1.6;
            text-align: justify;
            color: #555;
        }

        .visi-misi .card ul {
            padding-left: 20px;
            list-style-type: disc;
        }

        /* Tentang Kami */
        .tentang-kami {
            background-color: #03123C;
            color: white;
            padding: 170px 10%;
            text-align: center;
        }

        .tentang-kami h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .tentang-kami p {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        /* Profil */
        .profil {
            background-color: #03123C;
            color: white;
            padding: 40px 10%;
        }

        .profil h2 {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .carousel-item img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.jpg') }}" alt="SILIMA Logo" height="40">
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
   
    <!-- Tentang Kami -->
<section class="tentang-kami">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="text-container" style="flex: 1; padding-right: 20px;">
            <h2>Tentang Kami</h2>
            <p>Silima merupakan salah satu kelas yang berada di Universitas Islam Negeri Sumatera Utara, Fakultas Sains dan Teknologi. Kelas ini ada sejak tahun 2022 hingga saat ini, dengan beranggotakan 30 mahasiswa/i dari berbagai daerah.</p>
        </div>
        <div class="image-container" style="flex: 1;">
            <img src="{{ asset('img/fotokelas3.jpg') }}" class="img-fluid shadow-sm" alt="Foto Kelas" style="max-width: 100%;">
        </div>
    </div>
</section>




    <!-- Visi dan Misi -->
    <section class="visi-misi">
        <div class="row d-flex align-items-stretch justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h3>VISI</h3>
                    <p>Menjadi kelas yang inspiratif, solid, dan berprestasi dengan menjunjung tinggi nilai-nilai kebersamaan, kreativitas, dan tanggung jawab.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <h3>MISI</h3>
                    <ul>
                        <li>Membangun kebersamaan dan solidaritas antar anggota kelas.</li>
                        <li>Meningkatkan prestasi akademik dan non-akademik.</li>
                        <li>Mendorong kreativitas dan inovasi dalam setiap kegiatan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil -->
  <!-- Profil Section -->
  <section class="profil">
    <h2>PROFIL SISTEM INFORMASI 5</h2>
    <div id="carouselProfil" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                    <img src="{{ asset('img/rosita.jpg') }}" alt="Rosita Panjaitan">
                    <h5 class="card-title">Rosita Panjaitan</h5>

                    </div>
                    <div class="col-md-4 text-center">
                    <img src="{{ asset('img/rani.jpg') }}" alt="Rani Ramadhani">
                    <h5 class="card-title">Rani Ramadhani</h5>

                    </div>
                    <div class="col-md-4 text-center">
                    <img src="{{ asset('img/daffa.jpg') }}" alt="Daffa Anugraha">
                    <h5 class="card-title">DAFFA ANUGRAHA</h5>

                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                    <img src="{{ asset('img/dhafa.jpg') }}" alt="Dhafa Aulia">
                    <h5 class="card-title">DHAFA AULIA</h5>
                    </div>
                    <div class="col-md-4 text-center">
                    <img src="{{ asset('img/kanjul.jpg') }}" alt="Kanjul Ilmi Siregar">
                    <h5 class="card-title">KANJUL ILMI SIREGAR</h5>

                    </div>
                    <div class="col-md-4 text-center">
                    <img src="{{ asset('img/madan.jpg') }}" alt="Mulia Ramadan">
                    <h5 class="card-title">MULIA RAMADAN</h5>

                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProfil" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselProfil" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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