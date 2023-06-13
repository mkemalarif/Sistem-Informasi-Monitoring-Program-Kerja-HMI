@if(auth()->user()->jenisAkun === "ketua")
@extends('layout.ketua')
@elseif(auth()->user()->jenisAkun === "admin")
@extends('layout.admin')
@elseif(auth()->user()->jenisAkun === "anggota")
@extends('layout.anggota')
@endif

@section('container')
<div class="container">
    <div class="row mt-5">
        <h1 class="mb-4">Daftar Komisariat</h1>

        <div class="row" id="anggota-list">
            @foreach ($data as $item)
            <div class="col-md-4 mb-4">
                <a class="card" href="#" style="text-decoration: none">
                    <div class="card-body">
                        <h5 class="card-title text-center"><i class="fas fa-users"></i>{{ $item->namaKomisariat }}</h5>
                        <hr>
                        <p class="card-text"><strong>Tahun Berdiri:</strong>{{ $item->tahunBerdiri }}</p>
                        <p class="card-text"><strong>Status:</strong> <span
                                class="badge @if($item->status === 'Aktif') badge-success @elseif($item->status === 'Nonaktif') badge-danger @endif">{{
                                $item->status
                                }}</span></p>
                        <p class="card-text"><strong>Angkatan Kader:</strong>{{ $item->angkatan }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 8px;
        background-color: #ffffff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        height: 100%;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333333;
    }

    .card-body hr {
        margin-top: 10px;
        margin-bottom: 10px;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .card-text {
        font-size: 16px;
        margin-bottom: 6px;
        color: #777777;
    }

    .badge {
        padding: 6px 10px;
        font-size: 14px;
        font-weight: bold;
        border-radius: 20px;
    }

    .badge-success {
        background-color: #28a745;
        color: #ffffff;
    }

    .badge-danger {
        background-color: #dc3545;
        color: #ffffff;
    }

    .row {
        justify-content: center;
    }

    .mt-5 {
        margin-top: 50px;
    }

    .mb-4 {
        margin-bottom: 30px;
    }

    h1 {
        text-align: center;
        font-size: 36px;
        font-weight: bold;
        color: #333333;
    }
</style>
@endsection