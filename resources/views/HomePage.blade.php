@extends('partial.main')

@section('container')
  <h1>Welcome to the Homepage</h1>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://via.placeholder.com/500x250" class="d-block w-100" alt="News Image 1">
        <div class="carousel-caption">
          <h5>News Title 1</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum magna eget interdum.</p>
          <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/500x250" class="d-block w-100" alt="News Image 2">
        <div class="carousel-caption">
          <h5>News Title 2</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum magna eget interdum.</p>
          <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/500x250" class="d-block w-100" alt="News Image 3">
        <div class="carousel-caption">
          <h5>News Title 3</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum magna eget interdum.</p>
          <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/500x250" class="d-block w-100" alt="News Image 4">
        <div class="carousel-caption">
          <h5>News Title 4</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum magna eget interdum.</p>
          <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/500x250" class="d-block w-100" alt="News Image 5">
        <div class="carousel-caption">
          <h5>News Title 5</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum magna eget interdum.</p>
          <a class="btn btn-primary" href="#myCarousel" role="button" data-bs-slide="next">Read More</a>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous"></script>
@endsection
