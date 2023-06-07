@extends('layout.ketua')

@section('container')
<div class="container">
    <div class="row mt-5">
        <h1 class="mb-4">Program Kerja Yang Sedang Berlangsung</h1>

        {{-- @php
        $slicedProgramKerja = [
        foreach ($data as $proker) {
        # code...
        [
        'judul' => $proker->judulAgenda,
        'cabang' => 'HMI Cabang Makassar',
        'tanggal' => $proker->tanggalAgenda,
        'status' => if($proker->progressAgenda < 100){ 'Belum Selesai' } else { 'Selesai' }, 'progress'=> '22%',
            'deskripsi' => 'Kegiatan Kerja',
            'keterangan' => 'Presentasi pengerjaan',
            ],
            }
            ];

            $limit = 10; // Limit the number of program kerja to display
            $slicedProgramKerja = array_slice($slicedProgramKerja, 0, $limit);
            @endphp --}}

            @foreach ($data as $item)
            <div class="col-12 col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="circle-bar blue pr-1">
                            <svg class="circle" width="80" height="80">
                                <circle class="bar" cx="40" cy="40" r="36"></circle>
                            </svg>
                            <span class="progress">{{ $item->progressAgenda }}</span>
                        </div>
                        <div class="divider"></div>
                        <div>
                            <h5 class="card-title">{{ $item->judulAgenda }}</h5>
                            <p class="card-text">HMI CABANG MAKASSAR</p>
                            <p class="card-text date">{{ $item->tanggalAgenda }}</p>
                            <p class="card-text status">
                                @if($item->progressAgenda < 100) Belum Selesai @elseif($item->progressAgenda = 100)
                                    Selesai
                                    @endif
                            </p>
                            {{-- @if ($item['deskripsi'])
                            <p class="card-text">{{ $item['deskripsi'] }}</p>
                            @endif --}}
                            {{-- @if ($item['keterangan'])
                            <p class="card-text">{{ $item['keterangan'] }}</p>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

<style>
    .circle-bar {
        position: relative;
        display: inline-block;
    }

    .circle-bar .circle {
        fill: none;
        stroke-width: 6px;
        stroke: #f1f1f1;
    }

    .circle-bar .bar {
        fill: none;
        stroke-width: 6px;
        stroke-linecap: round;
        stroke: #00b0f0;
        transform-origin: 50% 50%;
        transform: rotate(-90deg);
        animation: circle-bar-progress 1s linear forwards;
    }

    .circle-bar .progress {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 18px;
        font-weight: bold;
        color: #00b0f0;
    }

    .divider {
        height: 70px;
        width: 2px;
        background-color: #f1f1f1;
        margin-left: 20px;
        margin-right: 20px;
    }
</style>


<!-- Add this script tag to include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Add this script tag to include DataTables -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTables
        $('#program-kerja-table').DataTable();

        // Circular Progress Bar Animation
        var circles = document.querySelectorAll('.circle');
        circles.forEach(function(circle) {
            var progress = parseInt(circle.nextElementSibling.textContent);
            var radius = circle.getAttribute('r');
            var circumference = 2 * Math.PI * radius;
            var offset = circumference * (100 - progress) / 100;

            circle.style.strokeDasharray = circumference;
            circle.style.strokeDashoffset = offset;
        });
    });
</script>

@endsection