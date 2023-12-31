    @extends('../layouts.pagesLayouts.Master')
    @section('content')







    <style>
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
        border-radius: 0  64px 64px 0 ;

}
.ltn__slider-area {
    height: calc(100vh - 218px)!important;
    }

.click_active{

}
.ltn__slide-one-active .ltn__slide-item  {
    height: calc(100vh - 258px) !important; /* Your desired height calculation */
}
.containslidbar{
    display: grid;
    grid-template-columns: 70% 30%;
    gap: 50px;
    direction: rtl;

}
.allheader{
    display: grid;
grid-template-columns: 50% 50%;
gap: 2%;

}
.content_left_slider{
    background: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 16px;
    width: 100%;
    position: relative;
    height: 100%;
    overflow: hidden;
}
.popular-post-widget-img{
    margin: 0
}
.float-text{
    position: absolute;
    top: 50%;
    text-align: center;
 color: white;
    transform: translateY(-50%);
    width: 100%;
}
@media only screen and (max-width:767px){
    .circle-title{
        padding: 5px 25px;
        gap: 0;
    }
    .allheader{
        grid-template-columns: 100%;
    }
    .articles{
        padding-inline:0;
    }
    .ltn__header-sticky{
        background-color: #d54368;
    }
    .slick-initialized .slick-slide{
        border-radius: 0;
    }
    .header-container{
        display: none;
    }

}
        </style>
        </div>
    {{-- <div class="ltn__utilize-overlay"></div> --}}



        <!-- SLIDER AREA START (slider-6) -->

                      @if ($havevideo )
    <div id="halfslider" style="width: 70%">
         <div class="ltn__slider-area ltn__slider-4 position-relative">
        <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">

            <!-- HTML5 VIDEO -->
            <video autoplay muted loop id="myVideo">
                <source src="../{{ asset('uploads/Untitled video - Made with Clipchamp (1).mp4') }}" type="video/mp4">
            </video>

            <!-- YouTube VIDEO -->
            <!-- <div class="ltn__youtube-video-background">
                <iframe frameborder="0" height="100%" width="100%"
                  src="https://www.youtube.com/embed/9DYl-nKrQ0k?playlist=9DYl-nKrQ0k&loop=1&controls=0&showinfo=0&autoplay=1&mute=1">
                </iframe>
            </div> -->

            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-7 bg-image--- bg-overlay-theme-black-30" data-bs-bg="img/slider/41.jpg">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h6 class="slide-sub-title white-color animated">مرحبا بك في إنْجابيّ</h6>
                                        {{-- <h1 class="slide-title text-uppercase white-color animated ">{{ $slidercontent->description }}</h1> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endif

<div class="allheader" >
    <div id="halfslider" style="width: 100%;">

        <div class="ltn__slider-area ltn__slider-3 ltn__slider-6 " style="height: 40vh">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white---">
                <!-- ltn__slide-item  -->
                      @if (!$havevideo)

                @foreach ($slidercontent as $slider)



                <div class="ltn__slide-item ltn__slide-item-8 text-color-white---- bg-image bg-overlay-theme-black-80---" data-bs-bg="{{ $slider->posts->IMG }}" style="width: 50%; height: 40vh">
                    <div class="ltn__slide-item-inner" style="border-radius: 0  64px 0;">
                        {{-- <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center" style="    text-align: right;
                                display: flex;
                                justify-content: right;">
                                    <div class="slide-item-info" style="flex: 1">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-item-info">
                                                <div class="slide-item-info-inner ltn__slide-animation">
                                                    <h1 class="slide-title animated ">اهلا بك في إنْجابيّ </h1>
                                                    <h6 class="slide-sub-title ltn__body-color slide-title-line animated">{{ $slider->posts->group->TITLE }}</h6>
                                                    <div class="slide-brief animated">
                                                        <p>{{ $slider->description }}</p>
                                                    </div>
                                                    <div class="btn-wrapper animated">
                                                    <a href="{{ route('ShoWarticle', ['id' => $slider->posts->id]) }}" class="theme-btn-1 btn btn-round">أقرأ المقال</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                @endforeach
            @endif





            </div>
            <section class="ftco-section ftco-no-pb ftco-no-pt" style="">

        </div>
    </div>
    @if (!$havevideo)
    <div class="container">
        <!-- Popular Post Widget -->
        <div class="row">

            <div class="col-md-5 order-md-last" style="width:100%" >
            <div class="login-wrap "  >

                <div class="widget ltn__popular-post-widget" >
                    <div class="flex" style="justify-content: justify-content:space-around;">
                        <h2 class="ltn__widget-title w-50" data-mode="popular" id="popularPostsTitle" style="cursor: pointer">المقالات المشهوره</h2>
                        <h2 class="ltn__widget-title  w-50 " data-mode="recent" style="cursor: pointer;
                        background: initial;
                        color: white;
                        border-radius: 8px;
                        text-align: center;" >المقالات الحديثه</h2>


                    </div>
                    <div class="ajaxul">
                    <ul class="flex sliders" style="display:grid; grid-template-columns: 50% 50%;gap: 16px;       grid-template-rows:  26% 26%;
                    ">
                        @foreach ($recentposts as $recentpost)

                        <li>
                            <div class="popular-post-widget-item content_left_slider " >
                                <div class="popular-post-widget-img" >
                                    <a href="{{ route('ShoWarticle', ['id' => $recentpost->id]) }}"><img src="{{ asset($recentpost->IMG) }}" alt="#" style=""></a>

                                </div>
                                <div class="popular-post-widget-brief float-text">
                                    <div class="ltn__blog-meta ">
                                        <ul>
                                            <span class=" " style="width: 100%;
                                            display: inline-block;
                                            text-align: center;
                                            color:white"><a href="{{ route('ShoWarticle', ['id' => $recentpost->id]) }}"> {{ $recentpost->TITLE }}</a></span>
                                            <li>
                                                <span></span>
                                                {{-- <span>{{ \Carbon\Carbon::parse($recentpost->DATE_SCHEDULER)->locale('ar')->isoFormat('MMM DD, YYYY') }}</span> --}}
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
                </div>

                            @endif
    </div>
    </div>
    </div>
    </section>
        </div>
        </div>
    </div>

        </div>
        </div>
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
<style>

.hearts-wrapper {
    width: 100%;
    height: 350px;
    /* margin: 0 auto; */
    /* margin: 1% 0; */
    margin-top: -50px;
    margin-bottom: 70px;
    display: flex;
    justify-content: center;

    }

    .heart {
      text-decoration: none;
      width: 80px;
      height: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      font-size: 80px;
      border-radius: 50%;
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    .heart.green {
      color: rgba(94, 224, 163, 0.8);
      animation: parent-anim 3s linear infinite;
      /* transform-origin: 50% 120px; */
    }

    .heart.pink {
      color: rgba(232, 143, 201, 0.8);
      animation: parent-anim-2 3s linear infinite;
      /* transform-origin: 50% 125px; */
    }

    .heart.blue {
      color: rgba(134, 193, 232, 0.8);
      animation: parent-anim 3s linear infinite;
      /* transform-origin: 20% 120px; */
    }

    .heart.purple {
      color: rgba(189, 138, 234, 0.8);
      animation: parent-anim 3s linear infinite;
      transform-origin: 40% 150px;
    }

    .trimester-circle {
      text-decoration: none;
      width: 15%;
    height: 0;
    padding-bottom: 14%;

      /* background-color: #d54368; */
      background-image:  url('https://images.unsplash.com/photo-1532636785204-753cb2c25594?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
      border-radius: 50%;
      background-size: cover;
      margin: 5% 1%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      color: #000000;
      text-align: center;
      cursor: pointer;
      position: relative;
      z-index: 1;
    }
    .trimester-circle:hover{
        transition: .4S;
        scale: 1.1;
        margin-left: 20px;
    margin-right: 20px;

    }
    .trimester-circle:hover .heart {
      opacity: 1;
    }

    @keyframes parent-anim {
      0% {
        transform: rotate(0);
      }
      50%{
        transform: rotate(60deg);

      }
      100% {
        transform: rotate(-60deg);
      }
    }

    @keyframes parent-anim-2 {
        0% {
        transform: rotate(0);
      }
      50%{
        transform: rotate(60deg);

      }
      100% {
        transform: rotate(-60deg);
      }
    }
    .heart_text{
        position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 18px;
      font-weight: bold;
      color: white; /* Baby theme color */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
    .circle-title {
        background-color: B21F66;
    color: #fff !important;
    padding: 5px 181px;
    border-radius: 6px;
    font-size: 26px;}
.widget{
    border: none !important;
}
</style>

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
  {{-- <div class="hearts-wrapper">
    <a href="#" class="heart green"><div>♥</div></a>
    <a href="#" class="heart pink"><div>♥</div></a>
    <a href="#" class="heart blue"><div>♥</div></a>
    <a href="#" class="heart purple"><div>♥</div></a>
    <a class="trimester-circle" href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الأول')->first()->id]) }}">الثلث الأول</a>
    <a class="trimester-circle" href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الثاني')->first()->id]) }}">الثلث الثاني</a>
    <a class="trimester-circle" href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الثالث')->first()->id]) }}">الثلث الثالث</a>
  </div> --}}

    {{-- <div class="row pt-60 pb-40" style="width: 100%;">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h1 class="section-title section-title-border" >أشهر الحمل  </h1>
                        </div>
                    </div>
                </div>

                <div class="month_continer">
                    <img src="../pages/img/دوائر.png" alt="" style="    width: 79%;

    margin-top: -136px;">

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
                </div> --}}



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

                    {{-- <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4 justify-center"> --}}
                    {{-- <div > --}}

                        {{-- <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 self-center"> --}}
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
        {{-- <div class="sidebar">
            <div style="    height: 500px;
            background: #dc3545;
            position: sticky;
            top: 2px;"></div>
        </div> --}}
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script> window.onload = function ()
    {
        var desiredHeight = "calc(100vh - 218px)";
        var sliderArea = document.querySelector('.ltn__slider-area');
        if (sliderArea) {
            sliderArea.style.height = desiredHeight; // Adjust the height as needed
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
