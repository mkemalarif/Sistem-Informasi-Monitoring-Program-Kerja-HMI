@extends('layout.ketua')

@section('container')
<div class="container">
    <div class="row mt-5">
        <h1 class="mb-4">Daftar Anggota</h1>

        <div class="row" id="anggota-list">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Anggota 1</h5>
                        <p class="card-text">Komisariat: Komisariat A</p>
                        <p class="card-text">Tahun Berdiri: 2020</p>
                        <p class="card-text">Status: Aktif</p>
                        <p class="card-text">Angkatan: 2021</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Anggota 2</h5>
                        <p class="card-text">Komisariat: Komisariat B</p>
                        <p class="card-text">Tahun Berdiri: 2019</p>
                        <p class="card-text">Status: Nonaktif</p>
                        <p class="card-text">Angkatan: 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Anggota 3</h5>
                        <p class="card-text">Komisariat: Komisariat C</p>
                        <p class="card-text">Tahun Berdiri: 2021</p>
                        <p class="card-text">Status: Aktif</p>
                        <p class="card-text">Angkatan: 2022</p>
                    </div>
                </div>
            </div>
            <!-- Add other member cards here -->
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
@endsection
