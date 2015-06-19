<div class="col-sm-3 hidden-xs">
    <div class="heading-footer"><h4>From the Blog</h4></div>
    <ul class="list-arrow">
        @foreach($lastPosts as $post)
            <li><a href="{{ URL::route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</div>
