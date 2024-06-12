@extends('layout.main')
@include('layout.navbar')
@section('container')
    <div id="carouselExampleAutoplaying" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/home1.jpeg" class="d-block w-100-height" alt="img1">
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-50" style="margin-bottom: 90px;">
            <p>1 /2</p>
            <h5>Bingung Liburan Kemana ? <br>Isi Liburan #DiBogorAja Yuk!</h5>
        </div>               
        </div>
        <div class="carousel-item">
          <img src="img/home2.jpg" class="d-block w-100-height" alt="img2">
          <div class="carousel-caption carousel">
              <p>2 /2</p>
              <h5>Temukan Keindahan Kota Bogor <br>Dengan Mudah.</h5>
              <p><a href="/destinasi" class="btn btn-success btn-lg mt-3 rounded-2">Jelajahi Lebih Banyak Lagi</a></p>
              </div>
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="icon">&larr;</span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="icon">&rarr;</span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection