@extends('layout.ketua')

@section('container')
<div class="container">
    <div class="row mt-5">
        <h1 class="mb-4">Daftar Anggota</h1>

        <div class="row" id="anggota-list">
            @foreach ($anggota as $key => $member)
            <div class="col-md-6">
                <div class="card fade-in">
                    <div class="card-body">
                        <h5 class="card-title">Anggota {{ $key + 1 }}</h5>
                        <p class="card-text">Komisariat: {{ $member['komisariat'] }}</p>
                        <p class="card-text">Tahun Berdiri: {{ $member['tahun'] }}</p>
                        <p class="card-text">Status: {{ $member['status'] }}</p>
                        <p class="card-text">Angkatan: {{ $member['angkatan'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Add smooth animation when the page loads
    window.addEventListener('load', function() {
        const anggotaList = document.getElementById('anggota-list');
        anggotaList.classList.add('fade-in');
    });
</script>

<style>
    .fade-in {
        opacity: 0;
        transition: opacity 0.3s ease-in;
    }

    .fade-in.show {
        opacity: 1;
    }
</style>
@endsection
