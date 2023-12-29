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

    .testimonial-section {
        position: relative;
    }

    .testimonial-box {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 600px;
        text-align: center;
    }

    .testimonial-box blockquote {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .testimonial-box cite {
        font-style: italic;
        font-size: 16px;
    }
</style>

<!-- Add Slick Slider Theme CSS if needed -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<div id="my-slider">
    <div class="slider-inner">
        <!-- Slide 1: Informational Part -->
        <div class="item">
            <img src="{{ asset('https://todaysparent.mblycdn.com/uploads/tp/2014/12/blanket-baby-article.jpg') }}" alt="Slide 1 Image">
            <div class="info-section">
                <h2>Informational Title</h2>
                <p>Some informative text here.</p>
                <a href="#" class="cta-button">Call to Action</a>
                <!-- Add navigation if needed -->
            </div>
        </div>

        <!-- Slide 2: Image with Testimonial -->
        <div class="item">
            <img src="{{ asset('https://todaysparent.mblycdn.com/uploads/tp/2014/12/blanket-baby-article.jpg') }}" alt="Slide 2 Image">
            <div class="testimonial-section">
                <div class="testimonial-box">
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
