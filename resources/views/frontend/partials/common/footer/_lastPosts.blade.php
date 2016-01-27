<div class="col-sm-3 hidden-xs">
    <div class="heading-footer"><h4>{{ trans('app.blocks.common.last-posts.title') }}</h4></div>
    <ul class="list-arrow">
        @forelse($lastPosts as $post)
            <li><a href="{{ route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></li>
        @empty
            <li><p>{{ trans('app.blocks.common.last-posts.no-post-found') }}</p></li>
        @endforelse
    </ul>
</div>
