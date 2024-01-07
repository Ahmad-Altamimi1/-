{{-- <h2 class="line-title">ف</h2> --}}
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


    @foreach ($posts_content->take(12) as $post)
        <div class="item" style="background-image: url({{ $post->IMG }});">
            <div class="item-desc">
                <h3>{{ $post->TITLE }}</h3>
            </div>
        </div>
    @endforeach


{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{url('slick/slick.min.js')}}"></script>

<script type="text/javascript"> 
$(document).ready(function () {
    console.log('Document ready');
});

  $(document).ready(function () {
    console.log('Slick initialization script executed');
      $('.slider-for').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
      });
  });
  </script>
  


