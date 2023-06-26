    @extends('layout.ketua')
    @section('container')
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown",
                style="background-color: #4CAF50">Pilih Periode</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/ketua/rekap-proker">Semua</a></li>
                @foreach($periode as $item)
                <li><a class="dropdown-item" href="/ketua/rekap-proker/{{ $item->periode }}">{{ $item->periode }}</a></li>
                @endforeach
                <!-- Tambahkan opsi periode lainnya sesuai kebutuhan -->
            </ul>
        </div>

        <table class="customTable">
            <thead>
                <tr>
                    <th>Judul Agenda</th>
                    <th>Deskripsi</th>
                    <th>Masalah</th>
                    <th>Tanggal Agenda</th>
                    <th>Progress Anda</th>
                    <th>Periode</th>
                </tr>
            </thead>
            <tbody>
                @php
                 $count = 0;   
                @endphp
                @foreach ($data as $item)         
                <tr>
                    <td class="center">{{ $item->judulAgenda }}</td>
                    <td class="center">
                        <span class="full-description">{{ $item->deskripsi }}</span>
                    </td>
                    <td class="center">
                        <span class="full-description">{{$item->masalah}}</span>
                    </td>
                    <td class="center">{{ date('d M Y', strtotime($item->tanggalAgenda)) }}</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="
                            @if($item->progressAgenda === 0)
                             background-color: #c52828;
                             width: 100%;
                             @else
                             background-color: #4CAF50;
                             width: {{ $item->progressAgenda }}%;
                             @endif"></div>
                            <span class="progress-label 
                            @if( 0 < $item->progressAgenda &&   $item->progressAgenda < 100)
                            text-dark
                            @endif">{{ $item->progressAgenda }}% <?php $count=$count+$item->progressAgenda ?></span>
                        </div>
                    </td>
                    <td class="center">{{ $item->periode }}</td>
                </tr>
                @endforeach
                @if($counter === 1)
                <tr>
                    <td colspan="4" class="text-right" style="color: #FFFFFF;background-color: #4CAF50;"><strong>Total</strong></td>
                    <td class="center">{{ $count }}</td>
                    <td class="center">{{ $item->periode }}</td>
                </tr>
                @endif

                <!-- Tambahkan baris tabel lainnya sesuai kebutuhan -->
            </tbody>
        </table>


        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup()">&times;</span>

                <div id="popup-description"></div>
                <h2 id="judulAgenda">Agenda :</h2>
                <p id="deskripsi"></p>
                <p id="masalah"></p>
                <p id="tanggalAgenda"></p>
                <p id="progress"></p>
                <p id="periode"></p>
            </div>
        </div>


        <style>
            table.customTable {
                width: 100%;
                background-color: #FFFFFF;
                border-collapse: collapse;
                border: 2px ridge #7EA8F8;
                color: #000000;
            }

            table.customTable td,
            table.customTable th {
                border: 2px ridge #7EA8F8;
                padding: 10px;
            }

            table.customTable thead {
                background-color: #4CAF50;
                color: #FFFFFF;
                text-align: center;
            }

            table.customTable tbody tr:nth-child(even) {
                background-color: #F2F2F2;
            }

            table.customTable tbody tr:hover {
                background-color: #D4E6F1;
            }

            td.center {
                text-align: center;
            }

            .progress-container {
                position: relative;
                width: 100%;
                height: 20px;
                background-color: #F2F2F2;
                border-radius: 4px;
                overflow: hidden;
            }

            .progress-bar {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                /* background-color: #c52828; */
                transition: width 0.3s ease-in-out;
            }

            .progress-label {
                position: absolute;
                top: 0;
                left: 50%;
                transform: translateX(-50%);
                line-height: 20px;
                color: #FFFFFF;
                font-weight: bold;
            }

            .popup {
                display: none;
                position: fixed;
                z-index: 1;
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

            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
                position: absolute;
                top: 0;
                right: 10px;
                cursor: pointer;
            }

            #popup-description {
                margin-top: 20px;
                white-space: pre-line;
                /* Tambahkan ini untuk mempertahankan pemisahan baris dalam teks */
            }

            .close:hover {
                color: #000;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button {
                padding: 0.5em 1em !important;
            }

            .progress-container {
                position: relative;
                width: 100%;
                height: 20px;
                background-color: #F2F2F2;
                border-radius: 4px;
                overflow: hidden;
            }

            .progress-bar {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                background-color: #4CAF50;
                transition: width 0.3s ease-in-out;
            }

            .progress-label {
                position: absolute;
                top: 0;
                left: 50%;
                transform: translateX(-50%);
                line-height: 20px;
                color: #FFFFFF;
                font-weight: bold;
            }


            .ellipsis {
                display: inline-block;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                max-width: 100px;
                /* Sesuaikan lebar maksimal yang diinginkan */
            }

            table.customTable {
                width: 100%;
                background-color: #FFFFFF;
                border-collapse: collapse;
                border: 2px ridge #7EA8F8;
                color: #000000;
                table-layout: fixed;
                /* Tambahkan ini untuk membatasi lebar kolom */
            }

            table.customTable td,
            table.customTable th {
                border: 2px ridge #7EA8F8;
                padding: 10px;
                overflow: hidden;
                /* Tambahkan ini untuk membatasi konten dalam sel */
                text-overflow: ellipsis;
                /* Tambahkan ini untuk menampilkan ... saat konten terpotong */
                white-space: nowrap;
                /* Tambahkan ini untuk mencegah konten mengalami wrap */
            }

            .dropdown {
                margin-bottom: 30px;
                margin-left: 810px;

            }
        </style>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
        <script>
            function filterData(periode) {
                // Logika pemfilteran data berdasarkan periode
                console.log("Data telah difilter berdasarkan periode: " + periode);
            }
        </script>
        <script>
            const tableRows = document.querySelectorAll(".customTable tbody tr");

            // Mendapatkan elemen popup
            const popup = document.getElementById("popup");
            const judulAgendaElement = document.getElementById("judulAgenda");
            const deskripsiElement = document.getElementById("deskripsi");
            const masalahElement = document.getElementById("masalah");
            const tanggalAgendaElement = document.getElementById("tanggalAgenda");
            const progressElement = document.getElementById("progress");
            const periodeElement = document.getElementById("periode");

            // Tambahkan event listener untuk setiap baris pada tabel
            tableRows.forEach(row => {
                row.addEventListener("click", () => {
                    // Ambil data dari masing-masing kolom pada baris yang di-klik
                    const judulAgenda = row.cells[0].innerText;
                    const deskripsi = row.cells[1].querySelector(".full-description").innerText;
                    const masalah = row.cells[2].innerText;
                    const tanggalAgenda = row.cells[3].innerText;
                    const progress = row.cells[4].innerText;
                    const periode = row.cells[5].innerText;

                    // Isi nilai data ke elemen popup
                    judulAgendaElement.innerText = judulAgenda;
                    deskripsiElement.innerText = deskripsi;
                    masalahElement.innerText = masalah;
                    tanggalAgendaElement.innerText = tanggalAgenda;
                    progressElement.innerText = progress;
                    periodeElement.innerText = periode;

                    // Tampilkan popup
                    popup.style.display = "block";
                });
            });

            // Fungsi untuk menutup popup
            function closePopup() {
                popup.style.display = "none";
            }

            // Tambahkan event listener untuk tombol close pada popup
            document.querySelector(".close").addEventListener("click", closePopup);

            // Tambahkan event listener untuk menutup popup saat mengklik di luar area popup
            window.addEventListener("click", (event) => {
                if (event.target == popup) {
                    closePopup();
                }
            });
        </script>

        <script>
            function filterData(periode) {
                // Mengirim permintaan AJAX untuk mengambil data berdasarkan periode
                // dan memperbarui tabel dengan data yang diambil
                // Contoh implementasi AJAX menggunakan jQuery:
                $.ajax({
                    url: '/ambil_data',
                    method: 'POST',
                    data: {
                        periode: periode
                    },
                    success: function(response) {
                        // Memperbarui tabel dengan data yang diambil
                        $('table.customTable tbody').html(response);
                    },
                    error: function(xhr, status, error) {
                        // Menangani kesalahan jika terjadi error pada permintaan AJAX
                        console.log(error);
                    }
                });
            }
        </script>
    @endsection
