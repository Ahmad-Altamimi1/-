
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



{{-- <script>
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

</script> --}}

<script>
    $(document).ready(function () {
        $(".custom-carousel").owlCarousel({
            loop: true,
            margin: 10, // Adjust as needed
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1, // Number of items to show at different screen sizes
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 5,
                }
            }
        });

        $(".custom-carousel .item").click(function () {
            $(".custom-carousel .item").not($(this)).removeClass("active");
            $(this).toggleClass("active");
        });
    });
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
