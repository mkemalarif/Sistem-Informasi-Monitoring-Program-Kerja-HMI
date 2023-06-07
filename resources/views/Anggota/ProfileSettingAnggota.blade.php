@extends('partial.main')

@section('container')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px"
                    src="{{ asset('profil/foto-profil'. $data->id. '.jpg') }}">
                <span class="font-weight-bold">{{ $data->id }}</span>
                <span></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <form action="/anggota/profile-setting/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ old('nama', $data->nama) }}"
                                placeholder="Nama">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">username</label>
                            <input name="username" type="text" class="form-control" placeholder="Tempat Tanggal Lahir"
                                value="{{ old('username', $data->username) }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">password</label>
                            <input name="password" type="password" class="form-control"
                                placeholder="silahkan diisi apabila perlu" value="">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Unggah Profil</label>
                            <input type="file" class="form-control-file" name="profile">
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection