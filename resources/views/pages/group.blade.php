@extends('../layouts.pagesLayouts.Master')
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
                                    <p class="SS">{{ $tag->DESCRIPTION }}</p>
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
                            {{ $tag->id }}

                        </div>
                    </div>
                    {{-- @dd($tag->id) --}}
                        @foreach (\App\Models\Post::where('TAG','=',$tag->id) as $post)

                        <a href="{{ route('ShoWarticle',['id'=>$post->id]) }}">sssssssss</a>
                            <div class="card">
                                <img src="{{ asset($post->IMG) }}" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->TITLE }}</h5>
                                    <p class="card-text">{{ $post->DESCRIPTION }}</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>


                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('showtag', ['tag' => $tag->id]) }}">
                        اظهار المزيد
                    </a>
                @endforeach




            </div>



        </div>
    @endsection
