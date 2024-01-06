<h2 class="line-title">ف</h2>
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
