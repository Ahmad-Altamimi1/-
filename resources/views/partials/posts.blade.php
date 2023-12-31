<!-- partials/posts.blade.php -->


{{-- <ul class="flex" style="display:grid; grid-template-columns: 50% 50%;gap: 16px;"> --}}
@foreach ($popularPosts as $post)
<li>
    <div class="popular-post-widget-item " >
        <div class="popular-post-widget-img" >
            <a href="{{ route('ShoWarticle', ['id' => $post->id]) }}"><img src="{{ asset($post->IMG) }}" alt="#" style=""></a>

        </div>
        <div class="popular-post-widget-brief">
            <div class="ltn__blog-meta float-text">
                <ul>
                    <span class=" " style="width: 100%;
                    display: inline-block;
                    text-align: center;"><a href="{{ route('ShoWarticle', ['id' => $post->id]) }}"> {{ $post->TITLE }}</a></span>
                    <li>
                        <span></span>
                        {{-- <span>{{ \Carbon\Carbon::parse($post->DATE_SCHEDULER)->locale('ar')->isoFormat('MMM DD, YYYY') }}</span> --}}
                    </li>

                </ul>
            </div>
        </div>
    </div>
</li>

@endforeach
{{-- </ul> --}}
