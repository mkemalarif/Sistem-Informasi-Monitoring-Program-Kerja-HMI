<!-- tasks.blade.php -->

@extends('partial.main')

@section('container')
    <div class="container">
        <h2 class="text-center mb-4">Daftar Program Kerja</h2>
        <div class="card p-3 shadow">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama Program Kerja</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Persentase Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Program Kerja 1</td>
                            <td>Deskripsi Program Kerja 1</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>Program Kerja 2</td>
                            <td>Deskripsi Program Kerja 2</td>
                            <td><span class="badge badge-warning">Belum Selesai</span></td>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <td>Program Kerja 3</td>
                            <td>Deskripsi Program Kerja 3</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                            <td>75%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">Tambah Program Kerja</a>
            </div>
            <div class="text-muted text-center mt-3">
                <small>Last updated: {{ date('Y-m-d H:i:s') }}</small>
            </div>
        </div>
    </div>
@endsection
