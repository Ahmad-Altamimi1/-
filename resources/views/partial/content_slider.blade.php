
    <h2 class="line-title">ف</h2>
    <div class="owl-carousel custom-carousel owl-theme">

        @foreach ($posts_content->take(12) as $post)

            <div class="item" style="background-image: url({{ $post->IMG }});">
                <div class="item-desc">
                    <h3>{{ $post->TITLE }}</h3>
                    {{-- <p>{{ $post->DESCRIPTION}}</p> --}}
                </div>
            </div>
        @endforeach

    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script>
$(document).ready(function () {
    $(".custom-carousel").owlCarousel({
        autoWidth: true,
        loop: true
    });

    $(".custom-carousel .item").click(function () {
        $(".custom-carousel .item").not($(this)).removeClass("active");
        $(this).toggleClass("active");
    });
});

</script>
