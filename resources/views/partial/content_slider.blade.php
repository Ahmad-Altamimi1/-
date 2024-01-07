<h2 class="line-title">ف</h2>



<div class="slick-carousel custom-carousel contentslider">

    @foreach ($posts_content->take(12) as $post)
        {{-- <div class="item" style="background-image: url({{ $post->IMG }});">
            <div class="item-desc">
                <h3>{{ $post->TITLE }}</h3>
            </div>
        </div> --}}
    @endforeach

</div>

<!-- Include Slick Carousel CSS -->


<!-- Include jQuery -->
