@extends('../layouts.pagesLayouts.Master')
<link rel="shortcut icon" href="..././انجابي فكتور-01-01.jpg" />

    @section('content')
        <style>
            :root {
                --width: 350px;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .sam {
                /* height: 100vh; */
                display: grid;
                place-items: center;
            }


            .sam .cardss {
                display: flex;
                gap: 1.5rem;
            }

            .sam .cardes {
                position: relative;
                width: 100px;
                height: 280px;
                border-radius: 1rem;
                overflow: hidden;
                box-shadow: 0 3px 15px rgba(0, 0, 0, 0.3);
                transition: width 0.5s ease-out;
            }

            .sam .cardes:hover {
                width: var(--width);
            }

            .sam .cardes:hover .cardes-containers .mm {
                transform: rotate(0);
            }

            .sam .cardes:hover .cardes-containers .SS {
                opacity: 1;
                transform: translateY(0);
                transition: transform 1s, opacity 0.3s linear 0.3s;
            }

            .sam .cardes:hover::before {
                transform: scale(1.3);
            }

            .sam .cardes::before {
                content: '';
                position: absolute;
                z-index: -1;
                width: 250px;
                height: 350px;
                background-size: cover;
                background-position: center;
                transform: scale(1);
                transition: transform 0.5s ease-in;
            }



            .sam .cardss .cardes-containers {
                position: absolute;
                left: 50%;
                bottom: 15%;
                transform: translateX(-50%);
                text-align: center;
                font: 900 1rem helvetica, sans-serif;
                color: white;
            }

            .sam .cardss .cardes-containers .mm {
                font-size: 1.1rem;
                letter-spacing: -1px;
                text-transform: uppercase;
                transform: rotate(90deg);
                transition: transform 0.5s;
            }

            .sam .cardss .cardes-containers .SS {
                position: relative;
                width: var(--width);
                font-size: 0.99rem;
                font-weight: 100;
                line-height: 1.6;
                color: rgba(255, 255, 255, 0.75);
                margin-top: 0.5rem;
                padding: 0 1.2rem;
                transform: translateY(2rem);
                opacity: 0;
            }
            .card-img-top{
                aspect-ratio:6/4
            }
            .more{
                width: 100%;
                display: flex;
                justify-content:center;
                border-radius:6px;
margin:20px ;
            }
            .more a {
                padding: 8px 70px;
                background:#d54368;
                color:white;
                border-radius:6px;

            }
.card{
    border-radius: 12px;
    max-width: 200px;
    margin-left: 10px;
    overflow: hidden;
}
.card img{
border-radius: 0 !important

}
.card img:hover{
    transition: 0.4s;
transform: scale(1.1)

}
        </style>
        <div class="col-lg-12 ">
            <div class="section-title-area text-center">
                <h2 class="section-title section-title-border">{{ $group->TITLE }}</h2>
            </div>
        </div>
        <div class="sam">
            <main class='cardss'>

                @foreach ($tags as $tag)
                    @if ($tag->posts->count() > 0)
                        <a href="{{ route('showtag', ['tag' => $tag->id]) }}">
                            <div style="background-image: url({{ asset($tag->IMG) }}); background-size: cover;"
                                class="cardes">
                                <div class='cardes-containers'>
                                    <h2 class="mm">{{ $tag->TITLE }}</h2>
                                    <p class="SS" style="color:#d54368">{{ $tag->DESCRIPTION }}</p>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach


            </main>
        </div>





        <div class="container">


            {{-- Associated Posts Section --}}
            <div class="mt-4">




                    <div class="card-group">
                         @foreach ($tags as $tag)
                    <div class="col-lg-12 mb-4">
                        <div class="section-title-area text-center">
                            <h2 class="section-title section-title-border">{{ $tag->TITLE }}</h2>

                        </div>
                    </div>
                    {{-- @dd($tag->id) --}}
                    <div class="content" style="    display: flex;
    width: 100%;
    justify-content: center;
    column-gap: 25px;

">
                        @foreach (\App\Models\Post::where('TAG','=',$tag->id)-> take(4)->get() as $post)
                        <div class="card" style="max-width:300px ;margin-left:10px:">
                            <a href="{{ route('ShoWarticle',['id'=>$post->id]) }}">
                                <div style="    overflow: hidden;">
                            <img src="{{ asset($post->IMG) }}" class="card-img-top" alt="Post Image"></div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->TITLE }}</h5>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($post->DESCRIPTION, 100) }}
                                    </p>
                                </div>
                            </a>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="more">
                    <a href="{{ route('showtag', ['tag' => $tag->id]) }}">
                        اظهار المزيد
                    </a>
                    </div>
                @endforeach



            </div>

        </div>
    @endsection
