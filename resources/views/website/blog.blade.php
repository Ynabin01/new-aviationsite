@extends("layouts.master")
@section('content')

<!-- 🌆 HERO HEADER -->
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

<!-- 📰 BLOG / NEWS SECTION -->
<section class="blog-section py-5">
    <div class="container">

        <!-- 🔍 Search & Filter -->
        <div class="search-filter d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
            <form id="searchForm" action="{{ route('search') }}" method="GET" class="search-box position-relative flex-grow-1" style="max-width: 380px;">
                <input id="searchInput" type="text" name="slug" value="@if(isset($slug2)){{$slug2}}@endif" placeholder="Search for News..." class="form-control rounded-pill ps-4 pe-5 shadow-sm border-primary">
                <i class="fa fa-search position-absolute top-50 end-0 translate-middle-y me-3 text-muted"></i>
                <input type="hidden" name="content" value="{{ request()->input('content') }}">
            </form>

            <div class="filter-buttons d-flex flex-wrap gap-2">
                <a href="{{ route('search', ['content' => 'blogs']) }}" class="btn-filter {{ request()->input('content') == 'blogs' ? 'active' : '' }}">Blogs</a>
                <a href="{{ route('search', ['content' => 'news']) }}" class="btn-filter {{ request()->input('content') == 'news' ? 'active' : '' }}">News</a>
                <a href="{{ route('search', ['content' => 'notices']) }}" class="btn-filter {{ request()->input('content') == 'notices' ? 'active' : '' }}">Notices</a>
            </div>
        </div>

        <!-- 🧱 Blog Grid -->
        <div class="row g-4">
            @foreach ($blogs as $group_project)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="blog-card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ $group_project->banner_image ?? '' }}" alt="image" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                        <div class="date-badge">{{ \Carbon\Carbon::parse($group_project->updated_at)->format('M d, Y') }}</div>
                    </div>
                    <div class="p-3 d-flex flex-column justify-content-between">
                        <h5 class="fw-semibold mb-2">
                            <a href="{{ $slug1->nav_name }}/{{ $group_project->nav_name }}" class="text-dark text-decoration-none hover-primary">
                                {{ $group_project->caption ?? "" }}
                            </a>
                        </h5>
                        <p class="text-muted small flex-grow-1 mb-3">{{ Str::limit($group_project->short_content, 100) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-primary-subtle text-primary fw-semibold px-3 py-1">{{ $group_project->long_content }}</span>
                            <small class="text-secondary">{{ $group_project->icon_image_caption ?? "" }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- 📑 Pagination -->
        <div class="mt-4 d-flex justify-content-center">
            {{ $blogs->links('vendor.pagination.default copy') }}
        </div>

    </div>
</section>

<!-- 🎨 STYLES -->
<style>
    /* Blog Card */
    .blog-card {
        background: #fff;
        transition: all 0.3s ease;
    }
    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }
    .hover-primary:hover {
        color: #123ecf !important;
    }
    /* Date Badge */
    .date-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: rgba(18, 62, 207, 0.9);
        color: #fff;
        font-size: 12px;
        padding: 4px 10px;
        border-radius: 12px;
        font-weight: 500;
    }
    /* Responsive Tweaks */
    @media (max-width: 992px) {
        .search-filter {
            flex-direction: column;
            align-items: stretch;
        }

        .filter-buttons {
            justify-content: flex-start;
        }
    }
    @media (max-width: 576px) {
        .page-header {
            height: 220px;
        }

        .display-6 {
            font-size: 1.6rem;
        }
    }
</style>

@endsection
