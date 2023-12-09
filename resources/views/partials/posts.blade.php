<!-- partials/posts.blade.php -->

@foreach ($posts as $post)
    <li>
        <div class="popular-post-widget-item clearfix">
            <div class="popular-post-widget-img">
                <a href="{{ route('ShoWarticle', ['id' => $post->id]) }}">
                    <img src="{{ asset($post->IMG) }}" alt="#">
                </a>
            </div>
            <div class="popular-post-widget-brief">
                <div class="ltn__blog-meta">
                    <ul>
                        <li class="ltn__blog-author d-none">
                            <a href="#">by: {{ $post->WRITER }}</a>
                        </li>
                        <li>
                            <span></span>
                            {{-- <span>{{ \Carbon\Carbon::parse($post->DATE_SCHEDULER)->locale('ar')->isoFormat('MMM DD, YYYY') }}</span> --}}
                        </li>
                    </ul>
                </div>
                <h6 class="ltn__blog-title blog-title-line" style="text-align: right">
                    <a href="{{ route('ShoWarticle', ['id' => $post->id]) }}">{{ $post->TITLE }}</a>
                </h6>
            </div>
        </div>
    </li>
@endforeach
