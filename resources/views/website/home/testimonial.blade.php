 
<!-- ==================== AVIATION HUB NEPAL TESTIMONIALS ==================== -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

<section id="ahn-testimonials">
    <div class="ahn-testimonials-container">

        <!-- Section Heading -->
        <div class="ahn-testimonials-heading" data-aos="fade-up">
            <span class="ahn-testimonials-eyebrow">
                <span class="ahn-testimonials-line"></span>
                CLIENT EXPERIENCES
                <span class="ahn-testimonials-line"></span>
            </span>

            <h2>
                What Our Clients
                <span>Say About Us</span>
            </h2>

            <p>
                Hear from the people who have trusted us with their aviation
                and international education journey.
            </p>
        </div>

        <!-- Testimonial Slider -->
        <div class="ahn-testimonials-slider-wrap">

            <div class="swiper ahn-testimonials-swiper">
                <div class="swiper-wrapper">

                    @if(isset($testimonial) && count($testimonial) > 0)

                        @foreach($testimonial as $test)
                            <div class="swiper-slide">
                                <article class="ahn-testimonial-card">

                                    <!-- Quote Icon -->
                                    <div class="ahn-testimonial-top">
                                        <div class="ahn-testimonial-quote">
                                            <i class="fas fa-quote-left"></i>
                                        </div>

                                        <div class="ahn-testimonial-stars"
                                             aria-label="Decorative rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                    <!-- Client Feedback -->
                                    <div class="ahn-testimonial-content">
                                        <p class="ahn-testimonial-text">
                                            {!! htmlspecialchars_decode($test->long_content ?? '') !!}
                                        </p>
                                    </div>

                                    <!-- Client Details -->
                                    <div class="ahn-testimonial-profile">

                                        <div class="ahn-testimonial-avatar">
                                            @if(!empty($test->banner_image))
                                                <img
                                                    src="{{ $test->banner_image }}"
                                                    alt="{{ strip_tags($test->caption ?? 'Client') }}"
                                                    loading="lazy">
                                            @else
                                                <div class="ahn-testimonial-avatar-placeholder">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="ahn-testimonial-details">
                                            <h3>
                                                {!! htmlspecialchars_decode($test->caption ?? '') !!}
                                            </h3>

                                            @if(!empty($test->short_content))
                                                <p>
                                                    {!! htmlspecialchars_decode($test->short_content) !!}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="ahn-testimonial-verified">
                                            <i class="fas fa-quote-right"></i>
                                        </div>

                                    </div>

                                </article>
                            </div>
                        @endforeach

                    @else
                        <div class="swiper-slide">
                            <div class="ahn-testimonials-empty">
                                Client testimonials will appear here.
                            </div>
                        </div>
                    @endif

                </div>
            </div>

            <!-- Slider Controls -->
            <div class="ahn-testimonials-controls">
                <button type="button"
                        class="ahn-testimonials-prev"
                        aria-label="Previous testimonials">
                    <i class="fas fa-arrow-left"></i>
                </button>

                <div class="ahn-testimonials-pagination"></div>

                <button type="button"
                        class="ahn-testimonials-next"
                        aria-label="Next testimonials">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

        </div>

        <!-- Bottom Message -->
        <div class="ahn-testimonials-footer" data-aos="fade-up">
            <span class="ahn-testimonials-footer-icon">
                <i class="fas fa-handshake"></i>
            </span>

            <p>
                Your journey matters to us.
                <strong>Let’s take the next step together.</strong>
            </p>
        </div>

    </div>
</section>


<style>
/* =====================================================
   AVIATION HUB NEPAL - TESTIMONIAL SECTION
   Unique prefix: ahn-testimonials-
===================================================== */

#ahn-testimonials {
    --ahn-testimonials-navy: #14243a;
    --ahn-testimonials-navy-light: #203955;
    --ahn-testimonials-gold: #c7a15a;
    --ahn-testimonials-gold-light: #ead6a9;
    --ahn-testimonials-text: #4c5969;
    --ahn-testimonials-muted: #7b8491;
    --ahn-testimonials-bg: #f5f7fa;

    position: relative;
    overflow: hidden;
    padding: 90px 0 72px;
    background:
        radial-gradient(
            circle at 5% 10%,
            rgba(199, 161, 90, 0.09),
            transparent 27%
        ),
        radial-gradient(
            circle at 95% 90%,
            rgba(20, 36, 58, 0.07),
            transparent 28%
        ),
        var(--ahn-testimonials-bg);
    font-family: inherit;
}

#ahn-testimonials *,
#ahn-testimonials *::before,
#ahn-testimonials *::after {
    box-sizing: border-box;
}

#ahn-testimonials .ahn-testimonials-container {
    width: min(1240px, calc(100% - 40px));
    margin: 0 auto;
}

/* Heading */

#ahn-testimonials .ahn-testimonials-heading {
    max-width: 760px;
    margin: 0 auto 52px;
    text-align: center;
}

#ahn-testimonials .ahn-testimonials-eyebrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-bottom: 18px;
    color: #a17b36;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2.5px;
}

