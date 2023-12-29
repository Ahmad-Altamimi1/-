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
    <div class="allheader" style=" display: grid;
    grid-template-columns: 65% 30%;
    gap: 2%;
    padding:0 15%">
        <div id="halfslider" style="width: 100%;padding-left:30px">

            <div class="ltn__slider-area ltn__slider-3 ltn__slider-6 ">
                <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white---">
                    <!-- ltn__slide-item  -->
                          @if (!$havevideo)

                    @foreach ($slidercontent as $slider)



                    <div class="ltn__slide-item ltn__slide-item-8 text-color-white---- bg-image bg-overlay-theme-black-80---" data-bs-bg="{{ $slider->posts->IMG }}" style="width: 50%;">
                        <div class="ltn__slide-item-inner" style="border-radius: 64px;">
                            <div class="container">
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

            </div>
        </div>
        @if (!$havevideo)
        <div class="container">
            <!-- Popular Post Widget -->
            <div class="row">

                <div class="col-md-5 order-md-last" style="width:40%" >
                <div class="login-wrap p-4 p-md-5"  style="    WIDTH: 540PX;">

                                <div class="widget ltn__popular-post-widget" >
                                    <div class="flex" style="justify-content: justify-content:space-around;">
                                        <h2 class="ltn__widget-title w-50" data-mode="popular" id="popularPostsTitle" style="cursor: pointer">المقالات المشهوره</h2>
                                        <h2 class="ltn__widget-title  w-50 " data-mode="recent" style="background: white;
                                        color: black;
                                        border-radius: 8px;
                                        text-align: center;cursor: pointer" >المقالات الحديثه</h2>


                                    </div>
                                    <div class="ajaxul">
                                    <ul class="flex" style="display:grid; grid-template-columns: 50% 50%;gap: 16px;">
                                        @foreach ($recentposts as $recentpost)

                                        <li>
                                            <div class="popular-post-widget-item " style="background: white;

                                            display: flex;
                                            flex-direction: column;
                                            align-items: center;
                                            padding: 10px 0 0 0;
                                            border-radius: 16px;
                                            width: 100%;
    height: 100%;">
                                                <div class="popular-post-widget-img" >
                                                    <a href="{{ route('ShoWarticle', ['id' => $recentpost->id]) }}"><img src="{{ asset($recentpost->IMG) }}" alt="#" style=""></a>

                                                </div>
                                                <div class="popular-post-widget-brief">
                                                    <div class="ltn__blog-meta">
                                                        <ul>
                                                            <span class=" " style="width: 100%;
                                                            display: inline-block;
                                                            text-align: center;"><a href="{{ route('ShoWarticle', ['id' => $recentpost->id]) }}"> {{ $recentpost->TITLE }}</a></span>
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
