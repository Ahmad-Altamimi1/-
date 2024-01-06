<h2 class="line-title">ف</h2>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<div class="slick-carousel custom-carousel">

    @foreach ($posts_content->take(12) as $post)
        <div class="item" style="background-image: url({{ $post->IMG }});">
            <div class="item-desc">
                <h3>{{ $post->TITLE }}</h3>
                {{-- <p>{{ $post->DESCRIPTION}}</p> --}}
            </div>
        </div>
    @endforeach

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Slick Carousel JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        // Initialize Slick Carousel
        $('.slick-carousel').slick({
            slidesToShow: 3, // Adjust the number of slides to show
            slidesToScroll: 1,
            autoplay: true, // Set to true if you want the carousel to autoplay
            autoplaySpeed: 2000 // Adjust the autoplay speed in milliseconds
            // Add more options as needed
        });
    });
</script>
<!-- Include Slick Carousel CSS -->


<!-- Include jQuery -->