#ahn-testimonials .ahn-testimonials-line {
    display: inline-block;
    width: 28px;
    height: 2px;
    background: var(--ahn-testimonials-gold);
}

#ahn-testimonials .ahn-testimonials-heading h2 {
    margin: 0;
    color: var(--ahn-testimonials-navy);
    font-size: clamp(30px, 4vw, 46px);
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -1.2px;
}

#ahn-testimonials .ahn-testimonials-heading h2 span {
    display: block;
    margin-top: 5px;
    color: var(--ahn-testimonials-gold);
}

#ahn-testimonials .ahn-testimonials-heading > p {
    max-width: 610px;
    margin: 19px auto 0;
    color: var(--ahn-testimonials-muted);
    font-size: 16px;
    line-height: 1.85;
}

/* Slider */

#ahn-testimonials .ahn-testimonials-slider-wrap {
    position: relative;
    padding: 8px 2px 18px;
}

#ahn-testimonials .ahn-testimonials-swiper {
    overflow: hidden;
    padding: 8px 1px 24px;
}

#ahn-testimonials .swiper-slide {
    display: flex;
    height: auto;
    align-items: stretch;
}

/* Testimonial Card */

#ahn-testimonials .ahn-testimonial-card {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    min-height: 340px;
    padding: 30px 28px 25px;
    overflow: hidden;
    border: 1px solid rgba(20, 36, 58, 0.07);
    border-radius: 15px;
    background: #fff;
    box-shadow: 0 9px 32px rgba(20, 36, 58, 0.055);
    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease,
        border-color 0.35s ease;
}

#ahn-testimonials .ahn-testimonial-card::before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(
        90deg,
        var(--ahn-testimonials-navy),
        var(--ahn-testimonials-gold)
    );
    content: "";
}

#ahn-testimonials .ahn-testimonial-card:hover {
    transform: translateY(-6px);
    border-color: rgba(199, 161, 90, 0.45);
    box-shadow: 0 18px 42px rgba(20, 36, 58, 0.11);
}

/* Card Header */

#ahn-testimonials .ahn-testimonial-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 20px;
}

#ahn-testimonials .ahn-testimonial-quote {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 46px;
    height: 46px;
    flex-shrink: 0;
    border-radius: 12px;
    background: rgba(199, 161, 90, 0.13);
    color: var(--ahn-testimonials-gold);
    font-size: 20px;
}

#ahn-testimonials .ahn-testimonial-stars {
    display: flex;
    flex-wrap: nowrap;
    gap: 4px;
    color: var(--ahn-testimonials-gold);
    font-size: 12px;
}

/* Feedback Text */

#ahn-testimonials .ahn-testimonial-content {
    flex: 1;
    margin-bottom: 25px;
}

#ahn-testimonials .ahn-testimonial-text {
    margin: 0;
    color: var(--ahn-testimonials-text);
    font-size: 15px;
    line-height: 1.9;
    overflow-wrap: anywhere;
}

#ahn-testimonials .ahn-testimonial-text p:last-child {
    margin-bottom: 0;
}

/* Client Profile */

#ahn-testimonials .ahn-testimonial-profile {
    display: flex;
    align-items: center;
    gap: 13px;
    padding-top: 20px;
    border-top: 1px solid #edf0f4;
}

#ahn-testimonials .ahn-testimonial-avatar {
    width: 58px;
    height: 58px;
    flex-shrink: 0;
    padding: 3px;
    overflow: hidden;
    border: 2px solid var(--ahn-testimonials-gold-light);
    border-radius: 50%;
    background: #fff;
}

#ahn-testimonials .ahn-testimonial-avatar img {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
}

#ahn-testimonials .ahn-testimonial-avatar-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: var(--ahn-testimonials-navy);
    color: #fff;
}

#ahn-testimonials .ahn-testimonial-details {
    flex: 1;
    min-width: 0;
}

#ahn-testimonials .ahn-testimonial-details h3 {
    margin: 0 0 5px;
    color: var(--ahn-testimonials-navy);
    font-size: 16px;
    font-weight: 800;
    line-height: 1.45;
    overflow-wrap: anywhere;
}

#ahn-testimonials .ahn-testimonial-details p {
    margin: 0;
    color: var(--ahn-testimonials-muted);
    font-size: 13px;
    line-height: 1.6;
    overflow-wrap: anywhere;
}

#ahn-testimonials .ahn-testimonial-verified {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    flex-shrink: 0;
    border-radius: 50%;
    background: #f4f0e7;
    color: var(--ahn-testimonials-gold);
    font-size: 13px;
}

/* Slider Controls */

#ahn-testimonials .ahn-testimonials-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 18px;
    margin-top: 7px;
}

#ahn-testimonials .ahn-testimonials-prev,
#ahn-testimonials .ahn-testimonials-next {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 43px;
    height: 43px;
    flex-shrink: 0;
    border: 1px solid #e0e5eb;
    border-radius: 50%;
    background: #fff;
    color: var(--ahn-testimonials-navy);
    font-size: 14px;
    cursor: pointer;
    transition: all 0.25s ease;
}

