@extends('partial.main')

@section('container')
    <div class="container mt-5">
        <h1>Data Anggota</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('assets/foto1.jpg') }}" class="card-img-top" alt="Member 1" style="height: auto; width: 90px;">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">NOK: 001</h5>
                                            <p class="card-text">Nama: John Doe</p>
                                            <p class="card-text">Jenis Kelamin: Laki-laki</p>
                                            <p class="card-text">TTL: 1 January 1990</p>
                                            <p class="card-text">Komisariat: Komisariat A</p>
                                            <p class="card-text">Alamat: Jl. Contoh Alamat No. 1</p>
                                            <p class="card-text">Angkatan: 2010</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('assets/member2.jpg') }}" class="card-img-top" alt="Member 2" style="height: auto; width: 90px;">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">NOK: 002</h5>
                                            <p class="card-text">Nama: Jane Smith</p>
                                            <p class="card-text">Jenis Kelamin: Perempuan</p>
                                            <p class="card-text">TTL: 15 February 1995</p>
                                            <p class="card-text">Komisariat: Komisariat B</p>
                                            <p class="card-text">Alamat: Jl. Contoh Alamat No. 2</p>
                                            <p class="card-text">Angkatan: 2015</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="row">
                                    <div class="col-4 ">
                                        <img src="{{ asset('assets/member3.jpg') }}" class="card-img-top " alt="Member 3" style="height: auto; width: 90px; image-adjust">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">NOK: 003</h5>
                                            <p class="card-text">Nama: David Johnson</p>
                                            <p class="card-text">Jenis Kelamin: Laki-laki</p>
                                            <p class="card-text">TTL: 10 March 1992</p>
                                            <p class="card-text">Komisariat: Komisariat C</p>
                                            <p class="card-text">Alamat: Jl. Contoh Alamat No. 3</p>
                                            <p class="card-text">Angkatan: 2012</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
@endsection
