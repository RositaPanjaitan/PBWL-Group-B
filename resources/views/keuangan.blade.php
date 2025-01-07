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

    nav ul {
      list-style: none;
      display: flex;
      padding: 0;
      margin: 0;
    }

    nav ul li {
      margin-right: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: black;
      font-weight: bold;
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

    footer {
      text-align: center;
      padding: 10px;
      background-color: #003366;
      color: white;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 10px;
    }

    .social-icons a {
      text-decoration: none;
      color: white;
      font-size: 20px;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header>
    <h1>SILIMA</h1>
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/profil">Profil</a></li>
        <li><a href="/struktur">Struktur Kelas</a></li>
        <li><a href="/galeri">Galeri</a></li>
        <li><a href="/keuangan">Keuangan</a></li>
      </ul>
    </nav>
  </header>

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
      <a href="#"><i class="bi bi-whatsapp"></i> WA</a>
      <a href="#"><i class="bi bi-instagram"></i> IG</a>
      <a href="#"><i class="bi bi-facebook"></i> FB</a>
    </div>
  </footer>
</body>

</html>