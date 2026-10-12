<section id="ahn-abroad-section">

  <div class="ahn-abroad-container">

    {{-- Section Heading --}}
    <div class="ahn-abroad-heading" data-aos="fade-up" data-aos-duration="900">

      <div class="ahn-abroad-eyebrow">
        <span class="ahn-abroad-eyebrow-line"></span>
        YOUR FUTURE STARTS HERE
        <span class="ahn-abroad-eyebrow-line"></span>
      </div>

      <h2 class="ahn-abroad-main-title">
        Your Journey to
        <span>Studying Abroad</span>
      </h2>

      <p class="ahn-abroad-subtitle">
        Discover international education opportunities with expert
        guidance, trusted support, and a clearer path towards your
        academic future.
      </p>

    </div>


    {{-- Service Cards --}}
    <div class="ahn-abroad-grid">

      @foreach ($services->childs->sortByDesc('created_at') as $sub)

        @if ($loop->iteration > 4)
          @break
        @endif

        @php
          $child = $sub->childs->first();

          $serviceUrl = url(
            trim($sub->nav_name, '/') .
            ($child ? '/' . trim($child->nav_name, '/') : '')
          );
        @endphp

        <article class="ahn-abroad-card" data-aos="fade-up" data-aos-duration="900"
          data-aos-delay="{{ $loop->iteration * 100 }}">

          {{-- Image --}}
          <div class="ahn-abroad-image-wrap">

            @if(!empty($sub->banner_image))
              <img src="{{ $sub->banner_image }}" alt="{{ strip_tags($sub->caption ?? 'Study abroad service') }}"
                class="ahn-abroad-image" loading="lazy">
            @else
              <div class="ahn-abroad-image-placeholder">
                <i class="fas fa-graduation-cap"></i>
              </div>
            @endif

            <div class="ahn-abroad-image-overlay"></div>

            <span class="ahn-abroad-number">
              {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
            </span>

            <span class="ahn-abroad-image-label">
              EXPLORE OPPORTUNITIES
            </span>

          </div>


          {{-- Card Content --}}
          <div class="ahn-abroad-card-content">

            <div class="ahn-abroad-card-heading">

              <h3 class="ahn-abroad-card-title">
                {{ $sub->caption }}
              </h3>

              <span class="ahn-abroad-title-accent"></span>

            </div>

            <div class="ahn-abroad-card-description">
              {!! htmlspecialchars_decode($sub->short_content ?? '') !!}
            </div>

            <div class="ahn-abroad-card-footer">

              <a href="{{ $serviceUrl }}" class="ahn-abroad-link">

                <span>Learn More</span>

                <span class="ahn-abroad-link-icon" aria-hidden="true">
                  <i class="fas fa-arrow-right"></i>
                </span>

              </a>

            </div>

          </div>

        </article>

      @endforeach

    </div>


    {{-- Bottom CTA --}}
    <div class="ahn-abroad-bottom" data-aos="fade-up" data-aos-duration="800">

      <p>
        Ready to take the next step towards your global education?
      </p>

      <a href="{{ url('/services') }}" class="ahn-abroad-cta">

        <span>Discover Aviation Hub Nepal</span>

        <i class="fas fa-arrow-up-right-from-square"></i>

      </a>

    </div>

  </div>

</section>