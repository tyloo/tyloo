<div class="blog-heading">
    <h3>Last Posts</h3>
</div>
<ul class="list-unstyled latest-posts">
    @foreach($lastPosts as $post)
    <li>
        <h3 class="no-margin"><a href="{{ URL::route('blog.show', ['slug', $post->slug]) }}">{{ $post->title }}</a></h3>
        <small>
            <ul class="list-inline posted-info">
                <li>{{ $post->created_at->diffForHumans() }}</li>
                @include('frontend.partials.blog.blocks.postTags', ['tags' => $post->tags])
            </ul>
        </small>
        {!! $post->excerpt !!}
    </li>
    @endforeach
</ul>
