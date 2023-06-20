{{-- resources/views/form.blade.php --}}

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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="/{{ auth()->user()->jenisAkun }}/registrasi-member">
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

                        <!-- Form fields continued... -->

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #4CAF50">
                                Simpan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <script>
        $(document).ready(function() {
            // Flash message handling
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}', 'Error');
                @endforeach
            @endif
        });
    </script>
@endsection
