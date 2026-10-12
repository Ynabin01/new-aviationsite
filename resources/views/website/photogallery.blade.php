@extends("layouts.master")
@section('content')
<style>
    body {
        background-color: white;
    }

</style>
<!-- breadcrumb   -->
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

<!-- gallery start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row-gallery-section">
            @foreach ($photos as $key => $photo)
            <div class="column">
                <img src="/uploads/photo_gallery/{{ $photo->file }}" class="myImg" alt="{{ $photo->caption }}" data-index="{{ $key }}">
            </div>
            @endforeach
        </div>
    </div>
</div><br> <br>
<!-- gallery end -->

<!-- Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <span class="prev">&#10094;</span>
    <span class="next">&#10095;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        var images = document.getElementsByClassName("myImg");
        var currentIndex = 0;

        function showImage(index) {
            modal.style.display = "block";
            modalImg.src = images[index].src;
            captionText.innerHTML = images[index].alt;
            currentIndex = index;
        }

        for (let i = 0; i < images.length; i++) {
            images[i].onclick = function() {
                showImage(i);
            };
        }

        // Close modal
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        };

        // Next / Prev
        document.querySelector(".next").onclick = function() {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        };

        document.querySelector(".prev").onclick = function() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage(currentIndex);
        };

        // Click outside closes
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    });

</script>
