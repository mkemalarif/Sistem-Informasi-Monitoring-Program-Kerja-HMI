@extends('partial.main')

@section('container')
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="circle-bar blue pr-1">
                        <svg class="circle" width="80" height="80">
                            <circle class="bar" cx="40" cy="40" r="36"></circle>
                        </svg>
                        <span class="progress">22%</span>
                    </div>
                    <div class="divider"></div>
                    <div>
                        <h5 class="card-title">Program Kerja</h5>
                        <p class="card-text">HMI Cabang Pare-Pare</p>
                        <p class="card-text date">Selasa, 22 Oktober 2022</p>
                        <p class="card-text status">Status: Belum selesai, dalam progress</p>
                    </div>
                    <p class="card-text">22 Desember 2022</p>
                    <p class="card-text">Presentasi pengerjaan</p>
                    <p class="card-text">Status: Belum selesai, dalam progress</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="circle-bar blue pr-1">
                        <svg class="circle" width="80" height="80">
                            <circle class="bar" cx="40" cy="40" r="36"></circle>
                        </svg>
                        <span class="progress">50%</span>
                    </div>
                    <div class="divider"></div>
                    <div>
                        <h5 class="card-title">Program Kerja</h5>
                        <p class="card-text">HMI Cabang Maros</p>
                        <p class="card-text date">Rabu, 22 Desember 2022</p>
                        <p class="card-text status">Status: Belum selesai, dalam progress</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="circle-bar blue pr-1">
                        <svg class="circle" width="80" height="80">
                            <circle class="bar" cx="40" cy="40" r="36"></circle>
                        </svg>
                        <span class="progress">50%</span>
                    </div>
                    <div class="divider"></div>
                    <div>
                        <h5 class="card-title">Program Kerja</h5>
                        <p class="card-text">HMI Cabang Maros</p>
                        <p class="card-text date">Rabu, 15 Desember 2023</p>
                        <p class="card-text status">Status: Belum selesai, dalam progress</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeat the above card structure for other cards -->

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

        stroke-width: 8px;

        stroke: #f1f1f1;
    }

    .circle-bar .bar {
        fill: none;

        stroke-width: 6px;

        stroke-width: 8px;

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

        font-size: 24px;

        font-weight: bold;
        color: #333;
        overflow: visible;
    }

    .divider {
        height: 100%;
        border-left: 1px solid #ccc;
        margin: 0 10px;
    }

    @keyframes circle-bar-progress {
        0% {
            stroke-dasharray: 0;
        }

        100% {
            stroke-dasharray: 226.08;
        }
    }

    .circle-bar.blue .bar {
        stroke: #00b0f0;
    }

    .card {
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .card-text {
        font-size: 18px;
        margin-bottom: 4px;
    }

    .card-text.date,
    .card-text.status {
        font-size: 16px;
        color: #777777;
    }
</style>

<script>
    // Ambil semua elemen circle-bar
    var circleBars = document.querySelectorAll(".circle-bar");

    // Loop melalui setiap elemen circle-bar
    circleBars.forEach(function(circleBar) {
        // Ambil persentase progres dari elemen circle-bar
        var progress = parseInt(circleBar.querySelector(".progress").innerText);

        // Hitung panjang garis bar berdasarkan persentase progres
        var circumference = 2 * Math.PI * 36; // 36 adalah radius lingkaran

        var offset = circumference - (progress / 100) * circumference;

        // Ubah atribut stroke-dasharray dan stroke-dashoffset pada elemen .bar
        var bar = circleBar.querySelector(".bar");
        bar.style.strokeDasharray = circumference;
        bar.style.strokeDashoffset = offset;
    });
</script>
@endsection
