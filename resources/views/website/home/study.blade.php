

<section id="ahn-global-destinations">
    <div class="ahn-gd-container">

        {{-- Decorative background elements --}}
        <div class="ahn-gd-orb ahn-gd-orb-one"></div>
        <div class="ahn-gd-orb ahn-gd-orb-two"></div>

        {{-- Header --}}
        <div class="ahn-gd-header" data-aos="fade-up" data-aos-duration="900">
            <div class="ahn-gd-kicker">
                <span class="ahn-gd-kicker-line"></span>
                YOUR GLOBAL JOURNEY STARTS HERE
                <span class="ahn-gd-kicker-line"></span>
            </div>

            <h2 class="ahn-gd-heading">
                Choose Your
                <span class="ahn-gd-heading-highlight">Study Destination</span>
            </h2>

            <p class="ahn-gd-intro">
                Explore leading international study destinations and discover
                opportunities to learn, grow, and build your future.
            </p>
        </div>

        {{-- Four-column destination grid --}}
        <div class="ahn-gd-grid">
            @foreach ($abroad as $sub)
                <a
                    href="{{ $sub->icon_image_caption ?: '#' }}"
                    class="ahn-gd-card"
                    data-aos="fade-up"
                    data-aos-delay="{{ (($loop->index % 4) + 1) * 100 }}"
                    aria-label="Explore study opportunities in {{ $sub->caption }}"
                >
                    <div class="ahn-gd-card-visual">

                        {{-- Country image --}}
                        <img
                            src="{{ $sub->banner_image ?? '' }}"
                            alt="{{ $sub->caption }}"
                            class="ahn-gd-card-image"
                            loading="lazy"
                        >

                        {{-- Image overlays --}}
                        <div class="ahn-gd-image-overlay"></div>
                        <div class="ahn-gd-image-glow"></div>

                        {{-- Top badge --}}
                        <div class="ahn-gd-top-label">
                            <span class="ahn-gd-label-dot"></span>
                            STUDY ABROAD
                        </div>

                        {{-- Corner decoration --}}
                        <div class="ahn-gd-corner-mark">
                            <i class="fas fa-globe-americas" aria-hidden="true"></i>
                        </div>

                        {{-- Bottom card content --}}
                        <div class="ahn-gd-card-content">
                            <span class="ahn-gd-card-overline">
                                DISCOVER YOUR OPPORTUNITIES
                            </span>

                            <h3 class="ahn-gd-country">
                                {{ $sub->caption }}
                            </h3>

                            <div class="ahn-gd-card-divider"></div>

                            <div class="ahn-gd-card-link">
                                <span>Explore Destination</span>
                                <span class="ahn-gd-arrow">
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                </a>
            @endforeach
        </div>

        {{-- Bottom call-to-action --}}
        <div class="ahn-gd-bottom" data-aos="fade-up" data-aos-delay="150">
            <div class="ahn-gd-bottom-icon">
                <i class="fas fa-compass" aria-hidden="true"></i>
            </div>

            <div class="ahn-gd-bottom-text">
                <h3>Not sure where to begin?</h3>
                <p>Get guidance to help you choose the right destination for your future.</p>
            </div>

            <a href="{{ url('/universities') }}" class="ahn-gd-bottom-button">
                Discover Our Services
                <i class="fas fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </div>
</section>