#ahn-testimonials .ahn-testimonials-prev:hover,
#ahn-testimonials .ahn-testimonials-next:hover {
    border-color: var(--ahn-testimonials-navy);
    background: var(--ahn-testimonials-navy);
    color: #fff;
}

#ahn-testimonials .ahn-testimonials-pagination {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    width: auto;
}

#ahn-testimonials .ahn-testimonials-pagination .swiper-pagination-bullet {
    width: 7px;
    height: 7px;
    margin: 0;
    border-radius: 10px;
    background: #bdc5ce;
    opacity: 1;
    transition: all 0.3s ease;
}

#ahn-testimonials .ahn-testimonials-pagination .swiper-pagination-bullet-active {
    width: 23px;
    background: var(--ahn-testimonials-gold);
}

/* Bottom Message */

#ahn-testimonials .ahn-testimonials-footer {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 13px;
    margin-top: 39px;
    text-align: center;
}

#ahn-testimonials .ahn-testimonials-footer-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 43px;
    height: 43px;
    flex-shrink: 0;
    border-radius: 50%;
    background: var(--ahn-testimonials-navy);
    color: var(--ahn-testimonials-gold-light);
}

#ahn-testimonials .ahn-testimonials-footer p {
    margin: 0;
    color: var(--ahn-testimonials-text);
    font-size: 14px;
    line-height: 1.7;
}

#ahn-testimonials .ahn-testimonials-footer strong {
    color: var(--ahn-testimonials-navy);
}

/* Empty State */

#ahn-testimonials .ahn-testimonials-empty {
    width: 100%;
    padding: 35px;
    border-radius: 12px;
    background: #fff;
    color: var(--ahn-testimonials-muted);
    text-align: center;
}

/* Responsive */

@media (max-width: 991px) {
    #ahn-testimonials {
        padding: 72px 0 60px;
    }

    #ahn-testimonials .ahn-testimonials-heading {
        margin-bottom: 35px;
    }

    #ahn-testimonials .ahn-testimonial-card {
        min-height: 320px;
        padding: 25px 22px 22px;
    }
}

@media (max-width: 575px) {
    #ahn-testimonials {
        padding: 58px 0 48px;
    }

    #ahn-testimonials .ahn-testimonials-container {
        width: calc(100% - 28px);
    }

    #ahn-testimonials .ahn-testimonials-heading {
        margin-bottom: 25px;
    }

    #ahn-testimonials .ahn-testimonials-eyebrow {
        gap: 8px;
        font-size: 10px;
        letter-spacing: 1.7px;
    }

    #ahn-testimonials .ahn-testimonials-line {
        width: 19px;
    }

    #ahn-testimonials .ahn-testimonials-heading h2 {
        font-size: 31px;
        letter-spacing: -0.6px;
    }

    #ahn-testimonials .ahn-testimonials-heading > p {
        margin-top: 14px;
        font-size: 14px;
        line-height: 1.8;
    }

    #ahn-testimonials .ahn-testimonial-card {
        min-height: 310px;
        padding: 24px 21px 21px;
    }

    #ahn-testimonials .ahn-testimonial-text {
        font-size: 14px;
        line-height: 1.85;
    }

    #ahn-testimonials .ahn-testimonials-footer {
        align-items: flex-start;
        margin-top: 28px;
        text-align: left;
    }

    #ahn-testimonials .ahn-testimonials-footer p {
        font-size: 13px;
    }
}

@media (prefers-reduced-motion: reduce) {
    #ahn-testimonials *,
    #ahn-testimonials *::before,
    #ahn-testimonials *::after {
        scroll-behavior: auto !important;
        transition-duration: 0.01ms !important;
        animation-duration: 0.01ms !important;
    }
}
</style>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
(function () {
    'use strict';

    function initAhnTestimonials() {
        var slider = document.querySelector(
            '#ahn-testimonials .ahn-testimonials-swiper'
        );

        if (!slider || typeof Swiper === 'undefined') {
            return;
        }

        // Prevent duplicate initialization.
        if (slider.swiper) {
            return;
        }

        var slideCount = slider.querySelectorAll(
            '.swiper-wrapper > .swiper-slide'
        ).length;

        var shouldLoop = slideCount > 3;

        new Swiper(slider, {
            slidesPerView: 3,
            spaceBetween: 24,
            speed: 650,
            loop: shouldLoop,
            watchOverflow: true,
            grabCursor: true,
            autoplay: shouldLoop ? {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            } : false,

            navigation: {
                nextEl: '#ahn-testimonials .ahn-testimonials-next',
                prevEl: '#ahn-testimonials .ahn-testimonials-prev'
            },

            pagination: {
                el: '#ahn-testimonials .ahn-testimonials-pagination',
                clickable: true
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 14
                },
                576: {
                    slidesPerView: 1,
                    spaceBetween: 18
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24
                }
            },

            a11y: {
                enabled: true
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initAhnTestimonials
        );
    } else {
        initAhnTestimonials();
    }
})();
</script>

<!-- ==================== END TESTIMONIAL SECTION ==================== -->
 
