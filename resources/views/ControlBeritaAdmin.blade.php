@extends('partial.main')

@section('container')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h1 class="mb-4">Tabel Entry Berita</h1>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Judul Berita 1</td>
                                <td><img src="gambar1.jpg" alt="Gambar Berita 1"></td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success">Terima</a>
                                    <a href="#" class="btn btn-sm btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Judul Berita 2</td>
                                <td><img src="gambar2.jpg" alt="Gambar Berita 2"></td>
                                <td><span class="badge badge-success">Accepted</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success">Terima</a>
                                    <a href="#" class="btn btn-sm btn-danger">Tolak</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Judul Berita 3</td>
                                <td><img src="gambar3.jpg" alt="Gambar Berita 3"></td>
                                <td><span class="badge badge-danger">Rejected</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success">Terima</a>
                                    <a href="#" class="btn btn-sm btn-danger">Tolak</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
