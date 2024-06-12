@extends('layout.main')
@include('layout.navbar')
@section('container')

<div class="card bg-dark text-white" id="fade-in-card" style="opacity: 0; transition: opacity 1s;">
    <div style="position: relative;">
        <img src="img/home2.jpg" class="card-img" alt="..." style="height: 780px; width: 100%; object-fit: cover; opacity: 0.5;">
        <div style="position: absolute; top: 40%; left: 10%; width: 100%; height: 100%;">
            <div class="card-img-overlay">
                <h1 class="card-title"> Temukan Keindahan Kota Bogor</h1>
                <h1 class="card-title"> Bersama: Bogorism</h1>
                <div class="button-container">
                    <div class="d-grip gap-2 my-3">
                        <button type="button" class="btn btn-success btn-lg" onclick="scrollToBottom()">Explore</button>
                    </div>
                </div>
                <script>
                    function scrollToBottom() {
                        const buttonBottom = document.querySelector('.button-container').getBoundingClientRect().bottom;
                        window.scrollTo({
                            top: buttonBottom,
                            behavior: 'smooth'
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var card = document.getElementById('fade-in-card');
        setTimeout(function() {
            card.style.opacity = 1;
        }, 100);
    });
</script>

<section class="container" style="margin-top: 50px;">
    

    <div class="text-start pb-5 fw-bold">
        <h1>Jelajahi Berbagai Destinasi Kota Bogor</h1>
    </div>
    <form action="{{ route('filter') }}" method="GET" class="mb-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3 mb-2">
                <div class="input-group">
                    <select name="category" class="form-select form-select-lg" aria-label="Pilih Kategori" style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                        <option selected disabled>Pilih Kategori</option>
                        <option value="Wisata">Wisata</option>
                        <option value="Kuliner">Kuliner</option>
                    </select>
                    <button type="submit" class="btn btn-success" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <div class="row row-cols-1 row-cols-md-2 row-cols-md-3 g-4 mt-1">
        @foreach($data as $wisata)
        <div class="col">
            <div class="card border-0 rounded-0 shadow" style="margin: 5px; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.2)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)';">
                <img src="{{ $wisata->gambar }}" class="card-img-top" style="object-fit: cover; width: 100%; height: 250px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $wisata->nama }}</h5>
                    <p class="card-text">{{ $wisata->lokasi }}</p>
                    <p class="card-text">{{ $wisata->kategori->nama }}</p>
                    <a href="{{ route('detail', $wisata->id) }}" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@include('layout.footer')
@endsection
