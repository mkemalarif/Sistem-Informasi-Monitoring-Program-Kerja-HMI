<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/dtanggota.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/logout.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/registrasi.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/profileanggota.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/HomePage.css') }}">
  <style>

  </style>
  <title>Document</title>
</head>

<body>
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <a class="navbar-brand" href="#">HMI MAKASSAR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-2">
          <a class="nav-link" href="#">Berita</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="#">Opini</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="#">Kegiatan</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="#">Data Anggota</a>
        </li>
        <li class="nav-item me-2">
            <a class="nav-link" href="#">Tambahkan Anggota</a>
          </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item me-2">
          <img src="../assets/foto1.jpg" alt="Profile" class="rounded-circle me-2" style="height: 30px; width: 30px;">
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item me-2">
          <a class="nav-link btn btn-logout text-white" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  {{-- Banner --}}
  <div class="banner">
    <!-- Konten banner -->
  </div>

  {{-- Container --}}
  <div class="container">
    @yield('container')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
