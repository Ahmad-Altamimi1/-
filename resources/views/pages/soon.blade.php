@extends('../layouts.pagesLayouts.Master')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<style>
    /* Example CSS styles (adjust as needed) */
    #my-slider {
        width: 100%;
        margin: 0 auto;
        position: relative;
        padding: 0 100px; /* Add padding 100px from right and left */
    }

    .slick-slide img {
        width: 100%;
        height: auto;
    }

    .slide-section {
        position: relative;
    }

    .image-section, .description-section {
        width: 60%; /* Adjust the width as needed */
        height: 100%;
        float: left;
    }

    .image-section img {
        width: 100%;
        height: auto;
    }

    .description-section {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 60%; /* Adjust the left position */
        width: 40%; /* Adjust the width as needed */
        text-align: center;
    }

    .description-section h2 {
        margin-bottom: 10px;
    }

    .description-section p {
        font-size: 16px;
    }

    .slick-prev, .slick-next {
        font-size: 24px;
        color: #fff;
        background-color: #333;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;
        cursor: pointer;
    }

    .slick-prev {
        left: 0;
    }
    #my-slider {
    width: 100%;
    margin: 0 auto;
    position: relative;
    padding: 0 100px; /* Add padding 100px from right and left */
    height: 50vh; /* Set the height to 50vh */
}

/* ... (previous styles remain unchanged) ... */

.slick-prev, .slick-next {
    font-size: 24px;
    color: #fff;
    background-color: #333;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
    cursor: pointer;
    opacity: 0.7; /* Add opacity for better visibility */
}

.slick-prev:hover, .slick-next:hover {
    opacity: 1; /* Increase opacity on hover */
}

.slick-prev {
    left: 500px; /* Adjust the left position */
}

.slick-next {
    left: 500px;/* Adjust the right position */
}

    .slick-next {
        right: 0;
    }
</style>

<!-- Add Slick Slider Theme CSS if needed -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<div id="my-slider">
    <div class="slider-inner">
        <!-- Slide 1 -->
        <div class="item">
            <div class="slide-section">
                <div class="image-section">
                    <img src="{{ asset('https://todaysparent.mblycdn.com/uploads/tp/2014/12/blanket-baby-article.jpg') }}" alt="Slide 1 Image">
                </div>
                <div class="description-section">
                    <h2>Image 1 Title</h2>
                    <p>Description of Image 1.</p>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="item">
            <div class="slide-section">
                <div class="image-section">
                    <img src="{{ asset('https://todaysparent.mblycdn.com/uploads/tp/2014/12/blanket-baby-article.jpg') }}" alt="Slide 2 Image">
                </div>
                <div class="description-section">
                    <h2>Image 2 Title</h2>
                    <p>Description of Image 2.</p>
                </div>
                <div class="slick-prev">&#9664; ddd</div>
                <div class="slick-next">&#9654; dddggg</div>
            </div>
        </div>
    </div>
    <div class="slick-prev">&#9664; ddd</div>
    <div class="slick-next">&#9654; dddggg</div>
</div>

@endsection

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Slick Slider
        $('#my-slider .slider-inner').slick({
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
            fade: true,
            speed: 1000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        dots: false,
                    }
                }
            ]
            // Add more configuration options as needed
        });

        // Custom navigation arrows
        $('#my-slider .slick-prev').click(function(){
            $('#my-slider .slider-inner').slick('slickPrev');
        });

        $('#my-slider .slick-next').click(function(){
            $('#my-slider .slider-inner').slick('slickNext');
        });
    });
</script>
