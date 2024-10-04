<main>
<section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Education</h3>
          @if ($data->isNotEmpty())
          @foreach ($data as $datas) 
          <div class="resume-item">
            <h4>{{ $datas->deg_title }}</h4>
            <h5>{{ $datas->year }}</h5>
            <p style="font-weight: bold;">{{ $datas->institute }}</p>
            <p>{!! $datas->short_desc !!}</p>
          </div>
          @endforeach
          @endif
        </div>


        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          @if ($experience->isNotEmpty())
          @foreach ($experience as $experiences) 
          <div class="resume-item">
            <h4>{{ $experiences->title }}</h4>
            <h5>{{ $experiences->year }}</h5>
            <p style="font-weight: bold;">{{ $experiences->institute }}</p>
            <p>{!! $experiences->short_desc !!}</p>
          </div>
          @endforeach
          @endif
        </div>
      </div>

    </div>
  </section>
</main>
