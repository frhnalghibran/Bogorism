@extends('layout.main')
@section('container')
    
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="border-0 rounded-0 shadow-lg" style="height: 400px; overflow: hidden;">
                <img src="{{ asset($wisata->gambar) }}" class="img-fluid rounded-top h-100" alt="{{ $wisata->nama }}" style="object-fit: cover; width: 100%;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="border-0 rounded-0 shadow-lg d-flex flex-column" style="height: 400px;">
                <div class="card-body" style="flex: 1 1 auto; overflow-y: auto; padding: 20px;">
                    <h1 class="card-title">{{ $wisata->nama }}</h1>
                    <p class="card-text"><strong>Lokasi:</strong> {{ $wisata->lokasi }}</p>
                    <p class="card-text"><strong> Waktu Operasional:</strong> {{ $wisata->operasional }}</p>
                    <p class="card-text"><strong>Kategori:</strong> {{ $wisata->kategori->nama }}</p>
                    <p class="card-text">{{ $wisata->deskripsi }}</p>
                </div>
                <div style="flex-shrink: 0; background-color: white; padding: 15px;">
                    <a href="/destinasi" class="btn btn-success btn-sm" style="float: left;">Kembali</a>
                </div>
            </div>
        </div>        
    </div>

@endsection
