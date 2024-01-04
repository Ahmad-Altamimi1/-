<div class="slider-container">
<div class="row">

@foreach ($posts_thumbs->take(6) as $posts_thumb)
<div class="col-sm-4 pt-3">
        <div class="post post-grid rounded bordered">
            <div class="thumb top-rounded">

                                <a href="/tags/{{ $posts_thumb->tag->id }}/show"
                                    class="category-badge position-absolute">{{ $posts_thumb->tag->TITLE }}</a>

                <a href="/{{$havevideo?'videos':'posts'}}/{{ $posts_thumb->id }}/show">
                    <div style="text-align: center;" class="inner">
                        <img style="height: 250px ;aspect-ratio: 2;"
                            src="{{ asset( $posts_thumb->IMG ) }}"
                            alt="{{ $posts_thumb->TITLE }}" />
                    </div>
                </a>
            </div>
            <div class="details">
                <h5 class="post-title mb-3 mt-3"><a
                        href="/{{$havevideo?'videos':'posts'}} /{{ $posts_thumb->id }}/show">{{ Str::limit($posts_thumb->TITLE, 60) }}</a>
                </h5>
                <p class="excerpt mb-0">
                    {{ Str::limit($posts_thumb->DESCRIPTION, 150) }}</p>
            </div>
            <div
                class="post-bottom clearfix d-flex align-items-center" style="opacity: 0">
                <div class="social-share me-auto">

                    <ul class="icons list-unstyled list-inline mb-0"> </ul>
                </div>
                <div class="more-button float-end">
                </div>
            </div>
        </div>
    </div>

@endforeach
</div>
</div>
<script>
    $(document).ready(function () {
        $(".slider-container").slick({
            arrows: true,
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<a class="slick-prev"><i class="icon-arrow-left" alt="Arrow Icon"></i></a>',
            nextArrow: '<a class="slick-next"><i class="icon-arrow-right" alt="Arrow Icon"></i></a>',
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        dots: true,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: true,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 580,
                    settings: {
                        arrows: false,
                        dots: true,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    });
</script>

