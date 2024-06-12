<nav class="navbar navbar-expand-lg bg-white sticky-top">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="/"> 
      <img src="img/logo-removebg-preview (1).png" alt="logo" class="w-50 h-100">
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/ ">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/destinasi">Destination</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/service">About Us</a>
        </li>
        @unless (Auth::check())
        <li class="nav-item">
          <a class="btn btn-success text-white px-3 ms-3 rounded-3" href="/login">Log in</a>
        </li>
        @endunless
        @auth
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger text-white px-3 ms-3 mt-1 rounded-3 fw-bold">Log Out</button>
        </form>
        @endauth
      </ul>
    </div>
  </div>
</nav>