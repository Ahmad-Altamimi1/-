    @extends('../layouts.pagesLayouts.Master')
    @section('content')




    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>



    <style>
          #my-slider {
        width: 100%;
        margin: 0 auto;
        position: relative;
        padding: 0 100px;
        background-color: #d54368;
    }

    .slick-slide img {
        width: 100%;
        height: auto;
    }

    .slide-section {
        position: relative;
    }

    .image-section, .description-section {
        width: 60%; /* Adjust the width as needed */
        height: 100%;
        float: left;
    }

    .image-section img {
        width: 100%;
    aspect-ratio: 2/3;
    height: 100%;

    }

    .description-section {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 60%; /* Adjust the left position */
        width: 40%; /* Adjust the width as needed */
        text-align: center;
    }

    .description-section h2 {
        margin-bottom: 10px;
    }

    .description-section p {
        font-size: 16px;
    }

    .slick-prev, .slick-next {
        font-size: 24px;
        color: #fff;
        background-color: #333;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;
        cursor: pointer;
    }

    .slick-prev {
        left: 0;
    }
    #my-slider {
    width: 100%;
    margin: 0 auto;
    position: relative;
    padding: 0 100px; /* Add padding 100px from right and left */
    height: 50vh; /* Set the height to 50vh */
}

/* ... (previous styles remain unchanged) ... */

.slick-prev, .slick-next {
    font-size: 24px;
    color: #fff;
    background-color: #333;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
    cursor: pointer;
    opacity: 0.7; /* Add opacity for better visibility */
}

.slick-prev:hover, .slick-next:hover {
    opacity: 1; /* Increase opacity on hover */
}

.slick-prev {
    left: 500px; /* Adjust the left position */
}

.slick-next {
    left: 500px;/* Adjust the right position */
}

    .slick-next {
        right: 0;
    }
        /* {{-- /// START artical css//// --}} */
        article {
  --img-scale: 1.001;
  --title-color: black;
  --link-icon-translate: -20px;
  --link-icon-opacity: 0;
  position: relative;
  border-radius: 16px;
  box-shadow: none;
  background: #fff;
  transform-origin: center;
  transition: all 0.4s ease-in-out;
  overflow: hidden;
  border: #cdc7c7 1px solid ;
  text-align: right;
}

article a::after {
  position: absolute;
  inset-block: 0;
  inset-inline: 0;
  cursor: pointer;
  content: "";
}

/* basic article elements styling */
article h2 {
  margin: 0 0 18px 0;

     font-size: 19px;

  color: var(--title-color);
  transition: color 0.3s ease-out;
}

figure {
  margin: 0;
  padding: 0;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}

article img {
  max-width: 100%;
  transform-origin: center;
  transform: scale(var(--img-scale));
  transition: transform 0.4s ease-in-out;
}

.article-body {
  padding: 24px;
}

article a {
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  color: #28666e;
}

article a:focus {
  outline: 1px dotted #28666e;
}

article a .icon {
  min-width: 24px;
  width: 24px;
  height: 24px;
  margin-left: 5px;
  transform: translateX(var(--link-icon-translate));
  opacity: var(--link-icon-opacity);
  transition: all 0.3s;
}

/* using the has() relational pseudo selector to update our custom properties */
article:has(:hover, :focus) {
  --img-scale: 1.1;
  --title-color: #28666e;
  --link-icon-translate: 0;
  --link-icon-opacity: 1;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}


/************************
Generic layout (demo looks)
**************************/

*,
*::before,
*::after {
  box-sizing: border-box;
}



.articles {
  display: grid;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: 24px;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 24px;
  margin-bottom: 45px;
}

@media screen and (max-width: 960px) {
  article {
    container: card/inline-size;
  }
  .article-body p {
    display: none;
  }
}

