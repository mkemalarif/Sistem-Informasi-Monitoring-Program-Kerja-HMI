{{-- @extends('partial.main') --}}
@extends('layout.anggota')

@section('container')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h1 class="mb-4">Daftar Berita</h1>

                    <table id="beritaTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)

                            <tr>
                                <td><a href="/anggota/cek-berita/{{ $item->id }}" style="text-decoration: none; color:black">{{ $item->judul }}</a></td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="/anggota/edit-berita/{{ $item->id }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                        <form action="/anggota/kontrol-berita/{{ $item->id }}" method="POST" class="d-inline">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger border-0" type="submit"
                                                onclick="return confirm('hapus data?')" name="delete">
                                                Hapus
                                            </button>
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Tambahkan baris sesuai dengan jumlah berita yang ada -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#beritaTable').DataTable();
    });
</script>

@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
@endpush