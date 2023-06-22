    @extends('layout.ketua')
    @section('container')

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Pilih Periode</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" onclick="filterData('2020')">2020</a></li>
                <li><a class="dropdown-item" href="#" onclick="filterData('2021')">2021</a></li>
                <li><a class="dropdown-item" href="#" onclick="filterData('2022')">2022</a></li>
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
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">20/01/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 50%"></div>
                            <span class="progress-label">50</span>
                        </div>
                    </td>
                    <td class="center">2021</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">21/05/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 50%"></div>
                            <span class="progress-label">50</span>
                        </div>
                    </td>
                    <td class="center">2021</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2022</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2022</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2022</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2022</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2022</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2022</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2022</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2022</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2020</td>
                </tr>
                <tr>
                    <td class="center">Kegiatan</td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Expasdasdasdedita, adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem
                            quisquam dolore, amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">
                        <span class="full-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita,
                            adipisci delectus! Quas laboriosam officia at iure reprehenderit voluptatem quisquam dolore,
                            amet eligendi consequuntur aliquam tenetur provident deleniti illo magni quam
                            loreasdasdasdasdsad.</span>
                    </td>
                    <td class="center">14/03/2023</td>
                    <td class="center">
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                            <span class="progress-label">30</span>
                        </div>
                    </td>
                    <td class="center">2022</td>
                </tr>

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
