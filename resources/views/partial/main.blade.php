<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navbar-brand {
            font-weight: bold;
            color: #fff;
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107;
        }

        .navbar {
            background-color: #4CAF50;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .banner {
            background-image: url('{{ asset('assets/banner.png') }}');
            background-size: cover;
            background-position: center;
            /* Menyesuaikan posisi banner, misalnya center top */
            height: 700px;
            over;
        }

        .container {
            margin-top: 20px;
        }

        /* Additional styling for better UI */
        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }

        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        .btn-primary:active {
            background-color: #3c903d;
            border-color: #3c903d;
        }

        /* Additional styling for carousel */
        /* .carousel-item {
            min-height: 280px;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
        }

        .carousel-caption h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .carousel-caption p {
            font-size: 1rem;
            margin-bottom: 0;
        } */
    </style>

    <title>HomePage</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4CAF50;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="50" height="50"
                    class="d-inline-block">
                HMI MAKASSAR
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Opini</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<<<<<<< Updated upstream
    {{-- <div class="banner">
        <!-- Content for the banner -->
    </div> --}}
=======
 {{-- <div class="banner">
</div> --}}
>>>>>>> Stashed changes

    <div class="container">


        @yield('container')
         </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var myCarousel = document.querySelector("#myCarousel");
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 5000, // Adjust slide transition speed as desired
            });
        });
    </script>
</body>

</html>
