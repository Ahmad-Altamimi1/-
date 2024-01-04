
    <h2 class="line-title">Trending Games</h2>
    <div class="owl-carousel custom-carousel owl-theme">

        @foreach ($posts_content as $post)

            <div class="item" style="background-image: url({{ $post->IMG }});">
                <div class="item-desc">
                    <h3>{{ $post->TITLE }}</h3>
                    <p>{{ $post->DESCRIPTION}}</p>
                </div>
            </div>
        @endforeach

    </div>

<script>
     $(".custom-carousel").owlCarousel({
  autoWidth: true,
  loop: true
});
$(document).ready(function () {
  $(".custom-carousel .item").click(function () {
    $(".custom-carousel .item").not($(this)).removeClass("active");
    $(this).toggleClass("active");
  });
});
</script>
