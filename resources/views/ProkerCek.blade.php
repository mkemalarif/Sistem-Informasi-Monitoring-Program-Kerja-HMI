@extends('partial.main')

@section('container')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Januari</h5>
                        <p class="card-text">Program Kerja</p>
                        <p class="card-text">Siapa yang kerja</p>
                        <div class="circle-bar blue">
                            <svg class="circle" width="120" height="120">
                                <circle class="bar" cx="60" cy="60" r="50"></circle>
                            </svg>
                            <span class="progress">30%</span>
                        </div>
                        <p class="card-text">22 Januari 2022</p>
                        <p class="card-text">Presentasi pengerjaan</p>
                        <p class="card-text">Status: Belum selesai, dalam progress</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Februari</h5>
                        <p class="card-text">Program Kerja</p>
                        <p class="card-text">Siapa yang kerja</p>
                        <div class="circle-bar green">
                            <svg class="circle" width="120" height="120">
                                <circle class="bar" cx="60" cy="60" r="50"></circle>
                            </svg>
                            <span class="progress">70%</span>
                        </div>
                        <p class="card-text">22 Februari 2022</p>
                        <p class="card-text">Presentasi pengerjaan</p>
                        <p class="card-text">Status: Belum selesai, dalam progress</p>
                    </div>
                </div>
            </div>

            <!-- Tambahkan elemen card lainnya di sini -->

            <div class="col-12 col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Oktober</h5>
                        <p class="card-text">Program Kerja</p>
                        <p class="card-text">Siapa yang kerja</p>
                        <div class="circle-bar blue">
                            <svg class="circle" width="120" height="120">
                                <circle class="bar" cx="60" cy="60" r="50"></circle>
                            </svg>
                            <span class="progress">40%</span>
                        </div>
                        <p class="card-text">22 Oktober 2022</p>
                        <p class="card-text">Presentasi pengerjaan</p>
                        <p class="card-text">Status: Belum selesai, dalam progress</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">November</h5>
                        <p class="card-text">Program Kerja</p>
                        <p class="card-text">Siapa yang kerja</p>
                        <div class="circle-bar green">
                            <svg class="circle" width="120" height="120">
                                <circle class="bar" cx="60" cy="60" r="50"></circle>
                            </svg>
                            <span class="progress">90%</span>
                        </div>
                        <p class="card-text">22 November 2022</p>
                        <p class="card-text">Presentasi pengerjaan</p>
                        <p class="card-text">Status: Belum selesai, dalam progress</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Desember</h5>
                        <p class="card-text">Program Kerja</p>
                        <p class="card-text">Siapa yang kerja</p>
                        <div class="circle-bar orange">
                            <svg class="circle" width="120" height="120">
                                <circle class="bar" cx="60" cy="60" r="50"></circle>
                            </svg>
                            <span class="progress">60%</span>
                        </div>
                        <p class="card-text">22 Desember 2022</p>
                        <p class="card-text">Presentasi pengerjaan</p>
                        <p class="card-text">Status: Belum selesai, dalam progress</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .circle-bar {
            position: relative;
            display: inline-block;
        }

        .circle-bar .circle {
            fill: none;
            stroke-width: 8px;
            stroke: #f1f1f1;
        }

        .circle-bar .bar {
            fill: none;
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
            font-size: 24px;
            font-weight: bold;
            color: #333;
            overflow: visible;
        }

        @keyframes circle-bar-progress {
            0% {
                stroke-dasharray: 0;
            }
            100% {
                stroke-dasharray: 314.16;
            }
        }

        .circle-bar.blue .bar {
            stroke: #00b0f0;
        }

        .circle-bar.green .bar {
            stroke: #00b050;
        }

        .circle-bar.orange .bar {
            stroke: #ff8c00;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .card-text:last-child {
            margin-bottom: 15px;
        }

        .card-body {
            padding: 15px;
            transition: all 0.3s;
        }

        .card-body:hover {
            transform: scale(1.02);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
    <script>
        // Ambil semua elemen circle-bar
        var circleBars = document.querySelectorAll(".circle-bar");

        // Loop melalui setiap elemen circle-bar
        circleBars.forEach(function (circleBar) {
          // Ambil persentase progres dari elemen circle-bar
          var progress = parseInt(circleBar.querySelector(".progress").innerText);

          // Hitung panjang garis bar berdasarkan persentase progres
          var circumference = 2 * Math.PI * 50; // 50 adalah radius lingkaran

          var offset = circumference - (progress / 100) * circumference;

          // Ubah atribut stroke-dasharray dan stroke-dashoffset pada elemen .bar
          var bar = circleBar.querySelector(".bar");
          bar.style.strokeDasharray = circumference;
          bar.style.strokeDashoffset = offset;
        });
      </script>

@endsection
