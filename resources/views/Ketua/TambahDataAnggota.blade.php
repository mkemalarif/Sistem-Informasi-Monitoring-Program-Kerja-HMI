@extends('partial.main')

@section('container')

<div class="container-xl mt-5">
    <div class="card bg-light shadow-sm">
        <div class="card-body p-5">
            <h3 class="card-title text-center mb-4">Tambah Data Anggota</h3>
            <form action="" method="POST" class="mt-4">
                @csrf
                <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" id="ttl" name="ttl" required>
                </div>
                <div class="form-group">
                    <label for="komisariat" class="form-label">Komisariat</label>
                    <select class="form-select" id="komisariat" name="komisariat" required>
                        <option value="Komisariat A">Komisariat A</option>
                        <option value="Komisariat B">Komisariat B</option>
                        <option value="Komisariat C">Komisariat C</option>
                        <option value="Komisariat D">Komisariat D</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="angkatan" class="form-label">Angkatan</label>
                    <input type="text" class="form-control" id="angkatan" name="angkatan" required>
                </div>
                
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-lg px-5">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 10px;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        background-color: #f8f9fa;
    }

    .card-title {
        color: #333;
        font-weight: bold;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 12px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: #4e73df;
        box-shadow: 0 0 8px rgba(78, 115, 223, 0.3);
    }

    .form-select {
        appearance: none;
        padding: 12px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='%23333333'%3E%3Cpath d='M0 7l7-7 7 7H0zm20 13l-7 7-7-7h14zM4 6h12v2H4zm0 4h12v2H4zm0 4h12v2H4z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 16px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
        transition: background-color 0.3s ease, border-color 0.3s ease;
        padding: 12px 25px;
        font-size: 16px;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: #2653d4;
        border-color: #2653d4;
    }
</style>

@endsection
