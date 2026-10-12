<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

<div id="ah-about-section">
  <div class="ah-about-container">

    <div class="ah-about-grid">

      {{-- LEFT: IMAGE --}}
      <div class="ah-about-visual" data-aos="fade-right" data-aos-duration="1000">

        <div class="ah-about-image-frame">

          @if(!empty($about->banner_image))
            <img src="{{ $about->banner_image }}"
              alt="{{ strip_tags(htmlspecialchars_decode($about->caption ?? 'About Us')) }}" class="ah-about-image"
              loading="lazy">
          @else
            <div class="ah-about-image-placeholder">
              <span>About Us</span>
            </div>
          @endif

          <div class="ah-about-image-shade"></div>

          <div class="ah-about-image-caption">
            <span class="ah-about-caption-line"></span>
            <span>OUR STORY, OUR PURPOSE</span>
          </div>

        </div>

        <div class="ah-about-image-decoration"></div>

      </div>


      {{-- RIGHT: CONTENT --}}
      <div class="ah-about-content" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">

        {{-- Section label --}}
        <div class="ah-about-eyebrow">
          <span class="ah-about-eyebrow-line"></span>
          <span>GET TO KNOW US</span>
        </div>

        {{-- Main heading --}}
        <h2 class="ah-about-title">
          {!! htmlspecialchars_decode($about->caption ?? 'Who We Are') !!}
        </h2>

        {{-- Short description --}}
        @if(!empty($about->short_content))
          <div class="ah-about-intro">
            {!! htmlspecialchars_decode($about->short_content) !!}
          </div>
        @endif

        {{-- Decorative separator --}}
        <div class="ah-about-divider">
          <span></span>
          <span></span>
          <span></span>
        </div>

        {{-- Full description --}}
        @if(!empty($about->long_content))
          <div class="ah-about-description">
            {!! htmlspecialchars_decode($about->long_content) !!}
          </div>
        @endif

        {{-- Explore button --}}
        <div class="ah-about-action">
          <a href="{{ url('/about-one/about-us-two') }}" class="ah-about-button">

            <span>Discover Our Story</span>

            <span class="ah-about-button-icon" aria-hidden="true">
              &#8599;
            </span>

          </a>

          <span class="ah-about-action-note">
            Learn more about us
          </span>
        </div>

      </div>

    </div>

  </div>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  (function () {
    function initializeAboutAOS() {
      if (typeof AOS !== 'undefined') {
        AOS.init({
          once: true,
          duration: 1000,
          offset: 70,
          easing: 'ease-out-cubic'
        });
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener(
        'DOMContentLoaded',
        initializeAboutAOS
      );
    } else {
      initializeAboutAOS();
    }
  })();
</script>