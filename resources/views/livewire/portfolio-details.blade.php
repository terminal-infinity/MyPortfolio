<main>
<div class="portfolio-details">
<a wire:navigate href="{{ route('portfolio') }}" >
        <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
    </a>
      <div class="container">

        <div class="row">

          <div class="col-lg-8 pro_img" >
            <h2 class="portfolio-title">Portfolio Details</h2>
                <div >
                @if ($portfolio->image != '')
                <img src="{{ asset('storage/'. $portfolio->image) }}" loading="lazy" decoding="async" width="600" height="400"  alt="">
                @endif
                </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Project Name</strong>: {{ $portfolio->title }}</li>
              <li><strong>Category</strong>: {{ $portfolio->category_name }}</li>
              <li><strong>Client</strong>: {{ $portfolio->client }}</li>
              <li><strong>Project date</strong>: {{ \Carbon\Carbon::parse($portfolio->created_at)->format('d M, Y') }}</li>
              <li><strong>Project URL</strong>: <a href="{{ $portfolio->project_url }}">{{ $portfolio->project_url }}</a></li>
            </ul>

            <p>{!! $portfolio->description !!}</p>
          </div>

        </div>

      </div>
    </div>
</main>
