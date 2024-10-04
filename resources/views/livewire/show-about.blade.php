<main>
  <section class="div_about" >
    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>More about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
        @if ($data[0]->image != '')
        <img loading="lazy" decoding="async" src="{{ asset('storage/'. $data[0]->image) }}" class="img-fluid" alt="">
        @endif
          
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{ $data[0]->title }}</h3>
          <p class="fst-italic">
          {{ $data[0]->short_desc }}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $data[0]->dop }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $data[0]->degree }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $data[0]->phone }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $data[0]->city }}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $data[0]->age }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span style="displaya:;">{{ $data[0]->website }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $data[0]->email }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $data[0]->freelance }}</span></li>
              </ul>
            </div>
          </div>
          <p>
          {!! $data[0]->description !!}
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

<div class="row">

  <div class="col-lg-3 col-md-6">
    <div class="count-box">
      <i class="bi bi-emoji-smile"></i>
      <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
      <p>Happy Clients</p>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
    <div class="count-box">
      <i class="bi bi-journal-richtext"></i>
      <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
      <p>Projects</p>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
    <div class="count-box">
      <i class="bi bi-headset"></i>
      <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
      <p>Hours Of Support</p>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
    <div class="count-box">
      <i class="bi bi-award"></i>
      <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
      <p>Awards</p>
    </div>
  </div>

</div>

    </div><!-- End Counts -->

    
    <!-- ======= Skills  ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row">
      @if ($skills->isNotEmpty())
        @foreach ($skills as $skill)
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <!-- <i class="ri-store-line" style="color: #ffbb2c;"></i> -->
            @if ($skill->image != '')
             <img src="{{ asset('storage/'. $skill->image) }}" class="icon_img" alt="">
             @endif
            <h3>{{ $skill->name }}</h3>
          </div>
        </div>
        @endforeach
        @endif
        
    </div>
    
    </div>
</main>