@extends('partial.main')

@section('container')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h1 class="mb-4">Tabel Entry Berita</h1>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th class="align-middle">Judul</th>
                                    <th class="align-middle">Gambar</th>
                                    <th class="align-middle">Status</th>
                                    <th class="align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td class="align-middle">{{ $item->judul }}</td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle">{{ $item->status }}</td>
                                    <td>
                                        <form method="POST" action="/admin/validasi-berita/{artikel}">
                                            @csrf
                                            @method('PUT')

                                            <button class="btn btn-sm btn-success" type="submit"><i
                                                    class="fas fa-check"></i> Terima</a></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection