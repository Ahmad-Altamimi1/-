@extends('../layouts.pagesLayouts.Master')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<style>
    /* Example CSS styles (adjust as needed) */
    #my-slider {
        width: 100%;
        margin: 0 auto;
    }

    .slick-slide img {
        width: 100%;
        height: auto;
    }

    .slide-section {
        position: relative;
    }

    .image-section, .description-section {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        max-width: 600px;
        text-align: center;
    }

    .description-section h2 {
        margin-bottom: 10px;
    }

    .description-section p {
        font-size: 16px;
    }
</style>

<!-- Add Slick Slider Theme CSS if needed -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<div id="my-slider">
    <div class="slider-inner">
        <!-- Slide 1 -->
        <div class="item">
            <div class="slide-section">
                <img src="{{ asset('path/to/slide1-image.jpg') }}" alt="Slide 1 Image">
                <div class="image-section"></div>
                <div class="description-section">
                    <h2>Image 1 Title</h2>
                    <p>Description of Image 1.</p>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="item">
            <div class="slide-section">
                <img src="{{ asset('path/to/slide2-image.jpg') }}" alt="Slide 2 Image">
                <div class="image-section"></div>
                <div class="description-section">
                    <h2>Image 2 Title</h2>
                    <p>Description of Image 2.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Slick Slider
        $('#my-slider .slider-inner').slick({
            dots: true,
            arrows: false, // Remove arrows
            autoplay: true,
            autoplaySpeed: 5000,
            fade: true, // Enable fade effect
            speed: 1000, // Set transition speed
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        dots: false, // Hide dots on smaller screens
                    }
                }
            ]
            // Add more configuration options as needed
        });
    });
</script>
