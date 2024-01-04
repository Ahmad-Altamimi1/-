


        <style>/* Google Fonts - Poppins */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

            *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              font-family: 'Poppins', sans-serif;
            }
            body{
              min-height: 100vh;
              display: flex;
              align-items: center;
              justify-content: center;
              background-color: #EFEFEF;
            }
            .slide-container{
              max-width: 1120px;
              width: 100%;
              padding: 40px 0;
            }
            .slide-content{
              margin: 0 40px;
              overflow: hidden;
              border-radius: 25px;
            }
            .card{
              border-radius: 25px;
              background-color: #FFF;
            }
            .image-content,
            .card-content{
              display: flex;
              flex-direction: column;
              align-items: center;
              padding: 10px 14px;
            }
            .image-content{
              position: relative;
              row-gap: 5px;
              padding: 25px 0;
            }
            .overlay{
              position: absolute;
              left: 0;
              top: 0;
              height: 100%;
              width: 100%;
              background-color: #4070F4;
              border-radius: 25px 25px 0 25px;
            }
            .overlay::before,
            .overlay::after{
              content: '';
              position: absolute;
              right: 0;
              bottom: -40px;
              height: 40px;
              width: 40px;
              background-color: #4070F4;
            }
            .overlay::after{
              border-radius: 0 25px 0 0;
              background-color: #FFF;
            }
            .card-image{
              position: relative;
              height: 150px;
              width: 150px;
              border-radius: 50%;
              background: #FFF;
              padding: 3px;
            }
            .card-image .card-img{
              height: 100%;
              width: 100%;
              object-fit: cover;
              border-radius: 50%;
              border: 4px solid #4070F4;
            }
            .name{
              font-size: 18px;
              font-weight: 500;
              color: #333;
            }
            .description{
              font-size: 14px;
              color: #707070;
              text-align: center;
            }
            .button{
              border: none;
              font-size: 16px;
              color: #FFF;
              padding: 8px 16px;
              background-color: #4070F4;
              border-radius: 6px;
              margin: 14px;
              cursor: pointer;
              transition: all 0.3s ease;
            }
            .button:hover{
              background: #265DF2;
            }

            .swiper-navBtn{
              color: #6E93f7;
              transition: color 0.3s ease;
            }
            .swiper-navBtn:hover{
              color: #4070F4;
            }
            .swiper-navBtn::before,
            .swiper-navBtn::after{
              font-size: 38px;
            }
            .swiper-button-next{
              right: 0;
            }
            .swiper-button-prev{
              left: 0;
            }
            .swiper-pagination-bullet{
              background-color: #6E93f7;
              opacity: 1;
            }
            .swiper-pagination-bullet-active{
              background-color: #4070F4;
            }

            @media screen and (max-width: 768px) {
              .slide-content{
                margin: 0 10px;
              }
              .swiper-navBtn{
                display: none;
              }
            }
            </style><!-- Swiper CSS -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">




        <div class="row">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                    @foreach ($posts_thumbs->take(6) as $posts_thumb)
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                               <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
@endforeach



                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        </div>



    <!-- Swiper JS -->
   <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
      <!--Uncomment this line-->
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>
</html>


{{--
<div class="row">

@foreach ($posts_thumbs->take(6) as $posts_thumb)
<div class="col-sm-4 pt-3">
        <div class="post post-grid rounded bordered">
            <div class="thumb top-rounded">

                                <a href="/tags/{{ $posts_thumb->tag->id }}/show"
                                    class="category-badge position-absolute">{{ $posts_thumb->tag->TITLE }}</a>

                <a href="/{{$havevideo?'videos':'posts'}}/{{ $posts_thumb->id }}/show">
                    <div style="text-align: center;" class="inner">
                        <img style="height: 250px ;aspect-ratio: 2;"
                            src="{{ asset( $posts_thumb->IMG ) }}"
                            alt="{{ $posts_thumb->TITLE }}" />
                    </div>
                </a>
            </div>
            <div class="details">
                <h5 class="post-title mb-3 mt-3"><a
                        href="/{{$havevideo?'videos':'posts'}} /{{ $posts_thumb->id }}/show">{{ Str::limit($posts_thumb->TITLE, 1000) }}</a>
                </h5>
                <p class="excerpt mb-0">
                    {{ Str::limit($posts_thumb->DESCRIPTION, 20) }}</p>
            </div>
            <div
                class="post-bottom clearfix d-flex align-items-center" style="opacity: 0">
                <div class="social-share me-auto">

                    <ul class="icons list-unstyled list-inline mb-0"> </ul>
                </div>
                <div class="more-button float-end">
                </div>
            </div>
        </div>
    </div>

@endforeach
</div>
 --}}

<script>

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });

</script>
