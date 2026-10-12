@extends("layouts.master")
@section('content')
    <div id="ahn-normal-page">
        <div class="container-xxl custom-header-page position-relative text-center text-white"
            style="background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('/website/img/bcumb.jpg') center/cover no-repeat; height: 280px;">
            <div class="container custom-header-content h-100 d-flex flex-column justify-content-center align-items-center">
                <!-- Breadcrumb -->
                <div
                    class="custom-breadcrumb d-flex flex-wrap align-items-center justify-content-center mb-2 text-uppercase fw-medium small text-white-50">
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

        {{-- Main Page Content --}}
        <section class="ahn-content-section">
            <div class="ahn-content-container">

                <article class="ahn-content-card">

                    {{-- Short Description --}}
                    @if(!empty($normal->short_content))
                        <div class="ahn-short-content">
                            {!! $normal->short_content !!}
                        </div>
                    @endif

                    {{-- Long Description and Optional Image --}}
                    @if(!empty($normal->long_content) || !empty($normal->main_attachment))
                        <div class="ahn-long-content">

                            @if(!empty($normal->main_attachment))
                                <img src="{{ asset('uploads/main_attachment/' . $normal->main_attachment) }}"
                                    alt="{{ $slug1->caption ?? $slug1 }} image" class="ahn-additional-image" loading="lazy">
                            @endif

                            {!! $normal->long_content !!}

                        </div>
                    @endif

                    {{-- Optional Full-Width Banner --}}
                    @if(!empty($normal->banner_image))
                        <div class="ahn-banner-wrap">
                            <img src="{{ $normal->banner_image }}" alt="{{ $slug1->caption ?? $slug1 }}"
                                class="ahn-banner-image" loading="lazy">
                        </div>
                    @endif

                </article>

            </div>
        </section>

    </div>

@endsection