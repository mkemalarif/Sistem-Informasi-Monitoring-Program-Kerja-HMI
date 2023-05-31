=@extends('partial.main')

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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Judul Berita 1</td>
                                <td>2023-05-31</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Judul Berita 2</td>
                                <td>2023-05-30</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
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
Pastikan Anda telah membuat rute `berita.edit` di dalam file `web.php` dengan mengarahkannya ke fungsi yang sesuai dalam kontroler Anda. Misalnya, jika Anda menggunakan kontroler `BeritaController` dengan fungsi `edit`, berikut adalah contoh rute yang dapat Anda tambahkan:

```php
Route::get('/berita/{id}/edit', 'BeritaController@edit')->name('berita.edit');
