@extends('layout.ketua')

@section('container')
    <div class="container">
        <div class="row mt-5">
            <h1 class="mb-4">Program Kerja Yang Sedang Berlangsung</h1>

            @foreach ($data as $item)
                <div class="col-12 col-lg-6 mb-4">
                    <div class="card h-100 expanded" onclick="expandCard(this)">
                        <div class="card-body d-flex align-items-center">
                            <div class="circle-bar blue pr-1">
                                <svg class="circle" width="80" height="80">
                                    <circle class="bar progress-bar-{{ $loop->iteration }}" cx="40" cy="40"
                                        r="36" stroke-dasharray="226"
                                        stroke-dashoffset="{{ 226 - (226 * $item->progressAgenda) / 100 }}"></circle>
                                </svg>
                                <span class="progress">{{ $item->progressAgenda }}</span>
                            </div>
                            <div class="divider"></div>
                            <div>
                                <h5 class="card-title">{{ $item->judulAgenda }}</h5>
                                <p class="card-text">HMI CABANG MAKASSAR</p>
                                <p class="card-text date">{{ $item->tanggalAgenda }}</p>
                                <p class="card-text status">
                                    @if ($item->progressAgenda < 100)
                                        Belum Selesai
                                    @elseif ($item->progressAgenda == 100)
                                        Selesai
                                    @endif
                                </p>
                                <div class="card-text description">
                                    <p class="short-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Sed
                                        at
                                        nunc vitae sem mattis maximus in nec tortor. Fusce eget ipsum vitae ex finibus
                                        efficitur.
                                        Nam
                                        non libero sed risus feugiat consectetur. Cras ac malesuada mi. Vestibulum ante
                                        ipsum
                                        primis
                                        in
                                        faucibus orci luctus et ultrices posuere cubilia curae; Morbi a sapien id turpis
                                        hendrerit
                                        egestas. Vivamus sit amet elit massa. Proin id volutpat nisi. Curabitur sagittis
                                        justo
                                        id
                                        arcu
                                        mollis varius. Phasellus ut lectus non elit ultrices eleifend. Sed et arcu
                                        ullamcorper,
                                        pulvinar
                                        ante vel, ultrices dolor. Sed ac rhoncus enim, id pulvinar ligula. Curabitur
                                        tincidunt
                                        nunc
                                        nec
                                        tortor sollicitudin sollicitudin. Nullam convallis neque in purus aliquam
                                        sollicitudin</p>
                                    <p class="full-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                        at
                                        nunc vitae sem mattis maximus in nec tortor. Fusce eget ipsum vitae ex finibus
                                        efficitur.
                                        Nam
                                        non libero sed risus feugiat consectetur. Cras ac malesuada mi. Vestibulum ante
                                        ipsum
                                        primis
                                        in
                                        faucibus orci luctus et ultrices posuere cubilia curae; Morbi a sapien id turpis
                                        hendrerit
                                        egestas. Vivamus sit amet elit massa. Proin id volutpat nisi. Curabitur sagittis
                                        justo
                                        id
                                        arcu
                                        mollis varius. Phasellus ut lectus non elit ultrices eleifend. Sed et arcu
                                        ullamcorper,
                                        pulvinar
                                        ante vel, ultrices dolor. Sed ac rhoncus enim, id pulvinar ligula. Curabitur
                                        tincidunt
                                        nunc
                                        nec
                                        tortor sollicitudin sollicitudin. Nullam convallis neque in purus aliquam
                                        sollicitudin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                                <p class="card-text"><strong>Tahun Berdiri:</strong>{{ $item->tahunBerdiri }}</p>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function expandCard(card) {
            card.classList.toggle('expanded');
            var description = card.querySelector('.card-text.description p');
            if (description) {
                description.classList.toggle('expanded');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach(function(card) {
                card.addEventListener('click', function() {
                    expandCard(this);
                });
            });
        });
    </script>

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
             grid-column: span ;
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

        @keyframes circle-bar-progress {
            0% {
                stroke-dasharray: 0;
            }

            100% {
                stroke-dasharray: calc(226.08 * {{ $item->progressAgenda }} / 100) 226.08;
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
        function expandCard(card) {
            card.classList.toggle('expanded');
            var description = card.querySelector('.card-text.description p');
            if (description) {
                description.classList.toggle('expanded');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach(function(card) {
                card.addEventListener('click', function() {
                    expandCard(this);
                });
            });
        });
    </script>
@endsection
