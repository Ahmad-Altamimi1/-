    @extends('../layouts.pagesLayouts.Master')
    @section('content')



    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


        </div>


<div class="bodddy"  >
        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper" style="height: 165px;">
                @foreach ($recentposts as $recentpost)

              <div class="blog-slider__item swiper-slide">
                <div class="blog-slider__img">

                  <img src="{{ asset($recentpost->IMG) }}" alt="">
                </div>
                <div class="blog-slider__content">
                  <span class="blog-slider__code"></span>
                  <div class="blog-slider__title" dir="rtl">{{ $recentpost->TITLE }}</div>
                  <div class="blog-slider__text" dir="rtl"> {{ \Illuminate\Support\Str::limit($recentpost->DESCRIPTION, 30) }}
                </div>
                  <a href="{{ route('ShoWarticle',['id'=>$recentpost->id]) }}" class="blog-slider__button">أقرأ المزيد</a>
                </div>
              </div>

              @endforeach



            </div>
            <div class="blog-slider__pagination"></div>
          </div>

              {{-- video section  --}}


              <main>
                <section class="has-dflex-center">
                    <div class="lx-container-80">
                        <div class="lx-row">
                            <div class="lx-card carousel-container">

                         @foreach ($recentposts as $video)


                                <div class="item fade">
                                    <div class="image"><img src="{{ asset($video->IMG) }}" /></div>
                                    <div class="text is-text-centered">
                                        <p style="color: white"> <i class="fas fa-info-circle"></i>{{ $video->TITLE }}</p>
                                    </div>
                                </div><a class="prev has-dflex-center"><i class="fas fa-angle-left"></i></a><a class="next has-dflex-center"><i class="fas fa-angle-right"></i></a></div>
                                @endforeach
                        </div>
                    </div>
                </section>
            </main>





          </div></div>
          </div></div>



<?php
use App\Models\poststags;
?>
<div class="row pt-60 pb-40" style="width: 100%;">
    <div class="col-lg-12">
        <div class="section-title-area text-center">
            <h1 class="section-title section-title-border" style=" font-size: 24px;">
                <span class="circle-title"> الحمل</span>
            </h1>
        </div>
    </div>
</div>
  <div class="hearts-wrapper">
    <a class="trimester-circle" style="" href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الأول')->first()->id]) }}"><span class="heart_text">الثلث الأول</span><div class="heart green">♥</div></a>
    <a class="trimester-circle"style="background-image: url('pages/img/photo-1568043625493-2b0633c7c491 (1).avif')" href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الثاني')->first()->id]) }}"><span class="heart_text">الثلث الثاني</span><div class="heart pink">♥</div></a>
    <a class="trimester-circle" style="background-image: url('pages/img/photo-1585010873004-923f9a54e54e.avif')" href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الثالث')->first()->id]) }}"><span class="heart_text">الثلث الثالث</span><div class="heart blue">♥</div></a>
  </div>




 <div class="row pt-30 mt-30 " style="width: 100%;">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title section-title-border " ><span class="circle-title">{{ $first_tag->TITLE }}</span></h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                <div class="containslidbar">
                      <div class="flex flex-col">

            <div class="relative w-full ">
                <div class="container z-1" style="display: flex">


                        <div >
                            <div class="bg-white  dark:bg-gray-800/40  rounded-md w-full relative  duration-500 ease-in-out" style="width: 600px">
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
                            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl  w-full relative p-1 mb-4 hover-translate" style=" width:600px;   border: 2px solid #eee;">
                                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                        <img src="{{ asset($post->IMG) }}" alt="" class="max-w-full  rounded-xl" style="    height: 101px !important;
                                        width: 183px;
                                        object-fit: cover;">
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

    </div>
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
                            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl w-full relative p-4" style="border: 2px solid #eee;height:200px">
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script> window.onload = function ()
    {
        // var desiredHeight = "calc(100vh - 218px)";
        var sliderArea = document.querySelector('.ltn__slider-area');
        if (sliderArea) {
            // sliderArea.style.height = desiredHeight; // Adjust the height as needed
        }
    };</script>
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
                // background: 'white',

    color: '#ECEBFF',
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
