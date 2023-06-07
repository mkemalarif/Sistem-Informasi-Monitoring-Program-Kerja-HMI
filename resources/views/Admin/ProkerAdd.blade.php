@extends('layout.ketua')
@section('container')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <style>
        .card {
            max-width: 600px;
            margin: 0 auto;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            animation: slide-up 0.5s ease;
            background-color: #f9fafb;
        }

        .card-header {
            background-color: #007bff !important;
            border-bottom: none;
            padding: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
        }

        .card-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: 500;
            color: #333;
            display: block;
            margin-bottom: 10px;
        }

        .form-control {
            border-radius: 8px;
            border-color: #ced4da;
            transition: border-color 0.3s ease;
            padding: 12px;
            width: 100%;
            background-color: #fff;
        }

        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
            color: #fff;
            padding: 12px 24px;
            margin-top: 20px;
            display: inline-block;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-primary:focus {
            box-shadow: none;
        }

        .form-group .select2-container--default .select2-selection--single {
            height: auto;
            padding: 12px;
            background-color: #fff;
            border-color: #ced4da;
            border-radius: 8px;
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
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0" style="color: #fff;">Tambah Program Kerja</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Program Kerja</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="Selesai">Selesai</option>
                            <option value="Belum Selesai">Belum Selesai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="persentase">Persentase Selesai</label>
                        <input type="number" name="persentase" id="persentase" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="submit" class="btn btn-primary">Batal</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#status').select2();
        });
    </script>
@endsection
