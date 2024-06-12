@extends('layout.main')
@include('layout.navbar')
@section('container')

<section class="... " style="margin-top: 100px;">
    <div class="text-center pb-5">
        <h2>Team</h2>
    </div>
    <div class="container pt-5">
        <div class="d-flex" style="margin-top: 40px;">
            <h2 class="text-dark">Kelompok 11 - B1/TRK 59</h2>
            <div class="ms-auto">
                <button class="btn btn-md"><span class="arrow-icon mx-2">&larr;</span></button>
                <button class="btn btn-md"><span class="arrow-icon mx-2">&rarr;</span></button>
            </div>
        </div>
    </div>
    
    <div class="cointainer mx-auto row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 pb-5">
        <div class="card mb-3 border-0 rounded-0 bg-transparent col-md-8">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="img/Team/raihan.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Raihan Hammam Salsabil</h5>
                    <p class="card-text">J0404221127</p>
                </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 border-0 rounded-0 bg-transparent col-md-8">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="img/Team/Ane.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Ane Siti Jahra</h5>
                    <p class="card-text">J0404221148 </p>
                </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 border-0 rounded-0 bg-transparent col-md-8">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="img/Team/ryan.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Ryan Putra Ramadhan</h5>
                    <p class="card-text">J0404221134</p>
                </div>
                </div>
            </div>
        </div>

        <div class="card mb-2 border-0 rounded-0 bg-transparent col-md-8">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="img/Team/akbar.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Bharliana Ackbar Sonjaya Putra</h5>
                    <p class="card-text">J0404221102</p>
                </div>
                </div>
            </div>
        </div>

        <div class="card mb-2 border-0 rounded-0 bg-transparent col-md-8">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="img/Team/ghibran.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Iyad Farhan Al Ghibran</h5>
                    <p class="card-text">J0404221015 </p>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

@include('layout.footer')    
@endsection