@php
    $normal_gallary_notice = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', 'Normal')
        ->orderBy('position', 'ASC')
        ->get();

    $menus = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();

    $global_setting = App\Models\GlobalSetting::first();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aviation Services Nepal Pvt.Ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{{ $seo->meta_keywords ?? '' }}">
    <meta name="description"
        content="{{ $seo->meta_description ?? 'Aviation Hub Nepal offers expert aviation education consulting, pilot training guidance, and global aviation study abroad services.' }}">
    <meta name="google-site-verification" content="q6QJ5VbiopGq0yJK3g9ZkUV4IBNO3ETY2s4VJCPpVsY" />
    <meta name="google-adsense-account" content="ca-pub-3821644976826249">
    <!-- Favicon -->
    <!--<link rel="icon" type="image/x-icon" href="{{ asset('website/img/logo.PNG') }}">-->
    <link rel="icon" type="image/x-icon" href="/uploads/icons/{{ $global_setting->site_logo }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&family=Montserrat&family=Poppins&display=swap"
        rel="stylesheet">
    <!-- Font Awesome (latest only, keep v6) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('website/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Theme Stylesheet -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('website/assets/css/theme-1.css') }}">
    <!-- Bootstrap Stylesheet -->
    <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Dashain Celebration -->
    <div id="ahn-dashain-celebration">

        <!-- Flying Kites and Balloons -->
        <div class="ahn-kite-scene" aria-hidden="true">

            <!-- Golden Kite -->
            <div class="ahn-flying-kite ahn-kite-one">
                <svg viewBox="0 0 100 130" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50 5 L92 43 L50 85 L8 43 Z" fill="#d4a43c" stroke="#fff0b5" stroke-width="2" />
                    <path d="M50 5 L50 85 M8 43 L92 43" fill="none" stroke="#fff0b5" stroke-width="1.5" />
                    <path d="M50 85 Q60 100 48 110 Q40 118 51 128" fill="none" stroke="#fff0b5" stroke-width="1.5" />
                    <path d="M50 85 L62 96 L49 100 L57 110" fill="none" stroke="#d4a43c" stroke-width="2" />
                    <path d="M50 15 L79 43 L50 72 L21 43 Z" fill="none" stroke="#fff0b5" stroke-width="1" />
                </svg>
            </div>

            <!-- Red Kite -->
            <div class="ahn-flying-kite ahn-kite-two">
                <svg viewBox="0 0 100 130" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50 5 L92 43 L50 85 L8 43 Z" fill="#b51e36" stroke="#ffd5dc" stroke-width="2" />
                    <path d="M50 5 L50 85 M8 43 L92 43" fill="none" stroke="#ffd5dc" stroke-width="1.5" />
                    <path d="M50 85 Q60 100 48 110 Q40 118 51 128" fill="none" stroke="#ffd5dc" stroke-width="1.5" />
                    <path d="M50 85 L62 96 L49 100 L57 110" fill="none" stroke="#ffd5dc" stroke-width="2" />
                    <path d="M50 15 L79 43 L50 72 L21 43 Z" fill="none" stroke="#ffd5dc" stroke-width="1" />
                </svg>
            </div>

            <!-- Blue Kite -->
            <div class="ahn-flying-kite ahn-kite-three">
                <svg viewBox="0 0 100 130" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50 5 L92 43 L50 85 L8 43 Z" fill="#176a91" stroke="#c8efff" stroke-width="2" />
                    <path d="M50 5 L50 85 M8 43 L92 43" fill="none" stroke="#c8efff" stroke-width="1.5" />
                    <path d="M50 85 Q60 100 48 110 Q40 118 51 128" fill="none" stroke="#c8efff" stroke-width="1.5" />
                    <path d="M50 85 L62 96 L49 100 L57 110" fill="none" stroke="#c8efff" stroke-width="2" />
                </svg>
            </div>

            <!-- Floating Balloons -->
            <div class="ahn-balloon ahn-balloon-one"><span></span></div>
            <div class="ahn-balloon ahn-balloon-two"><span></span></div>
            <div class="ahn-balloon ahn-balloon-three"><span></span></div>
            <div class="ahn-balloon ahn-balloon-four"><span></span></div>

        </div>

        <!-- Dashain Welcome Popup -->
        <div class="ahn-dashain-overlay" id="ahnDashainOverlay" role="dialog" aria-modal="true"
            aria-labelledby="ahnDashainTitle">

            <div class="ahn-dashain-modal">

                <!-- Close Button -->
                <button type="button" class="ahn-dashain-close" id="ahnDashainClose" aria-label="Close greeting">
                    &times;
                </button>

                <div class="ahn-modal-decoration ahn-decoration-top"></div>

                <div class="ahn-dashain-content">

                    <!-- Festival Label -->
                    <div class="ahn-dashain-label">
                        <span class="ahn-label-line"></span>
                        FESTIVAL OF VICTORY
                        <span class="ahn-label-line"></span>
                    </div>

                    <!-- Goddess Durga Mata Image -->
                    <div class="ahn-durga-frame">

                        <img src="{{ asset('website/img/db.png') }}" alt="Goddess Durga Mata"
                            class="ahn-durga-image"
                            onerror="this.closest('.ahn-durga-frame').classList.add('ahn-image-unavailable'); this.style.display='none';" />

                        <!-- Fallback if image is unavailable -->
                        <div class="ahn-image-fallback">
                            <span class="ahn-fallback-symbol">🙏</span>
                            <span>जय माता दी</span>
                        </div>

                    </div>

                    <!-- Greeting -->
                    <p class="ahn-dashain-subtitle">
                        Warm wishes on the occasion of
                    </p>

                    <h2 id="ahnDashainTitle" class="ahn-dashain-title">
                        Happy <span>Dashain</span>
                    </h2>

                    <div class="ahn-title-ornament">
                        <span></span>
                        <i>✦</i>
                        <span></span>
                    </div>

                    <p class="ahn-dashain-message">
                        May Goddess Durga bless you and your family
                        with happiness, prosperity, courage and success.
                    </p>

                    <p class="ahn-dashain-welcome">
                        Welcome to <strong>Aviation Hub Nepal</strong>
                    </p>

                    <!-- Explore Button -->
                    <button type="button" class="ahn-dashain-button" id="ahnDashainExplore">
                        Explore Our Website
                        <span aria-hidden="true">→</span>
                    </button>
                    <p class="ahn-dashain-footer">
                        Wishing you a joyful and prosperous Dashain
                    </p>
                </div>
                <div class="ahn-modal-decoration ahn-decoration-bottom"></div>
            </div>
        </div>
    </div>

    <!-- End Dashain Celebration -->

    <!-- Top Bar -->
    <div class="container-fluid bg-dark text-light py-2">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left: Email + Phone (Hidden on mobile/tablet) -->
                <div class="col-lg-6 d-none d-lg-flex align-items-center gap-4">
                    <span class="d-flex align-items-center small text-light">
                        <i class="fas fa-envelope me-2 text-warning"></i>
                        <a href="mailto:{{ $global_setting->site_email }}" class="text-light text-decoration-none">
                            {{ $global_setting->site_email }}
                        </a>
                    </span>
                    <span class="d-flex align-items-center small text-light">
                        <i class="fas fa-phone-alt me-2 text-success"></i>
                        <a href="tel:{{ $global_setting->phone }}" class="text-light text-decoration-none">
                            {{ $global_setting->phone }}
                        </a>
                    </span>
                </div>
                <!-- Right: Social Icons (Always Visible) -->
                <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end gap-2 mt-2 mt-lg-0">
                    <a href="{{ $global_setting->facebook ?? '#' }}" target="_blank"
                        class="rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 36px; height: 36px; background:#3b5998; color:white; transition:.3s;">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ $global_setting->twitter ?? '#' }}" target="_blank"
                        style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; background:#000; color:white; border-radius: 50%; transition: .3s;">
                        <i class="fab fa-x"></i>
                    </a>
                    <a href="{{ $global_setting->linkedin ?? '#' }}" target="_blank"
                        class="rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 36px; height: 36px; background:#e4405f; color:white; transition:.3s;">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--  end .container -->
    <!-- Navbar & Hero Start -->
    <!-- Navbar Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-0 upri-navbar"
            style="background-color: rgba(0, 0, 0, 0.1); height: 60px;">
            <!-- Logo -->
            <a href="/" class="image-hder navbar-brand d-flex justify-content-center align-items-center p-0"
                style="height: 100%; width: 160px; margin-left: 60px;">
                <img src="/uploads/icons/{{ $global_setting->site_logo }}" alt="Logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" id="mobileMenuToggle">
                <span class="fa fa-bars text-white"></span>
            </button>
            <!-- Desktop Menu -->
            <div class="collapse navbar-collapse nav-border-small" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0" style="width: 100%; padding:15px; margin-bottom: 10px;">
                    <a href="/" class="nav-item nav-link active">Home</a>

                    @foreach ($menus as $menu)
                        <div class="nav-item @if ($menu->childs->count() > 0) dropdown @endif">
                            <a href="@if($menu->nav_name == 'aboutus' || $menu->nav_name == 'notice' || $menu->nav_name == 'gallery') # 
                            @elseif ($menu->nav_name == 'blog') /{{ $menu->nav_name }}?content=blogs 
                                @else /{{ $menu->nav_name }} @endif"
                                class="nav-link @if ($menu->childs->count() > 0 && !in_array($menu->id, ['2752', '2751', '2756'])) dropdown-toggle @endif"
                                @if ($menu->childs->count() > 0 && !in_array($menu->id, ['2752', '2751', '2756']))
                                data-bs-toggle="dropdown" role="button" aria-expanded="false" @endif>
                                {{ $menu->caption }}
                            </a>

                            @if ($menu->childs->count() > 0 && !in_array($menu->id, ['2415', '2537', '2752', '2751', '2756']))
                                <div class="dropdown-menu m-0">
                                    @if ($menu->id != '2753')
                                        @foreach ($menu->childs as $sub)
                                            <a href="/{{ $menu->nav_name }}/{{ $sub->nav_name }}"
                                                class="dropdown-item">{{ $sub->caption }}</a>
                                        @endforeach
                                    @else
                                        @php $subpage = $menu->childs->first() @endphp
                                        @foreach ($subpage->childs as $sub)
                                            <a href="/{{ $menu->nav_name }}/{{ $sub->nav_name }}"
                                                class="dropdown-item">{{ $sub->caption }}</a>
                                        @endforeach
                                    @endif
                                </div>
                            @endif
                        </div>
                    @endforeach

                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>

        <!-- Mobile Overlay Menu -->
        <div id="mobileMenuOverlay">
            <span id="mobileMenuClose" class="fa fa-times" style="margin-right: 40px !important;"></span>
            <div class="navbar-nav flex-column mobile-menu-body">
                <a href="/" class="mobile-nav-link">Home</a>

                @foreach ($menus as $menu)
                    <div class="mobile-nav-item">
                        <a href="@if($menu->nav_name == 'aboutus' || $menu->nav_name == 'notice' || $menu->nav_name == 'gallery') # 
                         @elseif ($menu->nav_name == 'blog') /{{ $menu->nav_name }}?content=blogs 
                             @else /{{ $menu->nav_name }} @endif" class="mobile-nav-link">{{ $menu->caption }}</a>

                        @if ($menu->childs->count() > 0 && !in_array($menu->id, ['2415', '2537', '2752', '2751', '2756']))
                            <div class="mobile-submenu">
                                @if ($menu->id != '2753')
                                    @foreach ($menu->childs as $sub)
                                        <a href="/{{ $menu->nav_name }}/{{ $sub->nav_name }}"
                                            class="mobile-submenu-link">{{ $sub->caption }}</a>
                                    @endforeach
                                @else
                                    @php $subpage = $menu->childs->first() @endphp
                                    @foreach ($subpage->childs as $sub)
                                        <a href="/{{ $menu->nav_name }}/{{ $sub->nav_name }}"
                                            class="mobile-submenu-link">{{ $sub->caption }}</a>
                                    @endforeach
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach

                <a href="/contact" class="mobile-nav-link">Contact</a>
            </div>
        </div>
    </div>

    <style>
        /* Desktop nav stays as it is */
        .navbar-nav .nav-link {
            font-weight: 700 !important;
            color: black;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: red;
        }

        /* Mobile overlay menu */
        #mobileMenuOverlay {
            position: fixed;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background-color: #fff;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            padding: 60px 20px 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);
            overflow-y: auto;
            transition: left 0.35s ease;
        }

        /* Slide-in overlay */
        #mobileMenuOverlay.active {
            left: 0;
            animation: overlayFadeSlide 0.35s ease forwards;
        }

        @keyframes overlayFadeSlide {
            0% {
                left: -100%;
                opacity: 0;
            }

            100% {
                left: 0;
                opacity: 1;
            }
        }

        /* Close button */
        #mobileMenuClose {
            position: fixed;
            top: 20px;
            right: 20px;
            font-size: 28px;
            color: #333;
            cursor: pointer;
            z-index: 10000;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        #mobileMenuOverlay.active+#mobileMenuClose,
        #mobileMenuClose.active {
            opacity: 1;
            pointer-events: auto;
        }

        /* Contact info */
        #mobileMenuOverlay .contact-info {
            margin-bottom: 20px;
            font-size: 13px;
            /* smaller text */
            line-height: 1.4;
            color: #333;
        }

        #mobileMenuOverlay .contact-info a {
            color: #333;
            text-decoration: none;
        }

        #mobileMenuOverlay .contact-info a:hover {
            color: #007BFF;
        }

        /* Menu items */
        .mobile-menu-body {
            display: flex;
            flex-direction: column;
            gap: 6px;
            /* smaller gap between menu items */
        }

        /* Main links */
        .mobile-nav-link {
            font-size: 15px;
            /* smaller text */
            font-weight: 700;
            /* bold text */
            color: #333;
            text-decoration: none;
            padding: 8px 0;
            /* less padding */
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .mobile-nav-link:hover {
            color: #007BFF;
        }

        /* Submenu toggle "+" */
        .mobile-nav-item>.mobile-nav-link::after {
            content: '+';
            font-size: 16px;
            font-weight: 700;
            /* bold plus sign */
            color: #555;
            transition: transform 0.3s ease;
        }

        .mobile-nav-item.active>.mobile-nav-link::after {
            transform: rotate(45deg);
        }

        /* Submenu */
        .mobile-submenu {
            padding-left: 15px;
            max-height: 0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            gap: 6px;
            transition: max-height 0.35s ease, opacity 0.35s ease;
            opacity: 0;
        }

        .mobile-submenu.active {
            max-height: 500px;
            opacity: 1;
        }

        /* Submenu links */
        .mobile-submenu-link {
            font-size: 14px;
            /* smaller text */
            font-weight: 700;
            /* bold submenu text */
            color: #555;
            text-decoration: none;
            padding: 6px 0;
            transition: color 0.3s ease;
        }

        .mobile-submenu-link:hover {
            color: #007BFF;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            #navbarCollapse {
                display: none !important;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('mobileMenuToggle');
            const overlay = document.getElementById('mobileMenuOverlay');
            const closeBtn = document.getElementById('mobileMenuClose');

            if (!toggleBtn || !overlay || !closeBtn) return;

            function openMobileMenu() {
                overlay.classList.add('active');
                closeBtn.classList.add('active');
                closeBtn.style.display = 'block';
                toggleBtn.setAttribute('aria-expanded', 'true');
                document.body.style.overflow = 'hidden';
            }

            function closeMobileMenu() {
                overlay.classList.remove('active');
                closeBtn.classList.remove('active');
                closeBtn.style.display = 'none';
                toggleBtn.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }

            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.addEventListener('click', openMobileMenu);
            closeBtn.addEventListener('click', closeMobileMenu);

            overlay.addEventListener('click', function (event) {
                if (event.target === overlay) closeMobileMenu();
            });

            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape' && overlay.classList.contains('active')) {
                    closeMobileMenu();
                }
            });

            overlay.querySelectorAll('.mobile-nav-item > .mobile-nav-link').forEach(function (link) {
                link.addEventListener('click', function (event) {
                    const submenu = this.nextElementSibling;
                    if (submenu && submenu.classList.contains('mobile-submenu')) {
                        event.preventDefault();
                        submenu.classList.toggle('active');
                        this.parentElement.classList.toggle('active', submenu.classList.contains('active'));
                        this.setAttribute('aria-expanded', submenu.classList.contains('active') ? 'true' : 'false');
                    }
                });
            });

            overlay.querySelectorAll('.mobile-submenu-link, a:not(.mobile-nav-link)').forEach(function (link) {
                link.addEventListener('click', function () {
                    if (this.getAttribute('href') && this.getAttribute('href') !== '#') closeMobileMenu();
                });
            });
        });
    </script>

    @yield('content')

    <!-- banner start  -->
    <!-- about us start  -->
    <!-- Service Start -->
    <!-- Start Study Abroad -->
    <!-- Testimonial Start -->
    <!-- Gallery Start -->
    <!-- Client Section -->
    <!-- Blog Start -->

    <!-- Footer Start -->

    <footer id="ahn-premium-footer">

        {{-- Main Footer --}}
        <div class="ahn-pf-main">
            <div class="container">

                {{-- Footer Top Brand Line --}}
                <div class="ahn-pf-topline">
                    <div class="ahn-pf-topline-label">
                        <span class="ahn-pf-status-dot"></span>
                        YOUR JOURNEY. OUR GUIDANCE.
                    </div>
                    <div class="ahn-pf-topline-rule"></div>
                    <span class="ahn-pf-topline-code">AHN / NEPAL</span>
                </div>

                <div class="row ahn-pf-grid">

                    {{-- Brand Column --}}
                    <div class="col-lg-4 col-md-6">
                        <div class="ahn-pf-brand">

                            <a href="/" class="ahn-pf-logo">
                                <img src="/uploads/icons/{{ $global_setting->site_logo }}"
                                    alt="{{ $global_setting->site_name ?? 'Aviation Hub Nepal' }}" loading="lazy">
                            </a>

                            <p class="ahn-pf-description">
                                {{ $global_setting->site_description ?? 'Your trusted partner for aviation education, professional guidance and international study opportunities.' }}
                            </p>

                            <div class="ahn-pf-social-heading">
                                CONNECT WITH US
                            </div>

                            <div class="ahn-pf-socials">

                                @if(!empty($global_setting->facebook))
                                    <a href="{{ $global_setting->facebook }}" target="_blank" rel="noopener noreferrer"
                                        aria-label="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                @endif

                                @if(!empty($global_setting->twitter))
                                    <a href="{{ $global_setting->twitter }}" target="_blank" rel="noopener noreferrer"
                                        aria-label="Twitter or X">
                                        <i class="fab fa-x"></i>
                                    </a>
                                @endif

                                @if(!empty($global_setting->linkedin))
                                    <a href="{{ $global_setting->linkedin }}" target="_blank" rel="noopener noreferrer"
                                        aria-label="LinkedIn">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>

                    {{-- Navigation Column --}}
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="ahn-pf-column">
                            <div class="ahn-pf-eyebrow">EXPLORE</div>
                            <h5>Quick Links</h5>

                            <ul class="ahn-pf-links">
                                <li>
                                    <a href="/about-one/about-us-two">
                                        <span>About Us</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/services">
                                        <span>Our Services</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/gallary/photo-gallery-one">
                                        <span>Photo Gallery</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog?content=blogs">
                                        <span>Latest Articles</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact">
                                        <span>Contact Us</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Contact Column --}}
                    <div class="col-lg-3 col-md-6">
                        <div class="ahn-pf-column">
                            <div class="ahn-pf-eyebrow">WE ARE HERE TO HELP</div>
                            <h5>Contact Information</h5>

                            <div class="ahn-pf-contact-list">

                                @if(!empty($global_setting->site_email))
                                    <a href="mailto:{{ $global_setting->site_email }}" class="ahn-pf-contact-item">
                                        <span class="ahn-pf-contact-icon">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                        <span class="ahn-pf-contact-content">
                                            <small>EMAIL US</small>
                                            <strong>{{ $global_setting->site_email }}</strong>
                                        </span>
                                    </a>
                                @endif

                                @if(!empty($global_setting->phone))
                                    <a href="tel:{{ $global_setting->phone }}" class="ahn-pf-contact-item">
                                        <span class="ahn-pf-contact-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </span>
                                        <span class="ahn-pf-contact-content">
                                            <small>CALL US</small>
                                            <strong>{{ $global_setting->phone }}</strong>
                                        </span>
                                    </a>
                                @endif

                                @if(!empty($global_setting->website_full_address))
                                    <div class="ahn-pf-contact-item ahn-pf-address-item">
                                        <span class="ahn-pf-contact-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                        <span class="ahn-pf-contact-content">
                                            <small>VISIT OUR OFFICE</small>
                                            <strong>{{ $global_setting->website_full_address }}</strong>
                                        </span>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>

                    {{-- Location Column --}}
                    <div class="col-lg-3 col-md-6">
                        <div class="ahn-pf-column">
                            <div class="ahn-pf-eyebrow">OUR LOCATION</div>
                            <h5>Find Our Office</h5>

                            <div class="ahn-pf-map-card">
                                <div class="ahn-pf-map-frame">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44668.46432989629!2d85.28493276485202!3d27.70903024219139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e1!3m2!1sen!2snp!4v1755687932394!5m2!1sen!2snp"
                                        title="Aviation Hub Nepal location map" loading="lazy" allowfullscreen
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>

                                <a href="https://www.google.com/maps/search/?api=1&query=Kathmandu%2C%20Nepal"
                                    target="_blank" rel="noopener noreferrer" class="ahn-pf-directions">
                                    <span>
                                        <i class="fas fa-location-arrow"></i>
                                        Get Directions
                                    </span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Footer Signature --}}
                <div class="ahn-pf-signature">
                    <span class="ahn-pf-signature-line"></span>
                    <span>AVIATION HUB NEPAL</span>
                    <span class="ahn-pf-signature-line"></span>
                </div>

            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="ahn-pf-bottom">
            <div class="container">
                <div class="ahn-pf-bottom-inner">

                    <p class="ahn-pf-copyright">
                        &copy; {{ date('Y') }}
                        {{ $global_setting->site_name ?? 'Aviation Hub Nepal' }}.
                        All rights reserved.
                    </p>

                    <p class="ahn-pf-credit">
                        Crafted by
                        <a href=" " target="_blank" rel="noopener noreferrer">
                            NABIN YADAV
                        </a>
                    </p>

                    <a href="#top" class="ahn-pf-backtop"
                        onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;">
                        BACK TO TOP
                        <i class="fas fa-arrow-up"></i>
                    </a>

                </div>
            </div>
        </div>

    </footer>


    <!-- Footer End   -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/website/lib/wow/wow.min.js"></script>
    <script src="/website/lib/easing/easing.min.js"></script>
    <script src="/website/lib/waypoints/waypoints.min.js"></script>
    <script src="/website/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="/website/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <!-- JS to fix dropdown click on mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dropdowns = document.querySelectorAll('.navbar-collapse .dropdown-toggle');
            dropdowns.forEach(function (dropdown) {
                dropdown.addEventListener('click', function (e) {
                    if (window.innerWidth < 992) { // mobile only
                        e.preventDefault();
                        var parent = this.parentElement;
                        parent.classList.toggle('show');
                    }
                });
            });
        });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const questions = document.querySelectorAll('.question');
            questions.forEach(function (question) {
                question.addEventListener('click', function () {
                    const answer = this.nextElementSibling;
                    if (!answer) return;
                    const arrow = this.querySelector('.arrow');
                    if (answer.style.display === 'block') {
                        answer.style.display = 'none';
                        if (arrow) arrow.textContent = '\u25BC';
                    } else {
                        answer.style.display = 'block';
                        if (arrow) arrow.textContent = '\u25B2';
                    }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll('.dd');
            tabs.forEach(tab => {
                tab.addEventListener('click', function () {
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });

    </script>

    <script>
        $(document).ready(function () {
            var owl = $(".client-carousel");
            if (!owl.length || typeof owl.owlCarousel !== 'function') return;
            owl.owlCarousel({
                items: 4
                , loop: true
                , margin: 10
                , autoplay: true
                , autoplayTimeout: 3000
                , autoplayHoverPause: true
                , nav: false
                , dots: false
                , responsive: {
                    0: {
                        items: 1
                    }
                    , 480: {
                        items: 2
                    }
                    , 768: {
                        items: 3
                    }
                    , 992: {
                        items: 4
                    }
                }
            });

            // Custom Next/Prev buttons
            $("#next").click(function () {
                owl.trigger('next.owl.carousel', [300]);
            });
            $("#prev").click(function () {
                owl.trigger('prev.owl.carousel', [300]);
            });
        });

    </script>

    <script>
        (function () {
            const nextBtn = document.querySelector('.nvb-carousel-next');
            const prevBtn = document.querySelector('.nvb-carousel-prev');
            const list = document.querySelector('.nvb-carousel-list');
            const timer = document.querySelector('.nvb-carousel-timer');
            const autoTime = 7000;
            let autoSlide = null;

            // Some pages do not contain this carousel; safely skip initialization there.
            if (!list || !timer || !nextBtn || !prevBtn) return;

            function updateContent() {
                const items = list.querySelectorAll('.nvb-carousel-item');
                items.forEach(function (item, index) {
                    const content = item.querySelector('.nvb-carousel-content');
                    if (content) content.style.display = (index === 1) ? 'block' : 'none';
                });
            }

            function resetTimer() {
                timer.style.transition = 'none';
                timer.style.width = '0%';
                void timer.offsetWidth;
                timer.style.transition = 'width ' + (autoTime / 1000) + 's linear';
                timer.style.width = '100%';
                if (autoSlide !== null) window.clearInterval(autoSlide);
                autoSlide = window.setInterval(function () { moveSlide('next'); }, autoTime);
            }

            function moveSlide(direction) {
                const items = list.querySelectorAll('.nvb-carousel-item');
                if (items.length < 2) return;
                if (direction === 'next') {
                    list.appendChild(items[0]);
                } else {
                    list.prepend(items[items.length - 1]);
                }
                updateContent();
                resetTimer();
            }

            nextBtn.addEventListener('click', function () { moveSlide('next'); });
            prevBtn.addEventListener('click', function () { moveSlide('prev'); });
            updateContent();
            resetTimer();
        })();
    </script>

    <style>
        .gallery-indicator-item.disable:hover {
            cursor: unset;
            background-color: unset;
        }

        /* Desktop/default styles */
        .footer-social {
            display: flex;
            gap: 10px;
        }

        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            color: white;
            transition: 0.3s;
            text-decoration: none;
        }

        .social-icon.facebook {
            background: #3b5998;
        }

        .social-icon.twitter {
            background: #000;
        }

        .social-icon.instagram {
            background: #e4405f;
        }

        /* Responsive: center on small screens */
        @media (max-width: 576px) {
            .footer-social {
                justify-content: center;
                flex-wrap: wrap;
            }
        }
    </style>
    <script>

        (function () {
            "use strict";

            function initializeDashainCelebration() {
                const root = document.getElementById("ahn-dashain-celebration");

                if (!root) {
                    return;
                }

                const overlay = root.querySelector("#ahnDashainOverlay");
                const closeButton = root.querySelector("#ahnDashainClose");
                const exploreButton = root.querySelector("#ahnDashainExplore");

                if (!overlay || !closeButton || !exploreButton) {
                    return;
                }

                const sessionKey = "ahnDashainGreetingSeen";
                let previouslySeen = false;

                try {
                    previouslySeen = sessionStorage.getItem(sessionKey) === "yes";
                } catch (error) {
                    previouslySeen = false;
                }

                function openGreeting() {
                    overlay.classList.add("ahn-is-visible");
                    document.body.classList.add("ahn-dashain-modal-open");

                    try {
                        sessionStorage.setItem(sessionKey, "yes");
                    } catch (error) {
                        // Continue if browser storage is unavailable.
                    }
                }

                function closeGreeting() {
                    overlay.classList.remove("ahn-is-visible");
                    document.body.classList.remove("ahn-dashain-modal-open");
                }

                closeButton.addEventListener("click", closeGreeting);
                exploreButton.addEventListener("click", closeGreeting);

                overlay.addEventListener("click", function (event) {
                    if (event.target === overlay) {
                        closeGreeting();
                    }
                });

                document.addEventListener("keydown", function (event) {
                    if (
                        event.key === "Escape" &&
                        overlay.classList.contains("ahn-is-visible")
                    ) {
                        closeGreeting();
                    }
                });

                if (!previouslySeen) {
                    window.setTimeout(openGreeting, 700);
                }
            }

            if (document.readyState === "loading") {
                document.addEventListener(
                    "DOMContentLoaded",
                    initializeDashainCelebration
                );
            } else {
                initializeDashainCelebration();
            }
        })();

    </script>
</body>

</html>