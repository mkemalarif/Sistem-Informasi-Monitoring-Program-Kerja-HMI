@extends('partial.main')

@section('container')
  <div class="container">
    <h1 class="mt-5">Berita</h1>

    <img src="../../public/assets/kata2.png" class="d-block mx-auto mt-4" alt="Gambar di atas informasi box">

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
      <!-- Slides -->
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="https://via.placeholder.com/500x250" class="d-block w-100" alt="News Image 1">
          <div class="carousel-caption">
            <h5>News Title 1</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum magna eget interdum.</p>
            <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="https://via.placeholder.com/500x250" class="d-block w-100" alt="News Image 2">
          <div class="carousel-caption">
            <h5>News Title 2</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum magna eget interdum.</p>
            <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="https://via.placeholder.com/500x250" class="d-block w-100" alt="News Image 3">
          <div class="carousel-caption">
            <h5>News Title 3</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum magna eget interdum.</p>
            <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
          </div>
        </div>
        <!-- Slide 4 -->
        <div class="carousel-item">
          <img src="https://via.placeholder.com/500x250" class="d-block w-100" alt="News Image 4">
          <div class="carousel-caption">
            <h5>News Title 4</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum magna eget interdum.</p>
            <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
          </div>
        </div>
        <!-- Slide 5 -->
        <div class="carousel-item">
          <img src="https://via.placeholder.com/500x250" class="d-block w-100" alt="News Image 5">
          <div class="carousel-caption">
            <h5>News Title 5</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum magna eget interdum.</p>
            <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
          </div>
        </div>
      </div>

      <!-- Information Boxes -->
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Badan Koordinasi (Badko)</h5>
                <p class="card-text">6</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Cabang</h5>
                <p class="card-text">40</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Komisariat</h5>
                <p class="card-text">76</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Anggota</h5>
                <p class="card-text">5000</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>

  <script>
    // Inisialisasi carousel dengan JavaScript
    var myCarousel = document.querySelector('#myCarousel');
    var carousel = new bootstrap.Carousel(myCarousel);
  </script>
@endsection
