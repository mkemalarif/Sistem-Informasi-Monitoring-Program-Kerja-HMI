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
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  {{-- <style>
    body {
      margin: 0;
      overflow-x: hidden;
    }

    #particles-js {
      height: 100vh;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
    }
  </style> --}}

  <title>Validasi Berita</title>
</head>

<body>
  {{-- <div id="particles-js"></div> --}}

  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <a class="navbar-brand" @if(!auth()->check())
      href="/"
      @elseif(Auth()->user()->jenisAkun === 'ketua')
      href='/ketua/dashboard'
      @elseif(Auth()->user()->jenisAkun === 'admin')
      href='/admin/dashboard'
      @elseif(Auth()->user()->jenisAkun === 'anggota')
      href='/anggota/dashboard'
      @endif
      >HMI MAKASSAR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      {{-- <ul class="navbar-nav ms-auto">
        <li class="nav-item me-2">
          <a class="nav-link" href="#">Berita</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="#">Opini</a>
        </li>
        <li class="nav-item me-2">
          <a class="nav-link" href="#">Kegiatan</a>
        </li>
      </ul> --}}
      <ul class="navbar-nav ms-auto">
        {{-- Tambahkan navbar sesuai dengan role --}}
        {{-- @if(Auth()->check()) --}}
        {{-- @if(Auth()->user()->jenisAkun == 'admin') --}}
        {{-- @if(Auth()->user()->jenisAkun == 'ketua')
        @include('partial.ketua-navbar')
        @elseif(Auth()->user()->jenisAkun == 'anggota')
        @include('partial.anggota-navbar')
        @endif
        @else --}}
        {{-- @yield('auth-navbar-items') --}}
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
            <a class="nav-link" href="/login">Login</a>
          </li>
        </ul>
        {{-- @endif --}}
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

  {{-- <script>
    particlesJS("particles-js", {
      particles: {
        number: {
          value: 100,
          density: {
            enable: true,
            value_area: 800
          }
        },
        color: {
          value: "#ffffff" // Set the color to white
        },
        shape: {
          type: "circle",
          stroke: {
            width: 0,
            color: "#000000"
          },
          polygon: {
            nb_sides: 5
          },
          image: {
            src: "img/github.svg",
            width: 100,
            height: 100
          }
        },
        opacity: {
          value: 0.5,
          random: false,
          anim: {
            enable: false,
            speed: 1,
            opacity_min: 0.1,
            sync: false
          }
        },
        size: {
          value: 3,
          random: true,
          anim: {
            enable: false,
            speed: 40,
            size_min: 0.1,
            sync: false
          }
        },
        line_linked: {
          enable: true,
          distance: 150,
          color: "#ffffff",
          opacity: 0.4,
          width: 1
        },
        move: {
          enable: true,
          speed: 6,
          direction: "none",
          random: false,
          straight: false,
          out_mode: "out",
          bounce: false,
          attract: {
            enable: false,
            rotateX: 600,
            rotateY: 1200
          }
        }
      },
      interactivity: {
        detect_on: "canvas",
        events: {
          onhover: {
            enable: true,
            mode: "repulse"
          },
          onclick: {
            enable: true,
            mode: "push"
          },
          resize: true
        },
        modes: {
          grab: {
            distance: 400,
            line_linked: {
              opacity: 1
            }
          },
          bubble: {
            distance: 400,
            size: 40,
            duration: 2,
            opacity: 8,
            speed: 3
          },
          repulse: {
            distance: 200,
            duration: 0.4
          },
          push: {
            particles_nb: 4
          },
          remove: {
            particles_nb: 2
          }
        }
      },
      retina_detect: true
    });
  </script> --}}

</body>

</html>
