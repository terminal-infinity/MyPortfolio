<main>
<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
          <li><a wire:navigate href="{{ route('portfolio') }}">All</a></li>
            @if ($categories->isNotEmpty())
            @foreach ($categories as $category)
            <li><a wire:navigate style="color: aliceblue;" href="{{ route('portfolio').'?categorySlug='.$category->slug }}">{{ $category->name }}</a></li>
            @endforeach
            @endif
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        @if ($portfolio->isNotEmpty())
        @foreach ($portfolio as $portfolios)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            @if ($portfolios->image != "")
            <img src="{{ asset('storage/'.$portfolios->image)}}" class="img-fluid" alt="">
            @endif
            <div class="portfolio-info">
              <h4>{{ $portfolios->title }}</h4>
              <div class="portfolio-links">
                <a wire:navigate href="{{ route('portfolioDetails',$portfolios->id) }}" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>

    </div>
  </section>
</main>
