@extends('layouts.master')

@section('content')
<style>
    body {
        background-color: white;
    }

</style>

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
<!-- Main Content Wrapper Start -->
<div class="container">
    <br><br> <br>
    <main class="main-content-wrapper">
        <div class="inner-page-content">
            <!-- Services Area Start -->
            <section class="services-area ptb--60">
                <div class="container">
                    <div class="row">
                        @foreach ($photos as $photo)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb--30">
                            <iframe width="100%" height="250" src="{{ $photo->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- Services Area End -->
        </div>
        <!-- Normal End -->
        <br>
        {{ $photos->links('vendor.pagination.default copy') }}

        {{-- <div class="gallery-indicator" style="  display: flex; justify-content: center; align-items: center;">
                <div class="gallery-indicator-item">
                    <i class="gallery-chevron fas fa-chevron-left"></i>
                </div>
                <div class="gallery-indicator-item active">
                    <div class="gallery-indicator-number">1</div>
                </div>
                <div class="gallery-indicator-item">
                    <div class="gallery-indicator-number">2</div>
                </div>
                <div class="gallery-indicator-item">
                    <div class="gallery-indicator-number">...</div>
                </div>
                <div class="gallery-indicator-item">
                    <div class="gallery-indicator-number">10</div>
                </div>
                <div class="gallery-indicator-item">
                    <i class="gallery-chevron fas fa-chevron-right"></i>
                </div>
            </div> --}}
    </main>
    <br>
    <br>
</div>
<!-- Main Content Wrapper End -->

@endsection
