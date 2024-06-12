@extends('layout.main')
@include('layout.navbar')
@section('container')

<section class="about section-padding" style="margin-top: 40px;">
    <div class="text-center pb-5">
        <h2>Tentang Kami</h2>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-12">
                <div class="d-flex">
                    <div class="about-img mx-2">
                        <img src="img/tugukujang.jpg" alt="about-img" class="img-fluid h-100 mt-4">
                    </div>

                    <div class="about-img mx-2">
                        <img src="img/gunung.jpg" alt="about-img" class="img-fluid h-75">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 col-12 ps-lg-5 mt-md-1" style="margin-top: 40px;">
                <div class="about-text">
                    <h2>Beragam ide liburan penuh keseruan menanti #DiBogorAja</h2>
                    <p>Bogor adalah sebuah kota yang terletak di kaki Gunung Salak. Kota ini sering disebut sebagai Kota Hujan dan dulunya dikenal dengan nama "Buitenzorg". Di Bogor, ada banyak wisata alam dan wisata ramah keluarga yang selalu menarik untuk dikunjungi. Suasana kota Bogor cukup asri dan sejuk. Pesona kota ini juga dilengkapi aneka kuliner menggoyang lidah yang bikin ketagihan.</p>
                    <p>Kota Bogor juga merupakan salah satu tempat favorit terdekat dari Jakarta untuk menghabiskan akhir pekan atau liburan singkat. Terdapat Kebun Raya Bogor yang di dalamnya tersimpan Museum Zoologi dan ruang hijau terbuka yang luas untuk berlibur bersama keluarga. Selain itu, Puncak juga jadi destinasi wisata lainnya yang wajib dikunjungi saat melancong ke Bogor. Area Puncak ini memiliki pemandangan yang sangat indah, lengkap dengan hamparan kebun teh dan suasana yang sejuk.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team section-padding" style="margin-top: 40px;">
    <div class="text-center pb-5">
        <h2>Team Kami</h2>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <img src="img/Team/raihan.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="team-member" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">Raihan Hammam Salsabil</h5>
                        <p class="card-text">J0404221127</p>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <img src="img/Team/Ane.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="team-member" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">Ane Siti Jahra</h5>
                        <p class="card-text">J0404221148</p>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <img src="img/Team/akbar.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="team-member" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">Bharliana Ackbar Sonjaya P.</h5>
                        <p class="card-text">J0404221102</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="team section-padding" style="margin-top: 40px;">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Team Member 4 -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <img src="img/Team/ryan.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="team-member" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">Ryan Putra Ramadhan</h5>
                        <p class="card-text">J0404221134</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 5 -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <img src="img/Team/gebe.jpeg" class="card-img-top rounded-circle mx-auto mt-3" alt="team-member" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">Iyad Farhan Al Ghibran</h5>
                        <p class="card-text">J0404221015</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('layout.footer')
@endsection
