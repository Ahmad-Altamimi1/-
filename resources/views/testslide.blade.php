<html>
  <head>
  <title>My Now Amazing Webpage</title>
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link rel="stylesheet" href="{{ url('pages/css/custom.css') }}">

  </head>
  <body>

  <div class="slider-for">
    {{-- @foreach ($posts_content->take(12) as $post) --}}
    <div class="item" style="background-image: url();">
        <div class="item-desc">
            <h3>dcvfdscvv</h3>
        </div>
    </div>
    <div class="item" style="background-image: url();">
        <div class="item-desc">
            <h3>dcvfdscvv</h3>
        </div>
    </div>
    <div class="item" style="background-image: url();">
        <div class="item-desc">
            <h3>fdd</h3>
        </div>
    </div>
    <div class="item" style="background-image: url();">
        <div class="item-desc">
            <h3>dcvfdfdffdscvv</h3>
        </div>
    </div>
    <div class="item" style="background-image: url();">
        <div class="item-desc">
            <h3>effe</h3>
        </div>
    </div>
    <div class="item" style="background-image: url();">
        <div class="item-desc">
            <h3>ff</h3>
        </div>
    </div>
    <div class="item" style="background-image: url();">
        <div class="item-desc">
            <h3>dcvfdscvv</h3>
        </div>
    </div>
{{-- @endforeach --}}
  </div>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
   $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  
});

  </script>

  </body>
</html>