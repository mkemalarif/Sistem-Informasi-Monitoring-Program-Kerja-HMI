<?php
$section = 'layout.'. auth()->user()->jenisAkun;
?>

@extends($section)

<style>
    .card {
        max-width: 600px;
        margin: 0 auto;
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        animation: slide-up 0.5s ease;
        background-color: #f9fafb;
    }

    .card-header {
        background-color: #4CAF50 !important;
        border-bottom: none;
        padding: 20px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        text-align: center;
    }

    @keyframes slide-up {
        0% {
            transform: translateY(20px);
            opacity: 0;
        }
    }
</style>

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0" style="color: #fff;">Registrasi Komisariat</h5>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="/{{ auth()->user()->jenisAkun }}/registrasi-komisariat">
                            @csrf

                            <div class="form-group">
                                <label for="nokomisariat">NOMOR KOMISARIAT:</label>
                                <input id="nokomisariat" type="text"
                                    class="form-control @error('nokomisariat') is-invalid @enderror"
                                    name="nokomisariat" value="{{ old('nokomisariat') }}" required autofocus>
                                @error('nokomisariat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="namaKomisariat">NAMA KOMISARIAT:</label>
                                <input id="namaKomisariat" type="text"
                                    class="form-control @error('namaKomisariat') is-invalid @enderror"
                                    name="namaKomisariat" value="{{ old('namaKomisariat') }}" required>
                                @error('namaKomisariat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tahunBerdiri">TAHUN BERDIRI:</label>
                                <input id="tahunBerdiri" type="number"
                                    class="form-control @error('tahunBerdiri') is-invalid @enderror"
                                    name="tahunBerdiri" required value="{{ old('tahunBerdiri') }}">
                                @error('tahunBerdiri')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">STATUS KOMISARIAT:</label>
                                <select id="status" class="form-control @error('status') is-invalid @enderror"
                                    name="status" required>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Nonaktif">Non Aktif</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="angkatan">ANGKATAN BASIC:</label>
                                <input id="angkatan" type="number"
                                    class="form-control @error('angkatan') is-invalid @enderror"
                                    name="angkatan" required value="{{ old('angkatan') }}">
                                @error('angkatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary btn-block"
                                    style="background-color: #4CAF50">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
