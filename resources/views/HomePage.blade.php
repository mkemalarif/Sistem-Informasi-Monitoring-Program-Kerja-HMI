@extends('partial.main')

@section('container')
<div id="newsSlider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#newsSlider" data-slide-to="0" class="active"></li>
        <li data-target="#newsSlider" data-slide-to="1"></li>
        <li data-target="#newsSlider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="path/to/image1.jpg" alt="Article Image">
            <div class="carousel-caption">
                <h3>Article 1</h3>
                <p>Description of Article 1</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="path/to/image2.jpg" alt="Article Image">
            <div class="carousel-caption">
                <h3>Article 2</h3>
                <p>Description of Article 2</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="path/to/image3.jpg" alt="Article Image">
            <div class="carousel-caption">
                <h3>Article 3</h3>
                <p>Description of Article 3</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#newsSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#newsSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection
