<main>
    <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a wire:navigate href="{{ route('home')}}">{{ $data[0]->name }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>{{ $data[0]->title }}</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a wire:navigate class="nav-link active" href="{{ route('home')}}">Home</a></li>
          <li><a wire:navigate class="nav-link" href="{{ route('about')}}">About</a></li>
          <li><a wire:navigate class="nav-link" href="{{ route('resume')}}">Resume</a></li>
          <li><a wire:navigate class="nav-link" href="{{ route('service')}}">Services</a></li>
          <li><a wire:navigate class="nav-link" href="{{ route('portfolio')}}">Portfolio</a></li>
          <li><a wire:navigate class="nav-link" href="{{ route('contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a  href="{{ $data[0]->tw_url }}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a  href="{{ $data[0]->fb_url }}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a  href="{{ $data[0]->in_url }}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a  href="{{ $data[0]->li_url }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
        {{-- <a  href="{{ $data[0]->li_url }}" class="linkedin"><i class="bi bi-download"></i></a> --}}
      </div>
    </div>
  </header><!-- End Header -->
</main>
