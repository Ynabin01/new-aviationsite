@extends("layouts.master")
@section('content')

<!-- Header / Breadcrumb remains unchanged -->
<div class="container-xxl custom-header-page position-relative text-center text-white" style="background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('/website/img/bcumb.jpg') center/cover no-repeat; height: 280px;">
    <div class="container custom-header-content h-100 d-flex flex-column justify-content-center align-items-center">
        <!-- Breadcrumb -->
        <div class="custom-breadcrumb d-flex flex-wrap align-items-center justify-content-center mb-2 text-uppercase fw-medium small text-white-50">
            <span>Home</span>
            <span class="mx-2">/</span>
            <span>{{ $slug1->caption ?? $slug1 }}</span>
        </div>
        <!-- Main Title -->
        <h1 class="custom-header-title display-6 fw-bold text-white">
            {{ $slug1->caption ?? $slug1 }}
        </h1>
    </div>
</div>
<!-- breadcrumb end -->

<!-- Services Section -->
<div class="container-xxl py-6" style="background-color: #f9faff;">
    <div class="container">
        <div class="row g-4 justify-content-center">
            @foreach ($services->sortByDesc('created_at') as $sub)
            <div class="col-lg-3 col-md-6 col-sm-10" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="service-card">
                    <div class="service-card-img">
                        <img src="{{ $sub->banner_image }}" alt="Service Image">
                    </div>
                    <div class="service-card-body">
                        <h3 class="service-card-title">{{ $sub->caption }}</h3>
                        <p class="service-card-desc">@php echo $sub->short_content; @endphp</p>
                        <a href="{{ $sub->nav_name }}/@if ($child = $sub->childs->first()){{ $child->nav_name }} @endif" class="service-card-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Pagination -->
<div class="container my-4 text-center">
    {{ $services->links('vendor.pagination.default copy') }}
</div>

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

@endsection

<style>
    body {
    background-color: #f8f9fb;
    font-family: 'Inter', sans-serif;
}

/* ===== Services Cards ===== */
.service-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.service-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
}

.service-card-img img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.service-card:hover .service-card-img img {
    transform: scale(1.05);
}

.service-card-body {
    padding: 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    justify-content: space-between;
    text-align: center;
}

.service-card-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #123ecf;
    margin-bottom: 10px;
    font-family: 'Montserrat', sans-serif;
}

.service-card-desc {
    font-size: 0.95rem;
    color: #555;
    flex-grow: 1;
    margin-bottom: 15px;
    text-align: justify;
}

.service-card-link {
    font-size: 0.95rem;
    color: #fa7900ff;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.service-card-link i {
    margin-left: 5px;
    transition: margin-left 0.3s ease;
}

.service-card-link:hover {
    color: #123ecf;
}

.service-card-link:hover i {
    margin-left: 10px;
}

/* ===== Responsive ===== */
@media (max-width: 992px) {
    .service-card-img img {
        height: 180px;
    }
}

@media (max-width: 768px) {
    .service-card-img img {
        height: 160px;
    }
    .service-card-title {
        font-size: 1.1rem;
    }
    .service-card-desc {
        font-size: 0.9rem;
        text-align: center;
    }
}

@media (max-width: 576px) {
    .service-card-img img {
        height: 140px;
    }
    .service-card-title {
        font-size: 1rem;
    }
    .service-card-desc {
        font-size: 0.85rem;
    }
}

</style>