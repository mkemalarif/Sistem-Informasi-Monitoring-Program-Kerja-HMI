@extends('partial.main')

@section('container')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">Edogaru</span>
                <span></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">NOKADER</label>
                        <input type="text" class="form-control" placeholder="No Kader" value="">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Nama</label>
                        <input type="text" class="form-control" value="" placeholder="Nama">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Jenis Kelamin</label>
                        <input type="text" class="form-control" placeholder="Jenis Kelamin" value="">
                        <select class="form-control">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="sd">Laki-Laki</option>
                            <option value="smp">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control" placeholder="Tempat Tanggal Lahir" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Alamat</label>
                        <textarea class="form-control" placeholder="Alamat"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Angkatan</label>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="labels">Unggah Profil</label>
                        <input type="file" class="form-control-file" id="uploadImage">
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
