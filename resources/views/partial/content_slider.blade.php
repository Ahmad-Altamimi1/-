


    @foreach ($posts_content->take(12) as $post)
        <div class="item" style="background-image: url({{ $post->IMG }});">
            <div class="item-desc">
                <h3>{{ $post->TITLE }}</h3>
            </div>
        </div>
    @endforeach





