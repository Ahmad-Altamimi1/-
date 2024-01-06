    @extends('../layouts.pagesLayouts.Master')
    @section('content')



    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        </div>
<style>

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


  /*
          .slick-slide{
                 height: 379px;

          } */



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
  /* .slick-initialized .slick-slide{
          border-radius: 0  64px 64px 0 ;

  } */
  .ltn__slider-area {
      /* height: calc(100vh - 218px)!important; */
      }

  .click_active{

  }
  .ltn__slide-one-active .ltn__slide-item  {
      height: calc(100vh - 188px) !important;
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
      .containslidbar{

      }
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

  @import url('https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800');
   * {
       box-sizing: border-box;
  }
  .bodddy {
       /* background-color: #ffe53b; */
       background: rgb(213,67,96);
       background-image: linear-gradient(147deg, rgba(246,172,191,1) 0%,  rgba(213,67,96,1) 74%);
  /* background: linear-gradient(90deg, rgba(213,67,96,1) 5%, rgba(235,102,136,1) 50%, rgba(246,172,191,1) 100%); */
       height: calc(100vh - 200px);
       font-family: 'Fira Sans', sans-serif;
       display: flex;
       gap: 20px;
       /* flex-direction: row-reverse; */
       padding: 100px 158px;
       align-items: center;
  }
  @media screen and (max-width: 962px) {
    .bodddy{
        flex-direction: column;
        gap: 0 ;
    }
    main section{
        min-height: unset;
        height: 70vh;
    }
    main section .carousel-container{
        height: 17rem;
    }
  }
   .blog-slider {
       width: 95%;
       position: relative;
       max-width: 800px;
       margin: auto;
       background: #fff;
       box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
       padding: 25px;
       border-radius: 5px;
       height: 100%;
       transition: all 0.3s;
  }
   @media screen and (max-width: 992px) {
       .blog-slider {
           max-width: 680px;
           height: 400px;
      }
  }
   @media screen and (max-width: 768px) {
       .blog-slider {
           min-height: 500px;
           height: auto;
           margin-top: 200px;
      }
  }
   @media screen and (max-height: 500px) and (min-width: 992px) {
       .blog-slider {
           height: 350px;
      }
  }
   .blog-slider__item {
       display: flex;
       align-items: center;
  }
   @media screen and (max-width: 768px) {
       .blog-slider__item {
           flex-direction: column;
      }
  }
   .blog-slider__item.swiper-slide-active .blog-slider__img img {
       opacity: 1;
       transition-delay: 0.3s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > * {
       opacity: 1;
       transform: none;
  }
  .blog-slider__content{
      flex: 1 !important;
      /* margin-top: -260px; */
      padding-top: 60px;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(1) {
       transition-delay: 0.3s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(2) {
       transition-delay: 0.4s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(3) {
       transition-delay: 0.5s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(4) {
       transition-delay: 0.6s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(5) {
       transition-delay: 0.7s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(6) {
       transition-delay: 0.8s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(7) {
       transition-delay: 0.9s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(8) {
       transition-delay: 1s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(9) {
       transition-delay: 1.1s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(10) {
       transition-delay: 1.2s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(11) {
       transition-delay: 1.3s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(12) {
       transition-delay: 1.4s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(13) {
       transition-delay: 1.5s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(14) {
       transition-delay: 1.6s;
  }
   .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(15) {
       transition-delay: 1.7s;
  }
   .blog-slider__img {
    width: 275px;
    flex-shrink: 0;
    height: 257px;
    background-image: linear-gradient(147deg, rgba(246,172,191,1) 0%, rgba(213,67,96,1) 74%);
    /* box-shadow: 4px 13px 30px 1px rgba(252, 56, 56, 0.2); */
    border-radius: 20px;
    transform: translate(-81px ,55px);
    overflow: hidden;
  }
   .blog-slider__img:after {
       content: '';
       position: absolute;
       top: 0;
       left: 0;
       width: 100%;
       height: 100%;
       background-image: linear-gradient(147deg, rgb(255 255 255) 0%, rgb(255 145 0) 74%);

       border-radius: 20px;
       opacity: 0.8;
  }
   .blog-slider__img img {
       width: 100%;
       height: 100%;
       object-fit: cover;
       display: block;
       opacity: 0;
       border-radius: 20px;
       transition: all 0.3s;
  }
   @media screen and (max-width: 768px) {
       .blog-slider__img {
           transform: translateY(-50%);
           width: 90%;
      }
  }
   @media screen and (max-width: 576px) {
       .blog-slider__img {
           width: 95%;
      }
  }
   @media screen and (max-height: 500px) and (min-width: 992px) {
       .blog-slider__img {
           height: 270px;
      }
  }
   .blog-slider__content {
       padding-right: 25px;
  }
   @media screen and (max-width: 768px) {
       .blog-slider__content {
           margin-top: -80px;
           text-align: center;
           padding: 0 30px;
      }
  }
   @media screen and (max-width: 576px) {
       .blog-slider__content {
           padding: 0;
      }
  }
   .blog-slider__content > * {
       opacity: 0;
       transform: translateY(25px);
       transition: all 0.4s;
  }
   .blog-slider__code {
       color: #7b7992;
       margin-bottom: 15px;
       display: block;
       font-weight: 500;
  }
   .blog-slider__title {
       font-size: 24px;
       font-weight: 700;
       color: #0d0925;
       margin-bottom: 20px;
  }
   .blog-slider__text {
       color: #4e4a67;
       margin-bottom: 30px;
       line-height: 1.5em;
  }
   .blog-slider__button {
       display: inline-flex;
     background-color: #d54368;

       padding: 15px 35px;
       border-radius: 50px;
       color: #fff;
       box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4);
       text-decoration: none;
       font-weight: 500;
       justify-content: center;
       text-align: center;
       letter-spacing: 1px;
  }
   @media screen and (max-width: 576px) {
       .blog-slider__button {
           width: 100%;
      }
  }
   .blog-slider .swiper-container-horizontal > .swiper-pagination-bullets, .blog-slider .swiper-pagination-custom, .blog-slider .swiper-pagination-fraction {
       bottom: 10px;
       left: 0;
       width: 100%;
  }
   .blog-slider__pagination {
       position: absolute;
       z-index: 21;
       right: 20px;
       width: 11px !important;
       text-align: center;
       left: auto !important;
       top: 50%;
       bottom: auto !important;
       transform: translateY(-114%);
  }
   @media screen and (max-width: 768px) {
       .blog-slider__pagination {
           transform: translateX(-50%);
           left: 50% !important;
           top: 205px;
           width: 100% !important;
           display: flex;
           justify-content: center;
           align-items: center;
      }
  }
   .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
       margin: 8px 0 !important;
  }
   @media screen and (max-width: 768px) {
       .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
           margin: 0 5px !important;
      }
  }
   .blog-slider__pagination .swiper-pagination-bullet {
       width: 11px;
       height: 11px;
       display: block;
       border-radius: 10px;
       background: #062744;
       opacity: 0.2;
       transition: all 0.3s;
  }
   .blog-slider__pagination .swiper-pagination-bullet-active {
       opacity: 1;
       background:  rgba(213,67,96,1);
       height: 30px;
       box-shadow: 0px 0px 20px rgba(252, 56, 56, 0.3);
  }
   @media screen and (max-width: 768px) {
       .blog-slider__pagination .swiper-pagination-bullet-active {
           height: 11px;
           width: 30px;
      }
  }


  /* video section  */


  main section {
       width: 100%;
       height: 100%;
       /* padding: 4rem 0; */
  }
   main section .carousel-container {
       width: 100%;
       height: 100%;
       padding: 0;
       position: relative;
       overflow: hidden;
       border-radius: 0.375rem;
  }
   main section .carousel-container .item {
       width: 100%;
       height: 100%;
       position: relative;
       display: none;
       animation: fade 0.3s ease-in-out;
  }
  .fade:not(.show){
      opacity: 1 !important;
  }
   main section .carousel-container .item .numbertext {
       /* padding: 0.5rem 0.75rem;
       position: absolute;
       top: 1rem;
       right: 1rem;
       border-radius: 0.9375rem;
       font-size: 0.875rem;
       color: #f2f2f2;
       background-color: rgba(0, 0, 0, 0.9); */
       display: none
  }
   main section .carousel-container .item .image {
       width: 100%;
       height: 100%;
       display: flex;
  }
   main section .carousel-container .item .image img {
       width: 100%;
       height: 100%;
       object-fit: cover;
  }
   main section .carousel-container .item .text {
    width: 100%;
    top: 50%;
    padding: 0.625rem 0.9375rem;
    position: absolute;
    bottom: 0;
    font-size: 0.9rem;
    color: #f2f2f2 !important;
    background-color: rgba(0, 0, 0, 0.9);
    background:linear-gradient(to top, orange 0%,  #ffffff24 100%);
    transform: translate(0px,-50%);
    height: 100%;
    display: flex;
    justify-content: center;
  }
   main section .carousel-container .item .text .title {
       margin: 0.5rem 0 0 0;
       font-size: 1.2rem;
       font-weight: normal;
  }
   main section .carousel-container .prev, main section .carousel-container .next {
       width: 2rem;
       height: 2rem;
       padding: 0.3125rem;
       position: absolute;
       top: calc(50% - 1rem);
       user-select: none;
       font-size: 1rem;
       color: #f2f2f2 !important;
       border-radius: 50%;
       transition: 0.6s ease;
  }
   main section .carousel-container .prev:focus, main section .carousel-container .next:focus, main section .carousel-container .prev:hover, main section .carousel-container .next:hover {
       background-color: rgba(0, 0, 0, 0.9);
  }
   main section .carousel-container .prev {
       left: 0.8rem;
  }
   main section .carousel-container .next {
       right: 0.8rem;
  }
   main section .carousel-container .dots {
       padding: 0.9375rem;
       display: flex;
       align-items: center;
       justify-content: center;
  }
   main section .carousel-container .dots .dot {
       width: 0.625rem;
       height: 0.625rem;
       margin: 0 0.125rem;
       display: inline-block;
       cursor: pointer;
       border-radius: 50%;
       background-color: #bbb;
       transition: background-color 0.6s ease;
  }
   main section .carousel-container .dots .dot:focus, main section .carousel-container .dots .dot:hover {
       background-color: #717171;
  }
   @keyframes fade {
       from {
           opacity: 0.8;
      }
       to {
           opacity: 1;
      }
  }

  .hearts-wrapper {
    position: relative;
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


    }
    .wave-svg {
            width: 100%;
            height: auto;
        }
        .has-dflex-center{
            background: #ac9999;
            transition: 0.4s;
            cursor: pointer;
        }
        .has-dflex-center:hover{
background-color: white !important;
        }
        .next:hover i{
 color: #d54368 !important;
        }
        .prev:hover i{
 color: #d54368 !important;
        }


</style>

<div class="wavv">
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
                  <div class="blog-slider__text" dir="rtl"> {{ \Illuminate\Support\Str::limit($recentpost->DESCRIPTION, 200) }}
                </div>
                  <a href="{{ route('ShoWarticle',['id'=>$recentpost->id]) }}" class="blog-slider__button">أكملي المقال </a>
                </div>
              </div>

              @endforeach



            </div>
            <div class="blog-slider__pagination"></div>
          </div>

              {{-- video section  --}}


              <main style="    width: 48%;">
                <section class="has-dflex-center">
                    <div class="lx-container-80">
                        <div class="lx-row">
                            <div class="lx-card carousel-container">


                                @foreach ($recentposts as $video)


                                <div class="item fade">
                                    <div class="image"><img src="{{ asset($video->IMG) }}" /></div>
                                    <div class="text is-text-centered">
                                        <p style=" color: white;
                                        height: 100%;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;"> {{ $video->TITLE }}</p>
                                    </div>

                                </div> @endforeach

                                <a class="prev has-dflex-center"><i class="fas fa-angle-left"  ></i></a><a class="next has-dflex-center"><i class="fas fa-angle-right" ></i></a></div>
                        </div>
                    </div>
                </section>
            </main>





          </div>
          <style>
            svg{
                position: absolute;
                bottom: 10px;
            }
            .wave2 use {
    -webkit-animation: move-forever2 8s linear infinite;
    animation: move-forever2 8s linear infinite;
    -webkit-animation-delay: -2s;
    animation-delay: -2s;
}

@keyframes move-forever2{

    0% {
    transform: translate(-90px, 0%);
}

100% {
    transform: translate(85px, 0%);
}}
.wave1 use {
    -webkit-animation: move-forever1 10s linear infinite;
    animation: move-forever1 10s linear infinite;
    -webkit-animation-delay: -2s;
    animation-delay: -2s;
}
@keyframes move-forever1{
    0% {
    transform: translate(85px, 0%);
}
100% {
    transform: translate(-90px, 0%);
}
}
.wave3 use {
    -webkit-animation: move-forever3 6s linear infinite;
    animation: move-forever3 6s linear infinite;
    -webkit-animation-delay: -2s;
    animation-delay: -2s;
}
@keyframes move-forever3{

0% {
    transform: translate(-90px, 0%);
}
100% {
    transform: translate(85px, 0%);
}}
.hero-waves {
    width: 100%;
    height: 100px;
    position: absolute;
    bottom: 10px;
    left: 0;
    transform: translate3d(0, 0, 0);
    z-index: 1000;
        }


        @keyframes wave {
            0% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(-50%);
            }
            100% {
                transform: translateX(0);
            }
        }

          </style>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </path></defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </use></g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </use></g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </use></g>
      </svg>
        </div>

          </div></div>

<style>



    </style>

<?php
use App\Models\poststags;
?>
<style>
    .center_content{
        display: grid;
        grid-template-columns: 70% 30%;
        gap: 10px;
    }
    .trimester-one{
        position: absolute;
    left: 118px;
    bottom: 17px;
    transform: rotate(-14deg);


    }
    .trimester-tow{
        position: relative;
        z-index: 1;

    }
    .trimester-tow:hover{
        transition: 0.4s;

        scale: 1.1;
    z-index: 10;


    }
    .trimester-three{
        position: absolute;
    right: 115px;
    bottom: 25px;
    transform: rotate(15deg);
    z-index: 2;

    }
    .trimester-three:hover{
        transition: 0.4s;
        transform: rotate(0deg);
    }
    .hearts-wrapper a {
        width: 300px;
    }
    .months-Title{
        background: #dacded;
    padding: 7px;
    color: black !important;
    border-radius: 6px;
    border: 2px solid #c8b8e0;
    }


.category-slider {
    width: 80%;
    margin: 20px auto;
    overflow: hidden;
}

.category-slide {
    float: left;
    width: 200px;
    text-align: center;
    padding: 10px;
    margin-right: 10px;
    background-color: #f4f4f4;
    border-radius: 5px;
    cursor: pointer;
}
.post.post-list-sm:after{
    display: none !important;
}
.widget{
    border: solid 1px #EBEBEB;
    padding: 35px 30px;
}
.injaby_category{
    width: 100%;
    background-color: #f2c6d1;
    height: 477px;
    display: flex;
    padding: 10px 20px 40px ;
    border-radius: 12px;
}
/* .col-sm-3 card_circle_image{
    display: flex;
    flex-direction: column;
} */
.circle_image {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid #8b8d8c;
}
.circle_image img{
    width: 80%;
}
.col-sm-3.card_circle_image{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
</style>
<div class="center_content container pt-60" dir="rtl">
    <div class="center_content_Right">
<div class="row  pb-40" style="width: 100%;">
    <div class="col-lg-12">
        <div class="section-title-area text-center">
            <h1 class="section-title section-title-border" style=" font-size: 24px;">
                <span class="circle-title months-Title"> تابعي مراحل حملك مع إنجابي</span>
            </h1>
        </div>
    </div>
</div>
  <div class="hearts-wrapper">
    <a class="trimester-one" style="" href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الأول')->first()->id]) }}"><img src="{{ asset('pages/img/months/اول 1.webp') }}" alt=""><div class="heart green">♥</div></a>
    <a class="trimester-tow" href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الثاني')->first()->id]) }}"><img src="{{asset('pages/img/months/ثاني 2.webp')  }}" alt=""><div class="heart pink">♥</div></a>
    <a class="trimester-three"  href="{{ route('showtag', ['tag' => poststags::where('TITLE', '=', 'الثلث الثالث')->first()->id]) }}"><img src="{{ asset('pages/img/months/ثالث 3.webp') }}" alt=""><div class="heart blue">♥</div></a>
  </div>

  <div class="pergant-month-slider"> <!-- PRODUCT SLIDER AREA START -->
    <section id="hero">

        <div class="container-xl">

            <div class="row gy-4">

                <div class="col-lg-12">

                    <!-- post tabs -->
                    <div class="post-tabs rounded bordered" dir="ltr">
                        <!-- tab navs -->
                        <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist"
                            style="flex-direction: row-reverse;">

                            <li class="nav-item" role="presentation"><button aria-selected="true"
                                    class="nav-link active" data-tag-title="الشهر الأول" id="tag1"
                                    type="button">الشهر الأول</button>
                            </li>
                            <li class="nav-item" role="presentation"><button aria-selected="true" class="nav-link"
                                    data-tag-title="الشهر الثاني" id="tag2" type="button"> الشهر الثاني</button>
                            </li>
                            <li class="nav-item" role="presentation"><button aria-selected="true" class="nav-link"
                                    data-tag-title="الشهر الثالث" id="tag3" type="button">الشهر الثالث</button>
                            </li>
                            <li class="nav-item" role="presentation"><button aria-selected="true" class="nav-link"
                                    data-tag-title="الشهر الرابع" id="tag4" type="button"> الشهر الرابع</button>
                            </li>
                            <li class="nav-item" role="presentation"><button aria-selected="true" class="nav-link"
                                    data-tag-title="الشهر الخامس" id="tag4" type="button">الشهر الخامس </button>
                            </li>
                            <li class="nav-item" role="presentation"><button aria-selected="true" class="nav-link"
                                    data-tag-title="الشهر السادس" id="tag5" type="button"> الشهر السادس</button>
                            </li>
                            <li class="nav-item" role="presentation"><button aria-selected="true" class="nav-link"
                                    data-tag-title="الشهر السابع" id="tag6" type="button">الشهر السابع</button>
                            </li>
                            <li class="nav-item" role="presentation"><button aria-selected="true" class="nav-link"
                                    data-tag-title="الشهر الثامن" id="tag7" type="button"> الشهر الثامن</button>
                            </li>
                            <li class="nav-item" role="presentation"><button aria-selected="true" class="nav-link"
                                    data-tag-title="الشهر التاسع" id="tag8" type="button">الشهر التاسع </button>
                            </li>







                        </ul>
                        <!-- tab contents -->
                        <div class="tab-content" id="postsTabContent">
                            <!-- loader -->
                            <div class="lds-dual-ring"></div>
                            <!-- popular posts -->
                            <div class="tab-pane fade show ahmadaltameme active" dir="rtl">
                                <div class="row">


                                </div>
                            </div>
                        </div>

                    </div>

                </div>

    </section>
    </div>

<div class="injaby_category">
    <div class="row " style="justify-content: center">
        <p style="    text-align: center;
        font-size: 25px;
        padding: 0 0 30px 0;">أقسام إنجابي </p>
<div class="col-sm-3 card_circle_image">
<div class="circle_image">
    <img class="" src="{{ asset('pages/img/category/pregnancy_10217205.png') }}" alt="">
</div>
    <p>أشهر الحمل</p>
</div>
<div class="col-sm-3 card_circle_image">
<div class="circle_image">
    <img class="" src="{{ asset('pages/img/category/video_2306737.png') }}" alt="">
</div>
    <p>إنجابي TV</p>
</div>
<div class="col-sm-3 card_circle_image">
<div class="circle_image">
    <img class="" src="{{ asset('pages/img/category/fetus_8041564.png') }}" alt="">
</div>
    <p>صحة الطفل</p>
</div>
<div class="col-sm-3 card_circle_image">
<div class="circle_image">
    <img class="" src="{{ asset('pages/img/category/maternity_7901883.png') }}" alt="">
</div>
    <p>صحتك ماما</p>
</div>
<div class="col-sm-3 card_circle_image">
<div class="circle_image">
    <img class="" src="{{ asset('pages/img/category/pregnant_6205006.png') }}" alt="">
</div>
    <p>منوعات إنجابي</p>
</div>
<div class="col-sm-3 card_circle_image">
<div class="circle_image">
    <img class="" src="{{ asset('pages/img/category/maternity_4577177.png') }}" alt="">
</div>
    <p>اعتني بنفسك</p>
</div>
<div class="col-sm-3 card_circle_image">
<div class="circle_image">
    <img class="" src="{{ asset('pages/img/category/love_7409875.png') }}" alt="">
</div>
    <p>اعتني بطفلك</p>
</div>

</div>
</div>
</div> <!-- end center content Right -->
<div class="center_content_Left">
    <div class="widget rounded" >
        <div class="widget-about data-bg-image text-center">
            <img src="{{ asset('انجابي فكتور-01-01.jpg') }}" alt="logo" class="mb-4" />
            <p class="mb-4">إنجابي هي منصة صحية تثقيفية نعل من خلالها على توفير المعلومات الطبية الموثوقة لصحة الأم والطفل خلال فترات الحمل والأمومة.</p>
            <ul class="social-icons list-unstyled list-inline mb-0">
                <li class="list-inline-item"><a href="https://www.facebook.com/tebkum"><i
                            class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="https://twitter.com/tebkum"><i
                            class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="https://www.youtube.com/@Tebkum"><i
                            class="fab fa-youtube"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/tebkum"><i
                            class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://www.tiktok.com/tebkum"><i
                            class='fab fa-tiktok'></i>
                    </a></li>
            </ul>
        </div>
    </div>

    <div class="widget rounded" >
        <div class="widget-about data-bg-image text-center">
            <img src="{{ asset('pages/img/tebkumlogo.png') }}" alt="logo" class="mb-4" />
        </div>
    </div>

    <div class="widget rounded">
        <div class="widget-header text-center">
            <h3 class="widget-title"> أعتني بطفلك</h3>
        </div>
        <div class="widget-content" style="display: flex;
        flex-direction: column;
        gap: 35px;">
            <?php
            $xx = 0;
            ?>
            @foreach ($left_side_bar_content as $singlepost)
                @if (1)
                    @if ($xx <= 5)
                        <!-- post -->
                        <div class="post post-list-sm circle" style="    display: flex;

                        flex-direction: row-reverse;
                    }">
                            <div style="max-width: 85px;" class="thumb">
                                <a href="/posts/{{ $singlepost->id }}/show">
                                    <div class="inner">
                                        <img style="border-radius: 2px;"
                                            src="{{ asset( $singlepost->IMG ) }}"
                                            />
                                    </div>
                                </a>
                            </div>
                            <div class="details clearfix" style="    margin-left: 20px;    flex: 1;">
                                <h6 class="post-title my-0"><a
                                        href="/posts/{{ $singlepost->id }}/show">{{ $singlepost->TITLE }}</a>
                                </h6>
                            </div>
                        </div>
                    @endif
                    <?php
                    $xx++;
                    ?>
                @endif
            @endforeach
        </div>
    </div>
</div><!-- end center content Left -->
 </div> {{--end center content  --}}

{{-- Start bottom content  --}}
<div class="bottom_content">
    <div class="post-tabs rounded bordered" dir="ltr">
        <!-- tab navs -->
        <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist"
            style="flex-direction: row-reverse;">

            <li class="nav-item" role="presentation"><button aria-selected="true"
                    class="nav-link active" style="width: 130px" data-tag-title="صحتك ماما" id="baby1"
                    type="button"> صحتك ماما </button>
            </li>
            <li class="nav-item" role="presentation"><button aria-selected="true" style="width: 130px" class="nav-link"
                    data-tag-title="صحة الطفل" id="baby" type="button"> صحةالطفل </button>
            </li>
        </ul>
    </div>
<style>

a {
  text-decoration: none;
  color: inherit;
  outline: none;
  transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}
a:focus,
a:active,
a:visited,
a:hover {
  text-decoration: none;
  outline: none;
}
a:hover {
  color: #e73700;
}
h2 {
  margin-bottom: 48px;
  padding-bottom: 16px;
  font-size: 20px;
  line-height: 28px;
  font-weight: 700;
  position: relative;
  text-transform: capitalize;
}
h3 {
  margin: 0 0 10px;
  font-size: 28px;
  line-height: 36px;
}
button {
  outline: none !important;
}
/******* Common Element CSS End *********/

/* -------- title style ------- */
.line-title {
  position: relative;
  width: 400px;
}
.line-title::before,
.line-title::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  height: 4px;
  border-radius: 2px;
}
.line-title::before {
  width: 100%;
  background: #f2f2f2;
}
.line-title::after {
  width: 32px;
  background: #e73700;
}

/******* Middle section CSS Start ******/
/* -------- Landing page ------- */
.game-section {
  padding: 60px 50px;
}
.game-section .owl-stage {
  margin: 15px 0;
  display: flex;
  display: -webkit-flex;
}
.game-section .item {
  margin: 0 15px 60px;
  width: 320px;
  height: 400px;
  display: flex;
  display: -webkit-flex;
  align-items: flex-end;
  -webkit-align-items: flex-end;
  background: #343434 no-repeat center center / cover;
  border-radius: 16px;
  overflow: hidden;
  position: relative;
  transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
  cursor: pointer;
}
.game-section .item.active {
  width: 500px;
  box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
  -webkit-box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
}
.game-section .item:after {
  content: "";
  display: block;
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
}
.game-section .item-desc {
  padding: 0 24px 12px;
  color: #fff;
  position: relative;
  z-index: 1;
  overflow: hidden;
  transform: translateY(calc(100% - 54px));
  -webkit-transform: translateY(calc(100% - 54px));
  transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}
.game-section .item.active .item-desc {
  transform: none;
  -webkit-transform: none;
}
.game-section .item-desc p {
  opacity: 0;
  -webkit-transform: translateY(32px);
  transform: translateY(32px);
  transition: all 0.4s ease-in-out 0.2s;
  -webkit-transition: all 0.4s ease-in-out 0.2s;
}
.game-section .item.active .item-desc p {
  opacity: 1;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}
.game-section .owl-theme.custom-carousel .owl-dots {
  margin-top: -20px;
  position: relative;
  z-index: 5;
}
/******** Middle section CSS End *******/

/***** responsive css Start ******/

@media (min-width: 992px) and (max-width: 1199px) {
  h2 {
    margin-bottom: 32px;
  }
  h3 {
    margin: 0 0 8px;
    font-size: 24px;
    line-height: 32px;
  }

  /* -------- Landing page ------- */
  .game-section {
    padding: 50px 30px;
  }
  .game-section .item {
    margin: 0 12px 60px;
    width: 260px;
    height: 360px;
  }
  .game-section .item.active {
    width: 400px;
  }
  .game-section .item-desc {
    transform: translateY(calc(100% - 46px));
    -webkit-transform: translateY(calc(100% - 46px));
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  h2 {
    margin-bottom: 32px;
  }
  h3 {
    margin: 0 0 8px;
    font-size: 24px;
    line-height: 32px;
  }
  .line-title {
    width: 330px;
  }

  /* -------- Landing page ------- */
  .game-section {
    padding: 50px 30px 40px;
  }
  .game-section .item {
    margin: 0 12px 60px;
    width: 240px;
    height: 330px;
  }
  .game-section .item.active {
    width: 360px;
  }
  .game-section .item-desc {
    transform: translateY(calc(100% - 42px));
    -webkit-transform: translateY(calc(100% - 42px));
  }
}

@media (max-width: 767px) {
  body {
    font-size: 14px;
  }
  h2 {
    margin-bottom: 20px;
  }
  h3 {
    margin: 0 0 8px;
    font-size: 19px;
    line-height: 24px;
  }
  .line-title {
    width: 250px;
  }

  /* -------- Landing page ------- */
  .game-section {
    padding: 30px 15px 20px;
  }
  .game-section .item {
    margin: 0 10px 40px;
    width: 200px;
    height: 280px;
  }
  .game-section .item.active {
    width: 270px;
    box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);
    -webkit-box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);
  }
  .game-section .item-desc {
    padding: 0 14px 5px;
    transform: translateY(calc(100% - 42px));
    -webkit-transform: translateY(calc(100% - 42px));
  }
}
.game-section .item-desc {
    visibility: visible;
    opacity: 1;
    z-index: 2;
    transition: all 0.4s ease-in-out;
    display: block
}
.ltn__blog-area  .container{
    position: relative;
}
.ltn__blog-area  .container ul{
    position: absolute;
    top: -59px;
    left: 50%;
    border: 2px solid #cdc9c9;
    border-bottom: 2px solid #fff;
    transform: translateX(-50%);
}
.ltn__blog-area .content_section{
    border: 2px solid #eee;
    padding: 0;

}
.grid-row{
    display: grid ;
    grid-template-columns: repeat(6,auto);
    grid-template-rows: repeat(2,270px);
    gap: 10px;
    border-top: 2px solid #cdc9c9;
    padding-top: 26px;

}
.ltn__blog-area .ltn__blog-img a img {
border-radius: none;
}
.ltn__blog-img{
    border-radius:0 !important;
}
.tow-butoon{
    color: #d54368 !important;
    background-color :transparent !important;
    background :transparent !important;
}
</style>

</div>
<section class="game-section">

</section>
{{-- End bottom content  --}}



<div class="ltn__blog-area  pt-60 pb-30">
        <div class="container">
            <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist"
            style="flex-direction: row-reverse;">

            <li class="tow-butoon" role="presentation"><button aria-selected="true"
                    class="active-button" style="width: 130px" data-tag-title="صحتك ماما" id="baby1"
                    type="button"> صحتك ماما </button>
            </li>
            <li class="tow-butoon" role="presentation"><button aria-selected="true" style="width: 130px" class=""
                    data-tag-title="صحة الطفل" id="baby" type="button"> صحةالطفل </button>
            </li>
        </ul>

            <div class="row grid-row"  dir="rtl">
                <!-- Blog Item -->
                @foreach($tags as $tag)
                @if($tag->TITLE == "أثناء الحمل")
                @foreach($tag->posts->take(6) as $post)

                <div class="content_section" >
                    <div class="ltn__blog-item">
                        <div class="ltn__blog-img">
                            <a href="{{ route('ShoWarticle',['id'=>$post->id]) }}"><img src="{{ asset($post->IMG) }}" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief" style="padding: 0 !important">
                            <div class="ltn__blog-meta">
                                <ul>

                                </ul>
                            </div>
                            <h3 class="ltn__blog" ><a href="{{ route('ShoWarticle',['id'=>$post->id]) }} " style="font-size: 14px;padding-right:10px">{{ ($post->TITLE) }}</a></h3>
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

    <!-- Add the Owl Carousel JS -->
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
<script>
    $(document).ready(function() {
    // Category slider
    $('.category-slider').on('click', '.category-slide', function() {
        // Remove active class from all category slides
        $('.category-slide').removeClass('active');

        // Add active class to the clicked category slide
        $(this).addClass('active');

        // Get the selected category name
        var categoryName = $(this).text();

        // Perform any action related to the selected category name
        console.log('Selected category:', categoryName);
    });
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {


        // Store initial content
        var initialContent = document.querySelector('.ahmadaltameme').innerHTML;

        // Function to fetch content based on tag title
        function fetchContent(tagTitle) {


            // Fetch content using the fetch API
            fetch('/fetch-content?tagTitle=' + tagTitle)
                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Return the parsed JSON
                })
                .then(function(data) {
                    console.log(data);
                    document.querySelector('.ahmadaltameme').innerHTML = data.content;
                })
                .catch(function(error) {
                    console.error(error);
                    document.querySelector('.ahmadaltameme').innerHTML = '<p>لا يوجد عناصر لعرضها</p>';
                });
        }

        // Attach click event to buttons
        document.querySelectorAll('button[id^="tag"]').forEach(function(button) {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('button[id^="tag"]').forEach(function(otherButton) {
                    otherButton.classList.remove('active');
                    otherButton.style.backgroundColor = '';
                    otherButton.style.color = '';
                });

                // Add active class to the clicked button
                button.classList.add('active');
                button.style.backgroundColor = '#70b646';
                button.style.color = '#111111';

                var tagTitle = button.getAttribute('data-tag-title');
                fetchContent(tagTitle);
            });
        });

        // Fetch content for tag1 on page load and set it as active
        var tag1Button = document.getElementById('tag1');
        tag1Button.classList.add('active');
        tag1Button.style.backgroundColor = '#70b646';
        tag1Button.style.color = '#111111';
        fetchContent('الشهر الثامن');
    });









// to fetxh data in bootom content
document.addEventListener('DOMContentLoaded', function() {


// Store initial content
var initialContent = document.querySelector('.game-section').innerHTML;

// Function to fetch content based on tag title
function fetchContent(tagTitle) {


    // Fetch content using the fetch API
    fetch('/fetch-content-bootom?tagTitle=' + tagTitle)
        .then(function(response) {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json(); // Return the parsed JSON
        })
        .then(function(data) {
            console.log(data);
            document.querySelector('.game-section').innerHTML = data.content;
        })
        .catch(function(error) {
            console.error(error);
            document.querySelector('.game-section').innerHTML = '<p>لا يوجد عناصر لعرضها</p>';
        });
}

// Attach click event to buttons
document.querySelectorAll('button[id^="baby"]').forEach(function(button) {
    button.addEventListener('click', function() {
        // Remove active class from all buttons
        document.querySelectorAll('button[id^="baby"]').forEach(function(otherButton) {
            otherButton.classList.remove('active');
            otherButton.style.backgroundColor = '';
            otherButton.style.color = '';
        });

        // Add active class to the clicked button
        button.classList.add('active');
        button.style.backgroundColor = '#70b646';
        button.style.color = '#111111';

        var tagTitle = button.getAttribute('data-tag-title');
        fetchContent(tagTitle);
    });
});

// Fetch content for tag1 on page load and set it as active
var tag1Button = document.getElementById('baby1');
tag1Button.classList.add('active');
tag1Button.style.backgroundColor = '#70b646';
tag1Button.style.color = '#111111';
fetchContent('صحة الطفل');
});

    var slickNextButton = document.querySelector('.slick-next');

    setTimeout(function() {
        if (slickNextButton) {
            slickNextButton.click();
        }
    }, 3000);


</script>
