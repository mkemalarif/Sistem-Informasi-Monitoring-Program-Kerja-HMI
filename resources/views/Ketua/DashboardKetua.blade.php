@extends('layout.ketua')

@section('container')
    <div class="container">
        <div class="row mt-5">
            <h1 class="mb-4">Program Kerja Yang Sedang Berlangsung</h1>

            @php
                $data = [
                    [
                        'judulProker' => 'Program Kerja 1',
                        'progressProker' => 75,
                        'tanggalProker' => '2023-06-19',
                        'penjelasan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit consectetur adipiscing elit.adipiscing elit.adipiscing elit.adipiscing elit.adipiscing elit.adipiscing elit.adipiscing elit.adipiscing elit.',
                        'problem' => '1 list masalah
                                        KERJA SALAH
                                        KERJA SALAH
                                        KERJA SALAH
                                        KERJA SALAH
                                        KERJA SALAH
                                       2. List Masalah
                                       KERJA SALAH
                                       KERJA SALAH
                                       KERJA SALAH
                                       KERJA SALAH
                                       KERJA SALAH
                                       KERJA SALAH
                                       KERJA SALAH',
                    ],
                    [
                        'judulProker' => 'Program Kerja 2',
                        'progressProker' => 100,
                        'tanggalProker' => '2023-06-20',
                        'penjelasan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit consectetur adipiscing elit . ',
                        'problem' => '1 list masalah Lorem ipsuasdasdasdasdasdasdsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss.',
                    ],
                ];
            @endphp

            @foreach ($data as $item)
                <div class="col-12 col-lg-6 mb-4">
                    <div class="card horizontal-card">
                        <div class="card-body d-flex align-items-center">
                            <div class="circle-bar blue pr-1">
                                <svg class="circle" width="80" height="80">
                                    <circle class="bar progress-bar-{{ $loop->iteration }}" cx="40" cy="40"
                                        r="36" stroke-dasharray="226"
                                        stroke-dashoffset="{{ 226 - (226 * $item['progressProker']) / 100 }}"></circle>
                                </svg>
                                <span class="progress">{{ $item['progressProker'] }}</span>
                            </div>
                            <div class="divider"></div>
                            <div>
                                <h5 class="card-title">{{ $item['judulProker'] }}</h5>
                                <p class="card-text">HMI CABANG MAKASSAR</p>
                                <p class="card-text date">{{ $item['tanggalProker'] }}</p>
                                <p class="card-text status">
                                    @if ($item['progressProker'] < 100)
                                        Belum Selesai
                                    @elseif ($item['progressProker'] == 100)
                                        Selesai
                                    @endif
                                </p>
                                <p class="card-text description" data-full-description="{{ $item['penjelasan'] }}">
                                    @if (strlen($item['penjelasan']) > 0)
                                        <span
                                            class="short-description">{{ substr($item['penjelasan'], 0, 100) . (strlen($item['penjelasan']) > 100 ? '...' : '') }}</span>
                                        @if (strlen($item['penjelasan']) > 100)
                                            <span class="full-description"
                                                style="display: none;">{{ $item['penjelasan'] }}</span>
                                        @endif
                                    @else
                                        {{ $item['penjelasan'] }}
                                    @endif
                                </p>

                                <p class="card-text problem" data-full-problem="{{ $item['problem'] }}">
                                    @if (strlen($item['problem']) > 0)
                                        <span
                                            class="short-problem">{{ substr($item['problem'], 0, 100) . (strlen($item['problem']) > 100 ? '...' : '') }}</span>
                                        @if (strlen($item['problem']) > 100)
                                            <span class="full-problem" style="display: none;">{{ $item['problem'] }}</span>
                                        @endif
                                    @else
                                        {{ $item['problem'] }}
                                    @endif
                                </p>






                                <div class="card-buttons">
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h2 id="popup-title" class="card-title">Judul Kegiatan</h2>
            <p id="popup-hmi-cabang" class="card-text"></p>
            <p id="popup-date" class="card-text"></p>
            <p id="popup-status" class="card-text"></p>
            <p id="popup-description" class="card-text"></p>
            <p id="popup-problem" class="card-text"></p>
        </div>
    </div>

    </div>
    </div>

    <div class="row mt-5">
        <h1 class="mb-4">Daftar Komisariat</h1>

        <div class="row" id="anggota-list">
            @foreach ($komisariat as $item)
                <div class="col-md-4 mb-4">
                    <a class="card" href="/{{ auth()->user()->jenisAkun }}/data-anggota/{{ $item->id }}"
                        style="text-decoration: none">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <i class="fas fa-users"></i>
                                <span class="space-between-icon">{{ $item->namaKomisariat }}</span>
                            </h5>

                            <hr>
                            <p class="card-text"><strong>Tahun Berdiri:</strong>{{ $item->tahunBerdiri }}
                            </p>
                            <p class="card-text"><strong>Status:</strong> <span
                                    class="badge @if ($item->status === 'Aktif') badge-success @elseif($item->status === 'Nonaktif') badge-danger @endif">{{ $item->status }}</span>
                            </p>
                            <p class="card-text"><strong>Angkatan Kader:</strong>{{ $item->angkatan }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
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
            color: #333;
            overflow: visible;
        }

        .divider {
            height: 100%;
            border-left: 1px solid #ccc;
            margin: 0 10px;
        }

        .card {
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            transform: scale(1);
            overflow: hidden;
        }

        .card.expanded {
            transform: scale(1.2);
            z-index: 999;
            transform-origin: center center;
            grid-column: span;
        }

        .card.expanded .card-text.description .short-description {
            max-height: unset;
            overflow: visible;
        }

        .card.expanded .card-text.description .full-description {
            display: block;
        }

        .card-text.description .short-description {
            max-height: 70px;
            overflow: hidden;
            transition: max-height 0.2s ease-in-out;
        }

        .card-text.description .full-description {
            display: none;
        }

        .card.expanded .card-text.description .full-description {
            max-height: unset;
            overflow: visible;
        }

        .popup {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .popup-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            position: relative;
        }

        .popup-content .close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        @keyframes circle-bar-progress {
            0% {
                stroke-dasharray: 0;
            }

            100% {
                stroke-dasharray: calc(226.08 * {
                            {
                            $item->progressAgenda
                        }
                    }

                    / 100) 226.08;
            }
        }

        .circle-bar.blue .bar {
            stroke: #00b0f0;
        }

        .card {
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
        }

        .card:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333333;
        }

        .card-body hr {
            margin-top: 10px;
            margin-bottom: 10px;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .card-text {
            font-size: 16px;
            margin-bottom: 6px;
            color: #777777;
        }

        .badge {
            padding: 6px 10px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 20px;
        }

        .badge-success {
            background-color: #28a745;
            color: #ffffff;
        }

        .badge-danger {
            background-color: #dc3545;
            color: #ffffff;
        }

        .row {
            justify-content: center;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            grid-gap: 20px;
        }

        .mt-5 {
            margin-top: 50px;
        }

        .mb-4 {
            margin-bottom: 30px;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: #333333;
        }
    </style>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const cards = document.querySelectorAll('.card');
        const popup = document.getElementById('popup');
        const popupTitle = document.getElementById('popup-title');
        const popupHMICabang = document.getElementById('popup-hmi-cabang');
        const popupDate = document.getElementById('popup-date');
        const popupStatus = document.getElementById('popup-status');
        const popupDescription = document.getElementById('popup-description');
        const popupProblem = document.getElementById('popup-problem');
        const closeBtn = document.querySelector('.close');

        cards.forEach(card => {
            card.addEventListener('click', () => {
                const title = card.querySelector('.card-title').textContent;
                const hmiCabang = card.querySelector('.card-text').textContent;
                const date = card.querySelector('.date').textContent;
                const status = card.querySelector('.status').textContent;
                const description = card.querySelector('.description').dataset.fullDescription;
                const problem = card.querySelector('.problem').dataset.fullProblem;

                popupTitle.textContent = title;
                popupHMICabang.textContent = hmiCabang;
                popupDate.textContent = date;
                popupStatus.textContent = status;
                popupDescription.textContent = description;
                popupProblem.textContent = problem;

                popup.style.display = 'block';
            });
        });

        closeBtn.addEventListener('click', () => {
            popup.style.display = 'none';
        });

        window.addEventListener('click', (e) => {
            if (e.target === popup) {
                popup.style.display = 'none';
            }
        });
    </script>
@endsection
