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
        border-radius: 64px;
}
        </style>
        </div>
    {{-- <div class="ltn__utilize-overlay"></div> --}}



        <!-- SLIDER AREA START (slider-6) -->

                      @if ($havevideo)
    <div id="halfslider" style="width: 70%">
         <div class="ltn__slider-area ltn__slider-4 position-relative">
        <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">

            <!-- HTML5 VIDEO -->
            <video autoplay muted loop id="myVideo">
                <source src="../{{ $slidercontent->video }}" type="video/mp4">
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
                                        <h6 class="slide-sub-title white-color animated">مرحبا بك في أنجابي</h6>
                                        <h1 class="slide-title text-uppercase white-color animated ">{{ $slidercontent->description }}</h1>
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
    <div id="halfslider" style="width: 60%;padding-left:30px">

        <div class="ltn__slider-area ltn__slider-3 ltn__slider-6 ">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white---">
                <!-- ltn__slide-item  -->
                      @if (!$havevideo)

                @foreach ($slidercontent as $slider)



                <div class="ltn__slide-item ltn__slide-item-8 text-color-white---- bg-image bg-overlay-theme-black-80---" data-bs-bg="{{ $slider->posts->IMG }}" style="width: 50%;">
                    <div class="ltn__slide-item-inner" style="    border-radius: 64px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-item-info">
                                                <div class="slide-item-info-inner ltn__slide-animation">
                                                    <h1 class="slide-title animated ">اهلا بك في أنجابي </h1>
                                                    <h6 class="slide-sub-title ltn__body-color slide-title-line animated">{{ $slider->posts->TOPIC }}</h6>
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
                                    <!-- <div class="slide-item-img">
                                        <img src="pages/img/slider/41-1.png" alt="#">
                                        <span class="call-to-circle-1"></span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif





            </div>
            <section class="ftco-section ftco-no-pb ftco-no-pt" style="">
                @if (!$havevideo)
    <div class="container">
        <!-- Popular Post Widget -->
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-5 order-md-last" style="width:40%" >
            <div class="login-wrap p-4 p-md-5"  style="    WIDTH: 540PX;">

                            <div class="widget ltn__popular-post-widget" >
                                <div class="flex" style="justify-content: justify-content:space-around;">
                                <h2 class="ltn__widget-title  w-50 " >المقالات الحديثه</h2>
                                <h2 class="ltn__widget-title w-50">المقالات المشهوره</h2>
                                </div>
                                <ul class=" flex" style="flex-wrap: wrap; column-gap: 20px;    justify-content: flex-end;">
                                    @foreach ($recentposts as $recentpost)

                                    <li>
                                        <div class="popular-post-widget-item ">
                                            <div class="popular-post-widget-img">
                                                <a href="{{ route('ShoWarticle', ['id' => $recentpost->id]) }}"><img src="{{ asset($recentpost->IMG) }}" alt="#"></a>
                                                <span class=" " style="text-align: right"><a href="{{ route('ShoWarticle', ['id' => $recentpost->id]) }}"> {{ $recentpost->TITLE }}</a></span>
                                            </div>
                                            <div class="popular-post-widget-brief">
                                                <div class="ltn__blog-meta">
                                                    <ul>

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
                            @endif
        </div>
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

    <div  class="monthimg monthimg1">
        <img src="../1111.jpg" alt="khkjh" >
<p class="month_content ">الثلث الثاني</p>
    </div>

    <div  class="monthimg monthimg2">
        <img src="../1111.jpg" alt="khkjh" >
<p class="month_content ">الثلث الثاني</p>
    </div>

    <div  class="monthimg monthimg3">
        <img src="../1111.jpg" alt="khkjh" >
<p class="month_content ">الثلث الثاني</p>
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
                                        @if ($first_tag->posts[0])

                                        <img class="rounded-lg w-full" src="{{ asset($first_tag->posts[0]->IMG) }}" alt="" />
                                        @endif
                                        <div class="p-4 absolute z-2 bottom-0 w-100">
                                            {{-- <span class="focus:outline-none text-[12px] bg-slate-600 text-slate-200 dark:text-slate-200 rounded font-medium py-1 px-2">27 Aug 2023</span> --}}
                                            <a href="#" class="my-3 block text-[36px] leading-12 font-normal tracking-tight text-dark-200
                                            dark:text-dark after:absolute after:inset-0 z-3">@if ($first_tag->posts[0])
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
                            @foreach ( $first_tag->posts->skip(1)->take(4) as $post )
                            <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl  w-full relative p-4 mb-4 hover-translate" style="border: 1px solid rgb(133, 129, 129)">
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
                @if($tag->TITLE == "صحة الطفل")
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

    @if($tag->TITLE == 'صحة الطفل')


       @foreach ( $tag->posts->take(3) as $post )

  <article>
    <div class="article-wrapper">
      <figure>
        <a href="{{ route('ShoWarticle',["id"=>$post->id]) }}"><img src="{{ $post->IMG }}" alt="" /></a>
      </figure>
      <div class="article-body">
        <h2>{{ $post->TITLE }}</h2>
        <p>
          {{ $post->DESCRIPTION }}
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
  <script>
    // document.addEventListener("DOMContentLoaded", function() {
    //   var loginWrap = document.querySelector('.login-wrap');
    //   loginWrap.style.transform = 'translateX(-852px)';
    // });
  </script>
  <script>



  </script>
