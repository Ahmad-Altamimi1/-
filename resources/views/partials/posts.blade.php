<!-- partials/posts.blade.php -->


{{-- <ul class="flex" style="display:grid; grid-template-columns: 50% 50%;gap: 16px;"> --}}
@foreach ($popularPosts as $post)
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
            <a href="{{ route('ShoWarticle', ['id' => $post->id]) }}"><img src="{{ asset($post->IMG) }}" alt="#" style=""></a>

        </div>
        <div class="popular-post-widget-brief">
            <div class="ltn__blog-meta">
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
