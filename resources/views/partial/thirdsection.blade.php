
@foreach($third_section->take(12) as $post)

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
            <h3 class="ltn__blog"  style="padding-right:10px""><a href="{{ route('ShoWarticle',['id'=>$post->id]) }} " style="font-size: 14px;>{{ ($post->TITLE) }}</a></h3>
        </div>
    </div>
</div>
@endforeach
