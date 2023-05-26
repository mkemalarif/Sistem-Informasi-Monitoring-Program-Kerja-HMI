@extends('partial.main')

@section('container')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">JUDUL</label>
                            <input type="text" class="form-control" name="title" value="Judul Berita" placeholder="Masukkan Judul Post">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">KONTEN</label>
                            <textarea class="form-control ckeditor" name="content" rows="5" placeholder="Masukkan Konten Post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan dignissim velit, a iaculis ipsum pellentesque et. Fusce cursus varius orci eu facilisis. Etiam sit amet eleifend eros. Donec in sagittis purus, vel placerat mauris. Donec mattis odio nec risus eleifend, eget congue erat sollicitudin. Aliquam non nulla ac enim consequat vulputate.</textarea>
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>

@endsection
