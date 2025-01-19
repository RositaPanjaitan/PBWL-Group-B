<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuangan Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFFFFF;
            margin: 0;
            padding: 0;
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

        h1 {
            text-align: center;
            font-size: 2.5rem; 
            font-weight: bold;
            color: #03123C;
            margin: 30px 0 20px; 
            font-family: 'ADLaM Display', serif; 
        }

        .table-container {
            width: 90%;
            margin: 20px auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: auto;
        }

        .table th {
            background-color: #03123C;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            padding: 15px;
            text-align: center;
        }

        .table td {
            font-size: 1rem;
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .table tr:nth-child(even) {
            background-color: #F2F2F2;
        }

        .table tr:nth-child(odd) {
            background-color: #D6E4F0;
        }

        .footer {
            background-color: #03123C;
            color: white;
            padding: 20px 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 240px; 
        }

        .footer p {
            margin: 0;
        }

        .footer .social-icons a {
            margin: 0 10px;
            font-size: 1.8rem;
            color: white;
            transition: color 0.3s;
        }

        .footer .social-icons a:hover {
            color: #00FF7F;
        }

        @media (max-width: 768px) {
            .footer {
                flex-direction: column;
                text-align: center;
            }

            .footer .social-icons {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
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

    <main>
        <h1>TABEL KEUANGAN KELAS</h1>
        <div class="table-container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Kategori</th>
                        <th>Pemasukan</th>
                        <th>Pengeluaran</th>
                        <th>Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($keuangan as $key => $keuangan)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $keuangan->tanggal }}</td>
                        <td>{{ $keuangan->keterangan }}</td>
                        <td>{{ ucfirst($keuangan->kategori) }}</td>
                        <td>{{ number_format($keuangan->pemasukan, 0, ',', '.') }}</td>
                        <td>{{ $keuangan->pengeluaran ? number_format($keuangan->pengeluaran, 0, ',', '.') : '-' }}</td>
                        <td>{{ number_format($keuangan->saldo, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

<<<<<<< HEAD
    <footer class="footer">
        <p>© 2024 Project Website Kelas Sistem Informasi-5. All Right Reserved</p>
        <div class="social-icons">
            <a href="#"><i class="bi bi-whatsapp"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
        </div>
    </footer>
=======
  <!-- Konten Utama -->
  <main>
    <h2 style="text-align: center; margin-top: 20px;">TABEL KEUANGAN KELAS</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Keterangan</th>
          <th>Kategori</th>
          <th>Pemasukan</th>
          <th>Pengeluaran</th>
          <th>Saldo</th>
        </tr>
      </thead>
      <tbody>
        <!-- Loop untuk menampilkan data -->
        @foreach($keuangan as $key => $keuangan)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $keuangan->tanggal }}</td>
          <td>{{ $keuangan->keterangan }}</td>
          <td>{{ ucfirst($keuangan->kategori) }}</td>
          <td>{{ $keuangan->pemasukan }}</td>
          <td>{{ $keuangan->pengeluaran }}</td>
          <td>{{ $keuangan->saldo }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <p>© 2024 Project Website Kelas Sistem Informasi-5. All Right Reserved</p>
    <div class="social-icons">
        <a href="https://wa.me/6289525681442"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.instagram.com/si5.official?igsh=MTlvMGJzMXI5djcwNA=="><i class="bi bi-instagram"></i></a>
        <a href="https://www.facebook.com/profile.php?id=61571740951116"><i class="bi bi-facebook"></i></a>
    </div>
  </footer>
>>>>>>> c264f5e7f212917d81131c0eb892d31435fafcec
</body>
</html>


