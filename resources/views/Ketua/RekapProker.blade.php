@extends('layout.ketua')
@section('container')
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
            <tr>
                <td class="center">Kegiatan</td>
                <td class="center">
                    {{ substr('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam loreasdasdasdasdsad.', 0, 100) }}
                </td>
                <td class="center">
                    {{ substr('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam loreasdasdasdasdsad.', 0, 100) }}
                </td>
                <td class="center">14/03/2023</td>
                <td class="center">
                    <div class="progress-container">
                        <div class="progress-bar" style="width: 10%"></div>
                        <span class="progress-label">10%</span>
                    </div>
                </td>
                <td class="center">2020</td>
            </tr>
            <tr>
                <td class="center">Kegiatan</td>
                <td class="center">Lorem, ipsum dolor sit amet consectetur adipisicing </td>
                <td class="center">
                    {{ substr('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam loreasdasdasdasdsad.', 0, 100) }}
                </td>
                <td class="center">14/03/2023</td>
                <td class="center">
                    <div class="progress-container">
                        <div class="progress-bar" style="width: 10%"></div>
                        <span class="progress-label">10%</span>
                    </div>
                </td>
                <td class="center">2020</td>
            </tr>
            <tr>
                <td class="center">Kegiatan</td>
                <td class="center">Lorem, ipsum dolor sit amet consectetur adipisicing </td>
                <td class="center">
                    {{ substr('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam loreasdasdasdasdsad.', 0, 100) }}
                </td>
                <td class="center">14/03/2023</td>
                <td class="center">
                    <div class="progress-container">
                        <div class="progress-bar" style="width: 10%"></div>
                        <span class="progress-label">10%</span>
                    </div>
                </td>
                <td class="center">2020</td>
            </tr>
            <tr>
                <td class="center">Kegiatan</td>
                <td class="center">Lorem, ipsum dolor sit amet consectetur adipisicing </td>
                <td class="center">
                    {{ substr('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam loreasdasdasdasdsad.', 0, 100) }}
                </td>
                <td class="center">14/03/2023</td>
                <td class="center">
                    <div class="progress-container">
                        <div class="progress-bar" style="width: 10%"></div>
                        <span class="progress-label">10%</span>
                    </div>
                </td>
                <td class="center">2020</td>
            </tr>
            <tr>
                <td class="center">Kegiatan</td>
                <td class="center">Lorem, ipsum dolor sit amet consectetur adipisicing </td>
                <td class="center">
                    {{ substr('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam loreasdasdasdasdsad.', 0, 100) }}
                </td>
                <td class="center">14/03/2023</td>
                <td class="center">
                    <div class="progress-container">
                        <div class="progress-bar" style="width: 10%"></div>
                        <span class="progress-label">10%</span>
                    </div>
                </td>
                <td class="center">2020</td>
            </tr>
            <tr>
                <td class="center">Kegiatan</td>
                <td class="center">Lorem, ipsum dolor sit amet consectetur adipisicing </td>
                <td class="center">
                    {{ substr('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam loreasdasdasdasdsad.', 0, 100) }}
                </td>
                <td class="center">14/03/2023</td>
                <td class="center">
                    <div class="progress-container">
                        <div class="progress-bar" style="width: 10%"></div>
                        <span class="progress-label">10%</span>
                    </div>
                </td>
                <td class="center">2020</td>
            </tr>
            <tr>
                <td class="center">Kegiatan</td>
                <td class="center">Lorem, ipsum dolor sit amet consectetur adipisicing </td>
                <td class="center">
                    {{ substr('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam loreasdasdasdasdsad.', 0, 100) }}
                </td>
                <td class="center">14/03/2023</td>
                <td class="center">
                    <div class="progress-container">
                        <div class="progress-bar" style="width: 10%"></div>
                        <span class="progress-label">10%</span>
                    </div>
                </td>
                <td class="center">2020</td>
            </tr>
        </tbody>
    </table>

 <div id="popup" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2 id="judulAgenda"></h2>
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
      width: 60%;
      max-width: 600px;
      position: relative;
    }

    .close {
      color: #aaa;
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover {
      color: #000;
    }
    </style>

     <script>
    // Mendapatkan semua baris pada tabel
    const tableRows = document.querySelectorAll(".customTable tbody tr");

    // Mendapatkan elemen popup
    const popup = document.getElementById("popup");
    const judulAgendaElement = document.getElementById("judulAgenda");
    const deskripsiElement = document.getElementById("deskripsi");
    const masalahElement = document.getElementById("masalah");
    const tanggalAgendaElement = document.getElementById("tanggalAgenda");
    const progressElement = document.getElementById("progress");
    const periodeElement = document.getElementById("periode");
    const closeElement = document.querySelector(".close");

    // Menambahkan event listener untuk setiap baris pada tabel
    tableRows.forEach((row) => {
      row.addEventListener("click", () => {
        // Mendapatkan data dari tiap kolom pada baris
        const judulAgenda = row.cells[0].innerText;
        const deskripsi = row.cells[1].innerText;
        const masalah = row.cells[2].innerText;
        const tanggalAgenda = row.cells[3].innerText;
        const progress = row.cells[4].querySelector(".progress-label").innerText;
        const periode = row.cells[5].innerText;

        // Menampilkan data pada konten popup
        judulAgendaElement.textContent = `Judul Agenda: ${judulAgenda}`;
        deskripsiElement.textContent = `Deskripsi: ${deskripsi}`;
        masalahElement.textContent = `Masalah: ${masalah}`;
        tanggalAgendaElement.textContent = `Tanggal Agenda: ${tanggalAgenda}`;
        progressElement.textContent = `Progress Anda: ${progress}`;
        periodeElement.textContent = `Periode: ${periode}`;

        // Menampilkan popup
        popup.style.display = "block";
      });
    });

    // Menutup popup ketika tombol close diklik
    closeElement.addEventListener("click", () => {
      popup.style.display = "none";
    });

    // Menutup popup ketika diklik di luar konten popup
    window.addEventListener("click", (event) => {
      if (event.target === popup) {
        popup.style.display = "none";
      }
    });
  </script>
@endsection
