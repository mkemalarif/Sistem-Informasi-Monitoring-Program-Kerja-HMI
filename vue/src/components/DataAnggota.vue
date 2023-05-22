<template>
    <div>
      <NavBarViewVue />

      <div class="container mt-5">
        <h1 class="mb-4">Data Anggota</h1>

        <div class="row">
          <div class="col-md-12">
            <div id="memberCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item" v-for="(anggota, index) in anggotaList" :key="index" :class="{ active: index === 0 }">
                  <div class="card mb-4">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img :src="anggota.foto" alt="Foto Anggota" class="card-img member-photo" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ anggota.nama }}</h5>
                          <div class="card-description">
                            <div class="card-info">
                              <p class="card-info-label">{{ anggota.nokLabel }}:</p>
                              <p class="card-info-content">{{ anggota.nok }}</p>
                            </div>
                            <div class="card-info">
                              <p class="card-info-label">{{ anggota.jenisKelaminLabel }}:</p>
                              <p class="card-info-content">{{ anggota.jenisKelamin }}</p>
                            </div>
                            <div class="card-info">
                              <p class="card-info-label">{{ anggota.ttlLabel }}:</p>
                              <p class="card-info-content">{{ anggota.ttl }}</p>
                            </div>
                            <div class="card-info">
                              <p class="card-info-label">{{ anggota.komisariatLabel }}:</p>
                              <p class="card-info-content">{{ anggota.komisariat }}</p>
                            </div>
                            <div class="card-info">
                              <p class="card-info-label">{{ anggota.alamatLabel }}:</p>
                              <p class="card-info-content">{{ anggota.alamat }}</p>
                            </div>
                            <div class="card-info">
                              <p class="card-info-label">{{ anggota.angkatanLabel }}:</p>
                              <p class="card-info-content">{{ anggota.angkatan }}</p>
                            </div>
                          </div>
                          <div class="button">
                            <button class="btn btn-primary">Detail</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#memberCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#memberCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  import NavBarViewVue from './NavBarView.vue';

  export default {
    name: "DataAnggota",
    components: {
      NavBarViewVue
    },
    data() {
      return {
        anggotaList: [
          {
            nok: "001",
            nokLabel: "Nok",
            nama: "Dipda",
            jenisKelamin: "Laki-laki",
            jenisKelaminLabel: "Jenis Kelamin",
            ttl: "1 Januari 1990",
            ttlLabel: "TTL",
            komisariat: "Komisariat A",
            komisariatLabel: "Komisariat",
            alamat: "Jl. Contoh No. 123",
            alamatLabel: "Alamat",
            angkatan: "2020",
            angkatanLabel: "Angkatan",
            foto: require("../assets/images/foto1.jpg")
          },
          {
            nok: "002",
            nokLabel: "Nok",
            nama: "John Doe",
            jenisKelamin: "Laki-laki",
            jenisKelaminLabel: "Jenis Kelamin",
            ttl: "15 Mei 1995",
            ttlLabel: "TTL",
            komisariat: "Komisariat B",
            komisariatLabel: "Komisariat",
            alamat: "Jl. Contoh No. 456",
            alamatLabel: "Alamat",
            angkatan: "2021",
            angkatanLabel: "Angkatan",
            foto: require("../assets/images/foto2.jpg")
          },
          {
            nok: "003",
            nokLabel: "Nok",
            nama: "Jane Smith",
            jenisKelamin: "Perempuan",
            jenisKelaminLabel: "Jenis Kelamin",
            ttl: "10 September 1998",
            ttlLabel: "TTL",
            komisariat: "Komisariat C",
            komisariatLabel: "Komisariat",
            alamat: "Jl. Contoh No. 789",
            alamatLabel: "Alamat",
            angkatan: "2019",
            angkatanLabel: "Angkatan",
            foto: require("../assets/images/foto3.jpg")
          },
          // Add more member data as needed
        ],
      };
    },
  };
  </script>

  <style scoped>
  @import "~bootstrap/dist/css/bootstrap.css";
  @import "../assets/css/navbar.css";

  .member-photo {
    width: 80%;
    height: auto;
    margin-left: 30px; /* Add left margin for auto centering */
    margin-right: 0;
    margin-top: 98px; /* Remove right margin */
  }

  .card {
    max-width: 600px;
    margin: 0 auto;
    display: flex;
    margin-bottom: 10px; /* Add a bit of spacing between cards */
  }

  .card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 10px; /* Add padding to card-body */
  }

  .card-info {
    display: flex;
    align-items: flex-start; /* Adjust vertical alignment to top */
    margin-bottom: 3px; /* Reduce spacing between info */
  }

  .card-info-label {
    width: 120px; /* Adjust label width */
    font-weight: bold;
    margin-right: 10px;
    text-align: left;
    white-space: nowrap;
  }

  .card-info-content {
    flex-grow: 1;
    margin: 0;
    text-align: left;
    margin-left: 10px; /* Reduce left margin on content */
    margin-bottom: 5px; /* Reduce spacing at the bottom of content */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: left; /* Set content text alignment to left */
  }

  .card-title {
    margin-bottom: 10px; /* Add spacing below card title */
    text-align: center;
    position: relative;
    margin-left: 10px;
    margin-right: 190px; /* Center the title text */
  }

  .card-description {
    margin-top: 10px; /* Add spacing above card description */
  }

  .text-center {
    text-align: center; /* Center the button text */
    margin-top: 10px; /* Add some spacing above the button */
  }

  .button{
    margin-right: 120px;
  }
  </style>
