<div class="blog-post mb40">
    @if($links == true)
        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"><img class="img-responsive full-width" src="{{ $post->image }}" alt=""></a>
    @else
        <img class="img-responsive full-width" src="{{ $post->image }}" alt="">
    @endif
    <div class="blog-post-holder">
        <ul class="list-inline posted-info">
            <li>{{ trans('app.by') }} <a href="#">{{ $post->author->name }}</a></li>
            <li>{{ $post->created_at->diffForHumans() }}</li>
            <li>
                @foreach($post->tags as $tag)
                    <a class="label label-info" href="{{ route('blog.tag', ['slug' => $tag->slug]) }}">{{ $tag->name }}</a>
                @endforeach
            </li>
        </ul>
        <hr align="left" class="mt15 mb10">
        @if($links == true)
            <h2><a href="{{ route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
        @else
            <h2>{{ $post->title }}</h2>
        @endif
        {!! $post->excerpt !!}
        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="btn btn-rw btn-primary mt10">{{ trans('app.btn-read-more') }}</a>
    </div>
</div>
