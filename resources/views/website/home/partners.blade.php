 
<!-- ==================== PARTNERS SECTION ==================== -->
<section id="ahn-partners-section">
    <div class="container-xxl ahn-partners-container">

        <!-- Section Heading -->
        <div class="ahn-partners-heading"
             data-aos="fade-up"
             data-aos-duration="900">

            <span class="ahn-partners-eyebrow">
                <span class="ahn-partners-line"></span>
                OUR NETWORK
                <span class="ahn-partners-line"></span>
            </span>

            <h2 class="ahn-partners-title">
                Our Trusted <span>Partners</span>
            </h2>

            <p class="ahn-partners-subtitle">
                Building strong partnerships to create better opportunities
                in aviation and global education.
            </p>
        </div>

        <!-- Partner Logos -->
        @if(isset($partners) && count($partners) > 0)

            <div class="owl-carousel ahn-partners-carousel">

                @foreach($partners as $partner)

                    <div class="ahn-partners-item">
                        <div class="ahn-partners-card">

                            <div class="ahn-partners-logo-area">
                                <img
                                    src="{{ $partner->banner_image }}"
                                    alt="{{ $partner->caption ?? 'Partner Logo' }}"
                                    class="ahn-partners-logo"
                                    loading="eager"
                                >
                            </div>

                            <div class="ahn-partners-card-footer">
                                <span class="ahn-partners-dot"></span>
                                <span>Our Partner</span>
                            </div>

                        </div>
                    </div>

                @endforeach

            </div>

        @else

            <div class="ahn-partners-empty">
                Our partner network will be displayed here.
            </div>

        @endif

    </div>
</section>


<!-- ==================== OWL CAROUSEL CSS ==================== -->
<!-- Include these stylesheet links only once on your website. -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
>


<!-- ==================== PARTNERS CSS ==================== -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 
<script>
(function () {
    'use strict';

    function initAhnPartners() {
        if (!window.jQuery) {
            console.error('Partner carousel: jQuery is not loaded.');
            return;
        }

        var $ = window.jQuery;
        var $carousel = $('#ahn-partners-section .ahn-partners-carousel');

        if (!$carousel.length) {
            return;
        }

        if (!$.fn.owlCarousel) {
            console.error('Partner carousel: Owl Carousel is not loaded.');
            return;
        }

        // Prevent the carousel from initializing more than once.
        if ($carousel.hasClass('owl-loaded')) {
            return;
        }

        // Count the original partner logos.
        var partnerCount = $carousel.children('.ahn-partners-item').length;

        if (partnerCount === 0) {
            return;
        }

        // Repeat existing logos until there are at least five items.
        var minimumItems = 5;
        var $originalItems = $carousel.children('.ahn-partners-item').clone(false);

        while ($carousel.children('.ahn-partners-item').length < minimumItems) {
            $originalItems.each(function () {
                if ($carousel.children('.ahn-partners-item').length < minimumItems) {
                    $carousel.append($(this).clone(false));
                }
            });
        }

        // Initialize the partner carousel.
        $carousel.owlCarousel({
            items: 5,
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 2800,
            autoplaySpeed: 700,
            smartSpeed: 700,
            autoplayHoverPause: true,
            center: false,
            autoHeight: false,

            responsive: {
                0: {
                    items: 1,
                    margin: 12
                },
                480: {
                    items: 2,
                    margin: 14
                },
                768: {
                    items: 3,
                    margin: 16
                },
                992: {
                    items: 4,
                    margin: 18
                },
                1200: {
                    items: 5,
                    margin: 20
                }
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAhnPartners);
    } else {
        initAhnPartners();
    }
})();
</script>
 
