<main>
<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <div class="row">
      @if ($service->isNotEmpty())
      @foreach ($service as $services) 
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-laptop"></i></div>
            <h4><a href="">{{ $services->title }}</a></h4>
            <p>{!! $services->short_desc !!}</p>
          </div>
        </div>
       @endforeach
       @endif
      </div>

    </div>
  </section>
</main>
