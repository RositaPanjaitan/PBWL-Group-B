<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keuangan Kelas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <style>
    body {
      font-family: 'Garamond', serif;
      margin: 0;
      padding: 0;
      background-color: #FFFFFF;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: white;
      border-bottom: 1px solid #ddd;
    }

    header h1 {
      font-size: 24px;
      color: #4CAF50;
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


    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
      text-align: center;
    }

    table th,
    table td {
      border: 1px solid #ddd;
      padding: 10px;
    }

    table th {
      background-color: #003366;
      color: white;
    }

    table tr:nth-child(even) {
      background-color: #f2f2f2;
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

    footer {
      text-align: center;
      padding: 20px 10%;
      display: flex;
      justify-content: space-between;
      background-color: #03123C;
      color: white;
      position: fixed;
      bottom: 0;
      width: 100%;
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
          <li class="nav-item"><a class="nav-link fw-semibold" href="/home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="/Struktur Kelas">Struktur Kelas</a></li>
          <li class="nav-item"><a class="nav-link" href="/Galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="/Keuangan">Keuangan</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten Utama -->
  <main>
    <h2 style="text-align: center; margin-top: 20px;">TABEL KEUANGAN KELAS</h2>
    <table>
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
    </table>
  </main>

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