@container card (min-width: 380px) {
  .article-wrapper {
    display: grid;
    grid-template-columns: 100px 1fr;
    gap: 16px;
  }
  .article-body {
    padding-left: 0;
  }
  figure {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  figure img {
    height: 100%;
    aspect-ratio: 16/9;
    object-fit: cover;
  }
}
.ltn__blog-img img {
    aspect-ratio: 6/4;
    object-fit: cover;

}

.sr-only:not(:focus):not(:active) {
  clip: rect(0 0 0 0);
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap;
  width: 1px;
}
        /* {{-- ///END artical css//// --}} */



        .slick-slide{
               height: 379px;

        }



            .login-wrap .blog-title-line::before{
                width: 75%;
            }
            .ltn__feature-item-box-wrap-2 .ltn__feature-item-8{
                flex-direction: column;

            }
            .blog-title-line::before{
                left: 75%;
            }
.section-title-area {
    margin: 0
}
.hover-translate{
    cursor: pointer;
}
.hover-translate:hover {
    transition: transform 0.3s ease;
    transform: perspective(500px) translateZ(10px);
}
.Pregnancy{
   display: grid;
    grid-template-columns: 50% 50%;
    gap: 10px;
}
.Pregnancy .right{
    height: 120%;
    transform: translateY(-70px);
    position: relative;
    padding-right: 15%;
    background-color: #d54368;
}
.Pregnancy .left{
    padding-left: 249px;
z-index: 100;
}
.Pregnancy .right p{
padding: 0 22%;
}
.ltn__popular-post-widget>ul>li {
      min-width: 158px;
    max-width: 158px;

}
.Pregnancy .right::before{
 content: "";
 /* box-shadow: white 2px 2px ; */
 position: absolute;
    width: 60%;
    height: 100%;
    left: -245px;
 top: 0;
    background: linear-gradient(to left, #d54368, white);
}
.slick-initialized .slick-slide{
        border-radius: 64px;
}
.click_active{

}
body{
    /* direction: rtl; */
}
        </style>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

        </div>
        <div id="my-slider">
            <div class="slider-inner">
                <!-- Slide 1 -->
                <div class="item">
                    <div class="slide-section">
                        <div class="image-section">
                            <img src="{{ asset('https://todaysparent.mblycdn.com/uploads/tp/2014/12/blanket-baby-article.jpg') }}" alt="Slide 1 Image">
                        </div>
                        <div class="description-section">
                            <h2>Image 1 Title</h2>
                            <p>Description of Image 1.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="item">
                    <div class="slide-section">
                        <div class="image-section">
                            <img src="{{ asset('https://todaysparent.mblycdn.com/uploads/tp/2014/12/blanket-baby-article.jpg') }}" alt="Slide 2 Image">
                        </div>
                        <div class="description-section">
                            <h2>Image 2 Title</h2>
                            <p>Description of Image 2.</p>
                        </div>
                        <div class="slick-prev">&#9664; ddd</div>
                        <div class="slick-next">&#9654; dddggg</div>
                    </div>
                </div>
            </div>
            <div class="slick-prev">&#9664; ddd</div>
            <div class="slick-next">&#9654; dddggg</div>
        </div>
           {{-- <div class="row pt-60 pb-40" style="width: 100%;">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title section-title-border" >أشهر الحمل  </h1>
                        </div>
                    </div>
                </div>


    <div class="slide-container">
        @foreach ($Monthsofpregnancy as $month)

        <a href="{{ route('ShoWarticle', ['id' => $month->id]) }}" style="width: 100%;height:100%"><div class="slide" data-slide-no=<?php echo "$month->id"?> style="background-image: url('{{("../" .$month->IMG) }}');"></div></a>

        @endforeach

    </div>
    <div class="button-wrap">
    <button type="button" class="btn btn-prev" style="display: none">prev</button>
    <button type="button" class="btn btn-next" style="display: none">next</button>
    </div>

</div> --}}


    <div class="row pt-60 pb-40" style="width: 100%;">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title section-title-border" >أشهر الحمل  </h1>
                        </div>
                    </div>
                </div>

                <div class="month_continer">
                    <img src="../pages/img/دوائر.png" alt="" style="    width: 79%;

    margin-top: -136px;">
<?php
use App\Models\poststags;
?>
    <div  class="monthimg monthimg1">
        <a href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الأول')->first()->id]) }}">
            <img src="../1111.jpg" alt="" >


<p class="month_content ">الثلث الأول</p>
        </a>
    </div>

    <div  class="monthimg monthimg2">
        <img src="../1111.jpg" alt="" >
        <a href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الثاني')->first()->id]) }}">


<p class="month_content ">الثلث الثاني</p>
    </div>
</a>

    <div  class="monthimg monthimg3">
        <img src="../1111.jpg" alt="" >
        <a href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الثالث')->first()->id]) }}">

<p class="month_content">الثلث الثالث</p>
        </a>
    </div>
                </div>



 <div class="row pt-30 " style="width: 100%;">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title section-title-border" >{{ $first_tag->TITLE }}</h1>
                        </div>
                    </div>
                </div>
                      <div class="flex flex-col">

            <div class="relative w-full ">
                <div class="container z-1">

                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4 justify-center">

                        <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 self-center">
                            <div class="bg-white  dark:bg-gray-800/40  rounded-md w-full relative  duration-500 ease-in-out">
                                <div class="flex-auto p-4">
                                    <div class="overflow-hidden relative">
                                        @if (count($first_tag->posts) > 0)

                                        <img class="rounded-lg w-full" src="{{ asset($first_tag->posts[0]->IMG) }}" alt="" />
                                        @endif
                                        <div class="p-4 absolute z-2 bottom-0 w-100">
                                            {{-- <span class="focus:outline-none text-[12px] bg-slate-600 text-slate-200 dark:text-slate-200 rounded font-medium py-1 px-2">27 Aug 2023</span> --}}
                                            <a href="#" class="my-3 block text-[36px] leading-12 font-normal tracking-tight text-dark-200
                                            dark:text-dark after:absolute after:inset-0 z-3">  @if (count($first_tag->posts) > 0)

                                            {{ $first_tag->posts[0]->TITLE }}
                                            @endif
</a>

                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>

                        <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 self-center" style="    transform: translateY(22px);
">
                                        @if (count($first_tag->posts) > 0)

                            @foreach ( $first_tag->posts->skip(1)->take(4) as $post )
                            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl  w-full relative p-4 mb-4 hover-translate" style="    border: 2px solid #eee;">
                                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                        <img src="{{ asset($post->IMG) }}" alt="" class="max-w-full h-auto rounded-xl">
                                    </div><!--end col-->
                                    <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                        <div class=" h-full flex flex-col p-3">

                                            <a href="{{ route('ShoWarticle',["id"=>$post->id]) }}" class="text-lg sm:text-xl font-medium  text-gray-600 dark:text-slate-300 block">
                                              {{ $post->TITLE }}
                                            </a>
                                        </div><!--end card-body-->
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div> <!--end card-->
                        @endforeach
                        @endif

                            {{-- <a href="{{ route('showtag',["tag"=> $first_tag->id]) }}"  class="px-2 py-2 lg:px-4 bg-transparent  text-base   transition hover:bg-primary-500 border border-primary font-medium w-full" style="display:Block; text-align:center">View all</a> --}}
                        </div><!--end col-->

                    </div><!--end inner-grid-->
                </div><!--end container-->
            </div>
        </div>

{{-- newone  --}}


<div class="ltn__blog-area  pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title section-title-border">فتاوى تخص المرأة</h1>
                    </div>
                </div>
            </div>
            <div class="row " style="display: flex">
                <!-- Blog Item -->
                @foreach($tags as $tag)
                @if($tag->TITLE == "أثناء الحمل")
                @foreach($tag->posts->take(6) as $post)

                <div class="col-lg-4">
                    <div class="ltn__blog-item">
                        <div class="ltn__blog-img">
                            <a href="{{ route('ShoWarticle',['id'=>$post->id]) }}"><img src="{{ asset($post->IMG) }}" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    {{-- <li class="ltn__blog-author d-none">
                                        <a href="#">by: Admin</a>
                                    </li> --}}
                                    {{-- <li>
                                        <span> Nov 18, 2020</span>
                                    </li> --}}
                                    {{-- <li class="ltn__blog-comment">
                                        <a href="#"><i class="icon-speech"></i> 2</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <h3 class="ltn__blog"><a href="{{ route('ShoWarticle',['id'=>$post->id]) }}">{{ ($post->TITLE) }}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                @endforeach


                <!--  -->
            </div>
        </div>
    </div>


<div class="ltn__blog-area  pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title section-title-border">خرافات شعبية</h1>
                    </div>
                </div>
            </div>
            </div>
<section class="articles">
                @foreach($tags as $tag)

    @if($tag->TITLE == 'الشهر السابع')


       @foreach ( $tag->posts->take(3) as $post )

  <article>
    <div class="article-wrapper">
      <figure>
        <a href="{{ route('ShoWarticle',["id"=>$post->id]) }}"><img src="{{ $post->IMG }}" alt="" /></a>
      </figure>
      <div class="article-body">
        <h2>{{ $post->TITLE }}</h2>
        <p>
            {{ \Illuminate\Support\Str::limit($post->DESCRIPTION, 30) }}

        </p>

      </div>
    </div>
  </article>
  @endforeach
  @endif
  @endforeach

</section>
</div>
        <!-- BLOG AREA END -->

        <!-- BRAND LOGO AREA START -->
        {{-- <div class="ltn__brand-logo-area  ltn__brand-logo-1 section-bg-1 pt-35 pb-35 plr--5">
            <div class="container-fluid">
                <div class="row ltn__brand-logo-active">
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="pages/img/brand-logo/1.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="pages/img/brand-logo/2.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="pages/img/brand-logo/3.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="pages/img/brand-logo/4.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="pages/img/brand-logo/5.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="pages/img/brand-logo/1.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="pages/img/brand-logo/2.png" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
     <div class="row pt-30" style="width: 100%;">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center" >
                            <h1 class="section-title section-title-border" > موضوعات تهمك </h1>
                        </div>
                    </div>
                </div>
<div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4 container">
    @foreach ($defaultPosts as $defaultPost )
                        <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl w-full relative p-4" style="border: 2px solid #eee">
                                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 " style="    padding-top: 26px;
">

                                          <a href="{{ route('ShoWarticle',["id"=>$defaultPost->id]) }}" class="text-lg sm:text-xl font-semibold  text-gray-600 dark:text-slate-200 block">
                                                {{ $defaultPost->TITLE }}
                                            </a>
                                    </div><!--end col-->
                                                                       <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">

                                        <div class=" h-full flex flex-col p-3">
                                            <div class="w-full block">

                                                {{-- <a href="{{ route('showtag',["tag"=> $defaultPost->tag['id']]) }}"><span class="text-[12px] bg-pink-500/10 text-pink-500 dark:text-pink-600 rounded font-medium py-1 px-2 inline-block mb-3">{{ $defaultPost->tag->TITLE }}</span> </a>                                                   --}}
                                                {{-- <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug 2023</span> --}}
                                            </div>

                                        <a href="{{ route('ShoWarticle',["id"=>$defaultPost['id']]) }}"><img src="{{asset ($defaultPost->IMG )}}" alt="" class="max-w-full h-auto rounded-xl"></a>

                                            <div class="flex flex-wrap justify-between mt-auto">
                                                <div class="flex items-center">
                                                    <div class="w-8 h-8 rounded">
                                                        {{-- <img class="w-full h-full overflow-hidden object-cover rounded object-center" src="{{ asset($defaultPost->tag->IMG ) }}" alt="logo" /> --}}
                                                    </div>
                                                    <div class="ml-2">

                                                    </div>
                                                </div>
                                                <a href="{{ route('ShoWarticle',["id"=>$defaultPost->id]) }}" class="block text-slate-500 dark:text-slate-400 hover:text-slate-600 underline decoration-1 decoration-dashed underline-offset-4  decoration-primary-500 font-medium  focus:outline-none self-center" style='    position: absolute;
    left: 42px;
    bottom: 31px;'><i data-lucide="arrow-left" class="self-center inline-block ms-1 h-4 w-4"></i>قراءة المزيد </a>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div> <!--end card-->
                        </div>
    @endforeach

                    </div>



    @endsection
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Slick Slider
            $('#my-slider .slider-inner').slick({
                dots: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 5000,
                fade: true,
                speed: 1000,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: false,
                        }
                    }
                ]
                // Add more configuration options as needed
            });

            // Custom navigation arrows
            $('#my-slider .slick-prev').click(function(){
                $('#my-slider .slider-inner').slick('slickPrev');
            });

            $('#my-slider .slick-next').click(function(){
                $('#my-slider .slider-inner').slick('slickNext');
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            var currentMode = 'recent';

            $('.ltn__widget-title').on('click', function () {
                var mode = $(this).data('mode');

                if (mode !== currentMode) {
                    currentMode = mode;
                    $('.ltn__widget-title').css({
                background: 'initial',
                color: 'initial'

            });

            $(this).css({
                background: 'white',

    color: 'black',
    'border-radius': '8px',
    'text-align': 'center'
});

                    $('.flex ul li').html('');
                    $('.flex ul ').html('');
                    console.log($('.ajaxul ul li').length);
                    $.ajax({
                        url: 'popular_posts',
                        type: 'GET',
                        data: { mode: mode },
                        success: function (data) {
                            $('.ajaxul ul').fadeOut('fast', function () {
        $(this).html(data);
        $(this).fadeIn('fast');
    });
                        },
                        error: function (error) {
                            console.error('Error fetching posts:', error);
                        }
                    });
                }
            });
        });

    </script>

<script>
    $(document).ready(function () {
        console.log($('.ajaxul').length); // Log the length of the selected element
        // Other code
    });
</script>
