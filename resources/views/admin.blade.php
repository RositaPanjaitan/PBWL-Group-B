<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    .navbar-brand img {
      height: 40px;
    }

    .form-title {
      text-align: center;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      margin: 20px 0;
      color: #03123C;
      font-weight: bold;
    }

    .form-container {
      max-width: 1500px;
      margin: 0 auto;
      padding: 40px;
      border: 0px solid #ddd;
      border-radius: 100px;
      background-color: #ffffff;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-weight: bold;
    }

    .btn-container {
      text-align: center;
      margin-left: 1000px;
    }

    .btn-primary {
      margin: 10px;
      background-color: #001f54;
      border: none;
    }

    .btn-secondary {
      margin: 10px;
      background-color: #6c757d;
      border: none;
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
          <li class="nav-item"><a class="nav-link fw-semibold" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="/struktur_kelas">Struktur Kelas</a></li>
          <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="/keuangan">Keuangan</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="form-container">
    <h2 class="form-title">Form Keuangan</h2>

    <!-- Notifikasi sukses -->
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('admin.store') }}" method="POST">
      @csrf
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" id="tanggal" name="tanggal" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label for="keterangan" class="form-label">Keterangan</label>
          <input type="text" id="keterangan" name="keterangan" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label for="kategori" class="form-label">Kategori</label>
          <select id="kategori" name="kategori" class="form-select" required>
            <option value="pemasukan">Pemasukan</option>
            <option value="pengeluaran">Pengeluaran</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="pemasukan" class="form-label">Pemasukan</label>
          <input type="number" id="pemasukan" name="pemasukan" class="form-control">
        </div>
        <div class="col-md-4">
          <label for="pengeluaran" class="form-label">Pengeluaran</label>
          <input type="number" id="pengeluaran" name="pengeluaran" class="form-control">
        </div>
        <div class="col-md-4">
          <label for="saldo" class="form-label">Saldo</label>
          <input type="number" id="saldo" name="saldo" class="form-control" required>
        </div>
      </div>
      <div class="btn-container">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary">Kembali</button>
      </div>
    </form>
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
