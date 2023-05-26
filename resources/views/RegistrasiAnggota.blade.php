{{-- @extends('partial.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Registrasi Anggota</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group">
                            <label for="nokader">NOKADER:</label>
                            <input id="nokader" type="text" class="form-control @error('nokader') is-invalid @enderror"
                                name="nokader" value="{{ old('nokader') }}" required autofocus>
                            @error('nokader')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama">NAMA:</label>
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jenisKelamin">JENIS KELAMIN:</label>
                            <select id="jenisKelamin" class="form-control @error('jenisKelamin') is-invalid @enderror" name="jenisKelamin" required>
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
                            <input id="tempatLahir" type="text" class="form-control @error('tempatLahir') is-invalid @enderror" name="tempatLahir" value="{{ old('tempatLahir') }}" required>
                            @error('tempatLahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tanggalLahir">Tanggal Lahir:</label>
                            <input id="tanggalLahir" type="date" class="form-control @error('tanggalLahir') is-invalid @enderror" name="tanggalLahir" value="{{ old('tanggalLahir') }}" required>
                            @error('tanggalLahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">ALAMAT:</label>
                            <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
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
                                value="{{ old('angkatan') }}" required>
                            @error('angkatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="komisariat_id">ASAL KOMISARIAT:</label>
                            <select id="komisariat_id" class="form-control @error('komisariat_id') is-invalid @enderror" name="komisariat_id" required>
                                <option value="">Pilih Asal komisariat</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('komisariat_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                Simpan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}