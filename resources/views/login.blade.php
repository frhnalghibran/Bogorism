@extends('layout.main')

@section('css')
<link rel="stylesheet" href="css/login.css"?
    
@endsection

@section('container')

    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #15e49c;"></i>
                    <span class="h1 fw-bold mb-0">BOGORISM</span>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">     
                    <form method="POST" action="{{ Route('login') }}" style="width: 23rem;">
                        @csrf
        
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="username" name="username" id="form2Example18" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example18">Username</label>
                        </div>
            
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example28">Password</label>
                        </div>
            
                        <div class="pt-1 mb-4">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn text-white bg-success btn-info btn-lg btn-block">Login</button>
                        </div>
                        <br>
                        <p>Don't have an account? <a href="/register" class="link-info">Register here</a></p>
        
                    </form>
                </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="img/home2.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
    </section>

    
@endsection