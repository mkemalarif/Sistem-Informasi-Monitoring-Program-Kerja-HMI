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
                            <input id="nokomisariat" type="text" class="form-control @error('nokomisariat') is-invalid @enderror" name="nokomisariat" value="{{ old('nokomisariat') }}" required autofocus>
                            @error('nokomisariat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="namakomisariat">NAMA KOMISARIAT:</label>
                            <input id="namakomisariat" type="text" class="form-control @error('namakomisariat') is-invalid @enderror" name="namakomisariat" value="{{ old('namakomisariat') }}" required>
                            @error('namakomisariat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="tahunberdiri">TAHUN BERDIRI:</label>
                            <input id="tahunberdiri" type="number" class="form-control @error('tahunberdiri') is-invalid @enderror" name="tahunberdiri" rows="3" required>{{ old('tahunberdiri') }}</textarea>
                            @error('tahunberdiri')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">STATUS KOMISARIAT:</label>
                            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required>
                                <option value="">Pilih Status Komisariat</option>
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
                            <label for="angkatanbasic">ANGKATAN BASIC:</label>
                            <input id="angkatanbasic" type="number" class="form-control @error('angkatanbasic') is-invalid @enderror" name="angkatanbasic" rows="3" required>{{ old('angkatanbasic') }}</textarea>
                            @error('angkatanbasic')
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
