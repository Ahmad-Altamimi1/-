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

<!-- Include Slick Carousel CSS -->


<!-- Include jQuery -->
