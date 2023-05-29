@extends('partial.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Registrasi Komisariat</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group">
                            <label for="nokomisariat">NOMOR KOMISARIAT:</label>
                            <input id="nokomisariat" type="text"
                                class="form-control @error('nokomisariat') is-invalid @enderror" name="nokomisariat"
                                value="{{ old('nokomisariat') }}" required autofocus>
                            @error('nokomisariat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="namaKomisariat">NAMA KOMISARIAT:</label>
                            <input id="namaKomisariat" type="text"
                                class="form-control @error('namaKomisariat') is-invalid @enderror" name="namaKomisariat"
                                value="{{ old('namaKomisariat') }}" required>
                            @error('namaKomisariat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="tahunBerdiri">TAHUN BERDIRI:</label>
                            <input id="tahunBerdiri" type="number"
                                class="form-control @error('tahunBerdiri') is-invalid @enderror" name="tahunBerdiri"
                                rows="3" required>{{ old('tahunBerdiri') }}</textarea>
                            @error('tahunBerdiri')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">STATUS KOMISARIAT:</label>
                            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status"
                                required>
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
                                class="form-control @error('angkatan') is-invalid @enderror" name="angkatan" rows="3"
                                required>{{ old('angkatan') }}</textarea>
                            @error('angkatan')
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
@endsection