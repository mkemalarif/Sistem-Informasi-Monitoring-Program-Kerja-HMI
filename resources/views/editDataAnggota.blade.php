<?php

$section = 'layout.'. auth()->user()->jenisAkun

?>

@extends($section)

@section('container')

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

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0" style="color: #fff;">Registrasi Anggota</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="/{{ auth()->user()->jenisAkun }}/edit-data-anggota/{{ $data->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nokader">NOKADER:</label>
                            <input id="nokader" type="text" class="form-control @error('nokader') is-invalid @enderror"
                                name="nokader" value="{{ old('nokader', $data->nokader) }}" required autofocus>
                            @error('nokader')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama">NAMA:</label>
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" value="{{ old('nama', $data->nama) }}" required>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jenisKelamin">JENIS KELAMIN:</label>
                            <select id="jenisKelamin" class="form-select @error('jenisKelamin') is-invalid @enderror"
                                name="jenisKelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenisKelamin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tempatLahir">TTL:</label>
                            <input id="tempatLahir" type="text"
                                class="form-control @error('tempatLahir') is-invalid @enderror" name="tempatLahir"
                                value="{{ old('tempatLahir', $data->tempatLahir) }}" required>
                            @error('tempatLahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggalLahir">Tanggal Lahir:</label>
                            <input id="tanggalLahir" type="date"
                                class="form-control @error('tanggalLahir') is-invalid @enderror" name="tanggalLahir"
                                value="{{ old('tanggalLahir', $data->tanggalLahir) }}" required>
                            @error('tanggalLahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">ALAMAT:</label>
                            <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat" rows="3" required>{{ old('alamat', $data->alamat) }}</textarea>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="angkatan">ANGKATAN:</label>
                            <input id="angkatan" type="number"
                                class="form-control @error('angkatan') is-invalid @enderror" name="angkatan"
                                value="{{ old('angkatan', $data->angkatan) }}" required>
                            @error('angkatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="komisariat_id">ASAL KOMISARIAT:</label>
                            <select id="komisariat_id" class="form-select @error('komisariat_id') is-invalid @enderror"
                                name="komisariat_id" required>
                                @foreach ($komisariat as $item)
                                @if(old('komisariat_id', $data->komisariat_id) === $item->id)
                                <option selected value={{ $item->id }}>
                                    {{ $item->namaKomisariat }}
                                </option>
                                @else
                                <option value="{{ $item->id }}">
                                    {{ $item->namaKomisariat }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                            @error('komisariat_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block" , style="background-color: #4CAF50">
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
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>