<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
      <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#opini">Opini</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kegiatan">Kegiatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#data-anggota">Data Anggota</a>
            </li>
          </ul>
          <button class="btn btn-primary ms-lg-2">Login</button>
        </div>
      </div>
    </nav>
  </template>

  <script>
  export default {
    name: "NavBarView",
  };
  </script>

  <style scoped>
  @import "~bootstrap/dist/css/bootstrap.css";
  </style>
