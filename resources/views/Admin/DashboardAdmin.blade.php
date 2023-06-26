@extends('layout.admin')

@section('container')
    <div class="container" mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h1 class="mb-4">Tabel Entry Berita</h1>
                        <div class="mb-4">
                            <input id="searchInput" type="text" class="form-control" placeholder="Search">
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="beritaTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="align-middle">Judul</th>
                                        <th class="align-middle">Gambar</th>
                                        <th class="align-middle">Status</th>
                                        <th class="align-middle">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="align-middle">{{ $item->judul }}</td>
                                            <td class="align-middle text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('berita/' . $item->user_id . '_fotoberita_' . $item->id . '.jpg') }}"
                                                    alt="">
                                            </td>
                                            <td class="align-middle">{{ $item->status }}</td>
                                            <td class="align-middle text-center">
                                                <form method="POST" action="/admin/validasi-berita/{{ $item->id }}">
                                                    @csrf
                                                    @method('PUT')

                                                    <button class="btn btn-sm btn-success" type="submit"><i
                                                            class="fas fa-check"></i> Terima</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            {{-- {{ $data->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5">
            <h1 class="mb-4">Program Kerja Yang Sedang Berlangsung</h1>

            @foreach ($proker as $item)
                <div class="col-12 col-lg-6 mb-4">
                    <div class="card h-100 card-clickable"
                        onclick="showPopup('{{ $item->judulAgenda }}', 'HMI CABANG MAKASSAR', '{{ $item->tanggalAgenda }}', '{{ $item->progressAgenda }}', '', '')">
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
                                @if ($item->progressAgenda < 100) Belum Selesai @elseif ($item->progresAgenda ==100)
                                    Selesai @endif </p>
                            <p class="card-text description" data-full-description="{{ $item->deskripsi }}">
                                @if (strlen($item->deskripsi) > 0)
                                <span class="short-description">{{ substr($item->deskripsi, 0, 100) .
                                    (strlen($item->deskripsi) > 100 ? '...' : '') }}</span>
                                @if (strlen($item->deskripsi) > 100)
                                <span class="full-description" style="display: none;">{{ $item->deskripsi
                                    }}</span>
                                @endif
                                @else
                                {{ $item->dekripsi }}
                                @endif
                            </p>

                            <p class="card-text problem" data-full-problem="{{ $item->masalah }}">
                                @if (strlen($item->masalah) > 0)
                                <span class="short-problem">{{ substr($item->masalah, 0, 100) .
                                    (strlen($item['penjelasan']) > 100 ? '...' : '') }}</span>
                                @if (strlen($item->masalah) > 100)
                                <span class="full-problem" style="display: none;">{{ $item->masalah }}</span>
                                @endif
                                @else
                                {{ $item->masalah }}
                                @endif
                            </p>
                            <div class="card-buttons">
                                <a href="{{ auth()->user()->jenisAkun }}/edit-proker/{{ $item->id }}"
                                    class="btn btn-primary">Edit</a>
                                <form action="/{{ auth()->user()->jenisAkun }}/hapus-proker/{{ $item->id }}" method="POST" class="col-3">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">delete</button>
                                  </form>
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


    <script>
        function searchTable() {
            // Get the search input value
            var input = document.getElementById("searchInput");
            var filter = input.value.toUpperCase();

            // Get the table and table rows
            var table = document.getElementById("beritaTable");
            var rows = table.getElementsByTagName("tr");

            // Loop through all table rows and hide those that do not match the search query
            for (var i = 0; i < rows.length; i++) {
                var titleColumn = rows[i].getElementsByTagName("td")[0];
                if (titleColumn) {
                    var title = titleColumn.textContent || titleColumn.innerText;
                    if (title.toUpperCase().indexOf(filter) > -1) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }
        }

        // Add an event listener to the search input
        document.getElementById("searchInput").addEventListener("keyup", searchTable);
    </script>
@endsection
