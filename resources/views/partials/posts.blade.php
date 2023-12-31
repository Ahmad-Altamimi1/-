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
{{-- </ul> --}}
