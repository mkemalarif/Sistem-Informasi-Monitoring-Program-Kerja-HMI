@extends('partial.main')
@section('container')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* Tambahkan gaya tata letak berikut di sini */
        .fancy-paragraph {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .fancy-paragraph p {
            color: #333;
            font-size: 16px;
            line-height: 1.5;
        }

        .carousel-container {
            margin-top: 30px;
        }

    .info-box-container {
        margin-top: 30px;
    }

    .info-box-container .row {
        margin-bottom: 30px;
    }

    .info-box {
        padding: 20px;
        text-align: center;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        height: 100%;
    }

    .info-box:hover {
        transform: translateY(-5px);
    }

    .info-box h5 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

        .info-box p {
            font-size: 18px;
        }

        .container-content {
            display: flex;
            align-items: center;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo-container {
            margin-right: 20px;
        }

        .content-container {
            flex: 1;
        }

        h2 {
            margin-top: 0;
        }
        .logo-container{
            margin-left: 20px;
        }
    </style>

    <div class="container-content">
        <div class="logo-container">
            <img src="{{ asset('assets/titlelogo.png') }}" width="150px" alt="Logo">
        </div>
        <div class="content-container">
            <h2>HMI Dalam Angka</h2>
            <p>
                Terhitung sejak awal Tahun 2022 PBHMI berinisiasi untuk merapihkan data keanggotaan secara digital. Data ini
                adalah data anggota terbaru dari semua Badan Kordinasi (Badko), Cabang, dan Komisariat yang ada di bawah
                Makassar.
                <br>
                <br>
                Data ini akan selalu ter-update secara otomatis berdasarkan Program kerja yang diadakan oleh setiap Badan
                Kordinasi, Cabang, dan Komisariat.
                <br>
                <br>
                <em>*Statistik akan ter-update secara periodik.</em>
            </p>
        </div>
    </div>
<br>
<br>
<br>
    <div class="container-content">

    <div class="content-container">
        <h2 class="section-title">Sejarah HMI</h2>
        <div class="fancy-paragraph">
            <p>
                HMI adalah organisasi mahasiswa yang didirikan di Yogyakarta pada tanggal 14 Rabiul Awal 1366 H bertepatan
                dengan tanggal 5 Februari 1947.
            </p>

            <p>
                HMI terbentuk atas prakarsa Lafran Pane beserta 14 orang mahasiswa Sekolah Tinggi Islam yang sekarang
                bernama Universitas Islam Indonesia.
            </p>
        </div>


    </div>
        <div class="logo-container">
       <span class="img mt-lg-3"><img src="{{ asset('assets/sejarah.png') }}" width="150px"  alt="Logo" ></span>
    </div>
</div>





    <div class="container info-box-container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="info-box">
                    <h5 class="card-title">Badan Koordinasi (Badko)</h5>
                    <p class="card-text">6</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <h5 class="card-title">Cabang</h5>
                    <p class="card-text">40</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="info-box">
                    <h5 class="card-title">Komisariat</h5>
                    <p class="card-text">76</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <h5 class="card-title">Total Anggota</h5>
                    <p class="card-text">5000</p>
                </div>
            </div>
        </div>
    </div>


<div class="container">
    <h1 class="mt-5">Berita</h1>

        <div class="banner">
            <!-- Content for the banner -->
        </div>

        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/800x400?text=Slide%201" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption">
                        <h5>Slide 1</h5>
                        <p>Content for Slide 1</p>
                        <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400?text=Slide%202" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption">
                        <h5>Slide 2</h5>
                        <p>Content for Slide 2</p>
                        <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400?text=Slide%203" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption">
                        <h5>Slide 3</h5>
                        <p>Content for Slide 3</p>
                        <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Information Boxes -->


            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
        <!-- Slides -->
        <div class="carousel-inner">
            @foreach($data as $item)
            <div class="carousel-item active">
                <img src="{{ asset('berita/'.$item->user_id.'_fotoberita_'.$item->id.'.jpg') }}" class="d-block w-100"
                    alt="Slide 1">
                <div class="carousel-caption">
                    <h5>{{ $item->judul }}</h5>
                    <p>{{ Str::limit($item->deskripsi, 10) }}</p>
                    <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
                </div>
            </div>
            @endforeach
            {{-- <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Slide%202" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption">
                    <h5>Slide 2</h5>
                    <p>Content for Slide 2</p>
                    <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Slide%203" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption">
                    <h5>Slide 3</h5>
                    <p>Content for Slide 3</p>
                    <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
                </div>
            </div> --}}
        </div>

        <!-- Information Boxes -->
        <div class="container info-box-container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-box">
                        <h5 class="card-title">Badan Koordinasi (Badko)</h5>
                        <p class="card-text">6</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <h5 class="card-title">Cabang</h5>
                        <p class="card-text">1</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="info-box">
                        <h5 class="card-title">Komisariat</h5>
                        <p class="card-text">{{ $komisariat }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <h5 class="card-title">Total Anggota</h5>
                        <p class="card-text">{{ $anggota }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    // Aktifkan carousel
        document.addEventListener("DOMContentLoaded", function() {
            var myCarousel = document.querySelector("#myCarousel");
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 5000 // Interval waktu dalam milidetik (opsional)
            });
        });
</script>
@endsection

{{-- asdasdsa --}}
