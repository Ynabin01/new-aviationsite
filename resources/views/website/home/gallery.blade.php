<?php
use App\Models\NavigationItems;
?>

{{-- ============================================
AVIATION HUB NEPAL | MOMENTS & GALLERY
============================================= --}}

<section id="ahn-gallery-section">
    <div class="ahn-gallery-container">

        {{-- Decorative background --}}
        <div class="ahn-gallery-decoration ahn-gallery-decoration-one"></div>
        <div class="ahn-gallery-decoration ahn-gallery-decoration-two"></div>

        {{-- Section heading --}}
        <div class="ahn-gallery-header" data-aos="fade-up" data-aos-duration="900">

            <div class="ahn-gallery-eyebrow">
                <span class="ahn-gallery-eyebrow-line"></span>
                MOMENTS THAT MATTER
                <span class="ahn-gallery-eyebrow-line"></span>
            </div>

            <h2 class="ahn-gallery-title">
                Explore Our
                <span>Gallery</span>
            </h2>

            <p class="ahn-gallery-subtitle">
                A glimpse into our experiences, achievements, training activities,
                and memorable journeys at Aviation Hub Nepal.
            </p>
        </div>


        {{-- Gallery grid --}}
        <div class="ahn-gallery-grid">

            @foreach ($photos->childs->sortByDesc('updated_at') as $photo)

                        @if ($loop->iteration > 4)
                            @break
                        @endif

                        <?php
                $images = NavigationItems::query()
                    ->where('navigation_id', $photo->id)
                    ->latest()
                    ->get();
                            ?>

                        <a href="{{ route('GOTOGALLERY', $photo->nav_name) }}" class="ahn-gallery-card" data-aos="fade-up"
                            data-aos-duration="800" data-aos-delay="{{ $loop->iteration * 100 }}"
                            aria-label="View gallery: {{ $photo->caption }}">

                            {{-- Image --}}
                            <div class="ahn-gallery-image-wrap">

                                @if (!empty($photo->banner_image))
                                    <img src="{{ $photo->banner_image }}" alt="{{ $photo->caption }}" class="ahn-gallery-image"
                                        loading="lazy">
                                @else
                                    <div class="ahn-gallery-image-placeholder">
                                        <i class="fas fa-images" aria-hidden="true"></i>
                                    </div>
                                @endif

                                <div class="ahn-gallery-image-overlay"></div>

                                {{-- Top label --}}
                                <span class="ahn-gallery-category">
                                    <span class="ahn-gallery-category-dot"></span>
                                    OUR MOMENTS
                                </span>

                                {{-- Photo count --}}
                                <span class="ahn-gallery-photo-count">
                                    <i class="far fa-images" aria-hidden="true"></i>
                                    {{ $images->count() }}
                                </span>

                                {{-- Image hover action --}}
                                <span class="ahn-gallery-view">
                                    <i class="fas fa-arrow-up-right-from-square" aria-hidden="true"></i>
                                </span>

                                {{-- Image caption --}}
                                <div class="ahn-gallery-image-caption">
                                    <span class="ahn-gallery-caption-label">
                                        GALLERY COLLECTION
                                    </span>

                                    <h3>{{ $photo->caption }}</h3>
                                </div>

                            </div>


                            {{-- Card information --}}
                            <div class="ahn-gallery-card-info">

                                <div class="ahn-gallery-info-main">
                                    <h4>{{ $photo->caption }}</h4>

                                    <p>
                                        <i class="far fa-calendar-alt" aria-hidden="true"></i>
                                        {{ \Carbon\Carbon::parse($photo->updated_at)->format('M d, Y') }}
                                    </p>
                                </div>

                                <span class="ahn-gallery-card-arrow">
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </span>

                            </div>

                        </a>

            @endforeach

        </div>


        {{-- Bottom CTA --}}
        <div class="ahn-gallery-bottom" data-aos="fade-up" data-aos-duration="800">

            <div class="ahn-gallery-bottom-copy">
                <span class="ahn-gallery-bottom-eyebrow">
                    EVERY PICTURE TELLS A STORY
                </span>

                <p>
                    Explore more moments from our aviation journey.
                </p>
            </div>

            <a href="{{ url('/gallary/photo-gallery-one') }}" class="ahn-gallery-cta">

                <span>Discover Our Story</span>

                <i class="fas fa-arrow-right" aria-hidden="true"></i>
            </a>

        </div>

    </div>
</section>