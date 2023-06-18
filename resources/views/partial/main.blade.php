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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar-brand {
            font-weight: bold;
            color: #fff;
            font-size: 1.5rem;
            margin-right: 2rem;
            display: flex;
            align-items: center;
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
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            line-height: 1.5rem;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
            padding: 0.5rem;
        }

        .navbar-toggler-icon {
            width: 1.2rem;
            height: 1.2rem;
            background-color: #fff;
        }

        .container {
            margin-top: 20px;
        }

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

        /* Custom navbar styling */
        .navbar-brand img {
            margin-right: 0.5rem;
            width: 70px;
            height: 70px;
        }

        .navbar-nav .nav-link {
            margin-right: 0.5rem;
            font-size: 1.2rem;
            padding: 0.25rem 0.75rem;
            border-radius: 2rem;
            transition: background-color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .navbar-collapse {
            justify-content: flex-end;
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

        .navbar {
            margin: 0 auto;
        }
    </style>
    <link rel="icon" type="image/png" href="{{ asset('assets/titlelogo.png') }}">

    <title>HomePage</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/titlelogo.png') }}" alt="Logo">
                    HMI MAKASSAR
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Opini</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kegiatan</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
