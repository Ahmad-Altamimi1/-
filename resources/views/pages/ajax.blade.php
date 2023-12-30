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
