<main>
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>{{ $contact[0]->address }}</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="{{ $data[0]->tw_url }}" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="{{ $data[0]->fb_url }}" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="{{ $data[0]->in_url }}" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="{{ $data[0]->li_url }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>{{ $contact[0]->email }}</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>{{ $contact[0]->phone }}</p>
          </div>
        </div>
      </div>

      <form wire:submit="submit" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input wire:model="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" required>
            @error('name')
								<p class="invalid-feedback">{{ $message }}</p>
						@enderror
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input wire:model="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" required>
            @error('email')
								<p class="invalid-feedback">{{ $message }}</p>
						@enderror
          </div>
        </div>
        <div class="form-group mt-3">
          <input wire:model="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject" >
          @error('subject')
							<p class="invalid-feedback">{{ $message }}</p>
					@enderror
        </div>
        <div class="form-group mt-3">
          <textarea wire:model="message" class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
        </div>
        <!-- <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div> -->
        <div class="text-center">
          <button type="submit">Send Message</button>
        </div>
      </form>

    </div>
  </section>
</main>
