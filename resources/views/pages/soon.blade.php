@extends('../layouts.pagesLayouts.Master')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<style>
    /* Example CSS styles (adjust as needed) */
    #my-slider {
        width: 100%;
        margin: 0 auto;
    }

    .info-section, .testimonial-section {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .testimonial-box {
        text-align: center;
    }
</style>

<!-- Add Slick Slider Theme CSS if needed -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<div id="my-slider">
    <div class="slider-inner">
        <!-- Slide 1: Informational Part -->
        <div class="item">
            <div class="info-section">
                <h2>Informational Title</h2>
                <p>Some informative text here.</p>
                <a href="#" class="cta-button">Call to Action</a>
                <!-- Add navigation if needed -->
            </div>
        </div>

        <!-- Slide 2: Image with Testimonial -->
        <div class="item">
            <div class="testimonial-section">
                <div class="testimonial-box">
                    <img src="{{ asset('path/to/testimonial-image.jpg') }}" alt="Testimonial Image">
                    <blockquote>
                        <p>Testimonial text goes here.</p>
                        <cite>Testimonial Author</cite>
                    </blockquote>
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
            // Slick Slider options go here
            dots: true,
            infinite: true,
            speed: 500,
            // Add more configuration options as needed
        });
    });
</script>
