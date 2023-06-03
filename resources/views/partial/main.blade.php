<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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

      </ul>
      <ul class="navbar-nav">
        {{-- Tambahkan navbar sesuai dengan role --}}
        @if(Auth()->check())
        @if(Auth()->user()->jenisAkun == 'admin')
        @include('partial.admin-navbar')
        @elseif(Auth()->user()->jenisAkun == 'ketua')
        @include('partial.ketua-navbar')
        @elseif(Auth()->user()->jenisAkun == 'anggota')
        @include('partial.anggota-navbar')
        @endif
        @else
        @yield('auth-navbar-items')
        @endif
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
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>

</body>

</html>
