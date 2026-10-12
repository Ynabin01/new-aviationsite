@if(isset($banners) && count($banners) > 0)

    <section class="ah-hero-slider" id="ahHeroSlider">

        {{-- Slides --}}
        <div class="ah-slides">

            @foreach($banners as $key => $banner)

                @php
                    $image = !empty($banner->banner_image)
                        ? $banner->banner_image
                        : (!empty($banner->main_attachment)
                            ? '/uploads/main_attachment/' . $banner->main_attachment
                            : '');

                    $image = $image ?: 'https://placehold.co/1920x1080/172033/ffffff?text=Welcome';
                @endphp

                <article class="ah-slide {{ $key == 0 ? 'ah-active' : '' }}" style="--ah-slide-image: url('{{ $image }}');"
                    aria-hidden="{{ $key == 0 ? 'false' : 'true' }}">

                    {{-- Background image --}}
                    <div class="ah-slide-image" style="background-image: url('{{ $image }}');">
                    </div>

                    {{-- Image overlay --}}
                    <div class="ah-slide-overlay"></div>

                    {{-- Fixed-position content area --}}
                    <div class="ah-slide-container">

                        <div class="ah-slide-content">

                            @if(!empty($banner->page_title))
                                <div class="ah-eyebrow">
                                    <span class="ah-eyebrow-line"></span>
                                    {!! htmlspecialchars_decode($banner->page_title) !!}
                                </div>
                            @endif

                            <h1 class="ah-slide-title">
                                {!! htmlspecialchars_decode($banner->caption ?? 'Explore Our Services') !!}
                            </h1>

                            @if(!empty($banner->short_content))
                                <h2 class="ah-slide-subtitle">
                                    {!! htmlspecialchars_decode($banner->short_content) !!}
                                </h2>
                            @endif

                            @if(!empty($banner->long_content))
                                <div class="ah-slide-description">
                                    {!! htmlspecialchars_decode($banner->long_content) !!}
                                </div>
                            @endif

                            <div class="ah-slide-buttons">

                                <a href="{{ url('/services') }}" class="ah-btn ah-btn-primary">
                                    Explore Services
                                    <span class="ah-btn-arrow">↗</span>
                                </a>

                                <a href="{{ url('/about-one/about-us-two') }}" class="ah-btn ah-btn-outline">
                                    About Us
                                </a>

                            </div>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

        {{-- Desktop thumbnail navigation --}}
        @if(count($banners) > 1)
            <div class="ah-thumbnail-panel">

                <div class="ah-thumbnail-heading">
                    <span>DISCOVER MORE</span>
                    <span class="ah-thumbnail-line"></span>
                </div>

                <div class="ah-thumbnails">

                    @foreach($banners as $key => $banner)

                        @php
                            $thumbImage = !empty($banner->banner_image)
                                ? $banner->banner_image
                                : (!empty($banner->main_attachment)
                                    ? '/uploads/main_attachment/' . $banner->main_attachment
                                    : 'https://placehold.co/160x100/172033/ffffff?text=Banner');
                        @endphp

                        <button type="button" class="ah-thumbnail {{ $key == 0 ? 'ah-thumb-active' : '' }}" data-slide="{{ $key }}"
                            aria-label="Show slide {{ $key + 1 }}" aria-pressed="{{ $key == 0 ? 'true' : 'false' }}">
                            <img src="{{ $thumbImage }}" alt="Banner {{ $key + 1 }}">

                            <span class="ah-thumb-number">
                                {{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>
                        </button>

                    @endforeach

                </div>

            </div>
        @endif

        {{-- Slider controls --}}
        @if(count($banners) > 1)

            <div class="ah-slider-controls">

                <button type="button" class="ah-arrow ah-prev" aria-label="Previous slide">
                    &#8592;
                </button>

                <div class="ah-slide-counter">
                    <span class="ah-current-number">01</span>
                    <span class="ah-counter-divider"></span>
                    <span class="ah-total-number">
                        {{ str_pad(count($banners), 2, '0', STR_PAD_LEFT) }}
                    </span>
                </div>

                <button type="button" class="ah-arrow ah-next" aria-label="Next slide">
                    &#8594;
                </button>

            </div>

            {{-- Progress bar --}}
            <div class="ah-progress-track">
                <div class="ah-progress-bar"></div>
            </div>

        @endif

    </section>

@endif



<script>
    (function () {
        'use strict';

        const slider = document.getElementById('ahHeroSlider');

        if (!slider || slider.dataset.initialized === 'true') {
            return;
        }

        slider.dataset.initialized = 'true';

        const slides = Array.from(
            slider.querySelectorAll('.ah-slide')
        );

        const thumbnails = Array.from(
            slider.querySelectorAll('.ah-thumbnail')
        );

        const previousButton = slider.querySelector('.ah-prev');
        const nextButton = slider.querySelector('.ah-next');
        const currentNumber = slider.querySelector('.ah-current-number');
        const progressBar = slider.querySelector('.ah-progress-bar');

        if (slides.length === 0) {
            return;
        }

        let currentIndex = 0;
        let timer = null;
        let startTime = null;
        let animationFrame = null;

        const duration = 7000;

        const reducedMotion = window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;

        function updateProgress(timestamp) {
            if (!startTime) {
                startTime = timestamp;
            }

            const elapsed = timestamp - startTime;
            const percentage = Math.min(
                (elapsed / duration) * 100,
                100
            );

            if (progressBar) {
                progressBar.style.width = percentage + '%';
            }

            if (elapsed < duration) {
                animationFrame = requestAnimationFrame(updateProgress);
            }
        }

        function stopTimer() {
            clearTimeout(timer);
            timer = null;

            if (animationFrame) {
                cancelAnimationFrame(animationFrame);
                animationFrame = null;
            }

            startTime = null;
        }

        function startTimer() {
            stopTimer();

            if (slides.length < 2 || reducedMotion) {
                return;
            }

            if (progressBar) {
                progressBar.style.width = '0%';
            }

            animationFrame = requestAnimationFrame(updateProgress);

            timer = setTimeout(function () {
                showSlide(currentIndex + 1);
            }, duration);
        }

        function showSlide(index, resetTimer = true) {
            currentIndex = (index + slides.length) % slides.length;

            slides.forEach(function (slide, i) {
                const active = i === currentIndex;

                slide.classList.toggle('ah-active', active);
                slide.setAttribute('aria-hidden', active ? 'false' : 'true');
            });

            thumbnails.forEach(function (thumbnail, i) {
                const active = i === currentIndex;

                thumbnail.classList.toggle('ah-thumb-active', active);
                thumbnail.setAttribute('aria-pressed', active ? 'true' : 'false');
            });

            if (currentNumber) {
                currentNumber.textContent = String(currentIndex + 1).padStart(2, '0');
            }

            if (resetTimer) {
                startTimer();
            }
        }

        if (nextButton) {
            nextButton.addEventListener('click', function () {
                showSlide(currentIndex + 1);
            });
        }

        if (previousButton) {
            previousButton.addEventListener('click', function () {
                showSlide(currentIndex - 1);
            });
        }

        thumbnails.forEach(function (thumbnail, index) {
            thumbnail.addEventListener('click', function () {
                showSlide(index);
            });
        });

        // Pause automatic rotation while the visitor interacts with the slider.
        slider.addEventListener('mouseenter', stopTimer);

        slider.addEventListener('mouseleave', function () {
            startTimer();
        });

        slider.addEventListener('focusin', stopTimer);

        slider.addEventListener('focusout', function (event) {
            if (!slider.contains(event.relatedTarget)) {
                startTimer();
            }
        });

        // Keyboard navigation
        slider.addEventListener('keydown', function (event) {
            if (event.key === 'ArrowRight') {
                showSlide(currentIndex + 1);
            }

            if (event.key === 'ArrowLeft') {
                showSlide(currentIndex - 1);
            }
        });

        // Initial slide
        showSlide(0);
    })();
</script>